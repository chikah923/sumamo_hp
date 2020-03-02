<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $search = request()->query('search');

        $posts = Post::searched()->simplePaginate(10);

        return view('blog.blog_list')
            ->with('categories', Category::all())
            ->with('tags', Tag::all())
            ->with('posts', $posts);
    }

    public function category (Category $category)
    {
        return view('blog.blog_list')
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('category', $category)
        ->with('posts', $category->posts()->searched()->simplePaginate(10));

    }

    public function tag (Tag $tag)
    {
        $search = request()->query('search');

        return view('blog.blog_list')
            ->with('categories', Category::all())
            ->with('tags', Tag::all())
            ->with('tag', $tag)
            ->with('posts', $tag->posts()->searched()->simplePaginate(10));
    }


    public function showPost(Post $post)
    {
        return view('blog.show')
            ->with('post', $post)
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }

}
