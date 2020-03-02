@extends('layout.master')
@section('title', 'Categories')
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
        <a href="{{ route('tags.create') }}" class="btn btn-success">Add Tag</a>
        <div class="card project_list">
            <div class="table-responsive">
                @if($tags->count() > 0)
                    <table class="table table-hover c_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                <td> {{ $tag->name }} <span class="badge badge-info">{{ $tag->posts->count() }}</span></td>
                                    <td>
                                        <a href="{{ route('categories.edit', $tag->id) }}" class="btn btn-info waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <span onClick="handleDelete({{ $tag->id }})" class="btn btn-danger waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h3>There are no posts.</h3>
                @endif
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deletemodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="" method="POST" id="deleteCategoryForm">
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
        <p class="text-center text-bold">Are you sure you want to delete this tag?</p>
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
    var form = document.getElementById('deleteCategoryForm')
    form.action = '/dashboard/blog/tags/' + id
    console.log('deleting', form)
    $('#deletemodal').modal('show');
}
</script>

@endsection
