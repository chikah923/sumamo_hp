<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Illuminate\Support\Facades\Storage;
use App\Tag;
use App\Permission;
use Gate;

class PostsController extends Controller
{

    use MediaUploadingTrait;

    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('posts.create')->with(['categories' => Category::all(), 'tags' => Tag::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostrequest $request)
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // upload the image
        //$image = $request->image->store('posts');


        //create the post
        $post = Post::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' =>  $request->description,
            'content' => $request->content,
            'published_at' => $request->published_at,

        ]);

        if ($request->file('photo'))
            {
                if($post->photo)
                {
                    $post->photo->delete();
                    $post->addMedia($request->file('photo'))->toMediaCollection('photo');
                }
                elseif(!$post->photo)
                {
                    $post->addMedia($request->file('photo'))->toMediaCollection('photo');
                }
            }


        if ($request->tags)
        {
            $post->tags()->attach($request->tags);
        }
        //flash a msg

        session()->flash('success', 'post created successfully');

        //redirect
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('posts.create')->with(['post' => $post, 'categories' => Category::all(), 'tags' => Tag::all() ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //construct data
        $data = $request->only(['category_id','title','description','content', 'published_at']);


        if ($request->tags)
        {
            $post->tags()->sync($request->tags);
        }

        $post->update($data);

        // check if new image delete old one
        if ($request->file('photo'))
        {
            if($post->photo)
            {
                $post->photo->delete();
                $post->addMedia($request->file('photo'))->toMediaCollection('photo');
            }
            elseif(!$post->photo)
            {
                $post->addMedia($request->file('photo'))->toMediaCollection('photo');
            }
        }


        //flash a msg

        session()->flash('success', 'post updated successfully');

        //redirect
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed())
        {
            $post->deleteImage();
            $post->forceDelete();
        }
        else
        {
            $post->delete();
        }

        session()->flash('success', 'Post Deleted');

        return redirect(route('posts.index'));
    }



    public function trashed ()
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trashed = Post::onlyTrashed()->get();

        return view('posts.index')->withPosts($trashed);
    }

    public function restore($id)
    {
        //abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        $post->restore();

        session()->flash('success', 'Post restored successfully ');

        return redirect(route('posts.index'));
    }
}
