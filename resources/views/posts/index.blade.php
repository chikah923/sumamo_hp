@extends('layout.master')
@section('title', 'Posts')
@section('parentPageTitle', 'Blog')

@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>
                    <h5>2,365</h5>
                    <span>Total Posts</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">5,2,3,7,6,4,8,1</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>
                    <h5>365</h5>
                    <span>unpublished</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">8,2,6,5,1,4,4,3</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>
                    <h5>1950</h5>
                    <span>Published</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card state_w1">
            <div class="body d-flex justify-content-between">
                <div>
                    <h5>50</h5>
                    <span>Trashed</span>
                </div>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#04BE5B">7,5,3,8,4,6,2,9</div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
        <a href="{{ route('posts.trashed') }}" class="btn btn-warning">View trashed</a>
        <div class="card project_list">
            <div class="table-responsive">
                @if($posts->count() > 0)
                    <table class="table table-hover c_table">
                        <thead>
                            <tr>

                                <th>Image</th>
                                <th>title</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="{{ ($post->photo) ? $post->photo->getUrl('thumb'): '' }}" alt="Photo" width="100px" height="60px"></td>
                                    <td>{{ $post->title }}</td>
                                <td><span class="badge {{ ($post->published_at)? 'badge-success' : 'badge-warning'}}">{{ ($post->published_at)? 'Published' : 'unpublished'}}</span></td>
                                    <td>
                                        @if(!$post->trashed())
                                            <form action="" method="POST" id="trashPostForm{{$post->id}}">
                                                @csrf
                                                @method('DELETE')
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                    <span onClick="handleDelete({{ $post->id }})" class="btn btn-danger waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></span>
                                                </form>
                                        @else
                                            <form action="{{ route('posts.restore', $post->id) }}" method="POST" id="RestorePost">
                                            @csrf
                                            @method('PUT')
                                                <button type="submit" class="btn btn-info waves-effect waves-float btn-sm waves-green">Restore</button>
                                            </form>

                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" id="trashPostForm">
                                            @csrf
                                            @method('DELETE')
                                                <button onClick="handleDelete({{ $post->id }})" class="btn btn-danger waves-effect waves-float btn-sm waves-red">Delete permenantly</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                <h3>There are currently no posts.</h3>
                @endif
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deletemodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <form action="" method="POST" id="trashPostForm">
     @csrf
     @method('DELETE')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletemodalLabel">Confirm Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-center text-bold">Are you sure you want to delete this post?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
      </form>
    </div>
  </div>


@endsection


@section('page-script')
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/sparkline.js')}}"></script>



<script>
function handleDelete (id) {
    var form = document.getElementById('trashPostForm')
    form.action = '/dashboard/blog/posts/' + id
    console.log('trashing', form)
    $('#deletemodal').modal('show');
}
</script>

@stop
