@extends('layout.master')
@section('title', 'Create Post')
@section('parentPageTitle', 'Blog')
@section('content')

<div class="card card-default">
    <div class="card-header">{{ isset($post) ? 'Edit Post' : 'Create Post' }}</div>

    <div class="card-body">



        <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @isset($post)
                @method('PUT')
            @endisset


            <div class="form-group">
                <label for="category">Category</label>

                <select name="category_id" id="category_id" class="form-control  show-tick ms">
                    <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                    @isset($post)
                        @if($category->id == $post->category_id)
                            selected
                        @endif
                    @endisset
                        >{{ $category->name }}</option>

                @endforeach
                </select>
            </div>

            @if($tags->count() > 0)
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select name="tags[]" id="tags" class="form-control show-tick ms select2" multiple data-placeholder="Select" required>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"
                                @isset($post)
                                    @if($post->hasTag($tag->id))
                                        selected
                                    @endif
                                @endisset
                            >{{ $tag->name }}</option>

                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ isset($post) ? $post->title : '' }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="50" rows="5">{{ isset($post) ? $post->description : '' }}</textarea>
            </div>

            <div class="form-group">
                <label for="content">content</label>
                <textarea type="hidden" class="form-control" name="content" id="ckeditor" >{{ isset($post) ? $post->content : '' }}</textarea>
            </div>

            <div class="form-group">
                <label for="published_at">Published at</label>
                <input type="text" class="form-control datepicker" name="published_at" id="published_at" value="{{ isset($post) ? $post->published_at : '' }}" valu>
            </div>

            @isset($post)
                <div class="form-group">
                    <img src="{{ asset("storage/$post->image") }}" alt=""style="width: 100%">
                </div>
            @endisset
            <div class="form-group">
                <label for="photo">Image</label>
                <input type="file" class="form-control" name="photo" id="photo">
            </div>

            <div class="form-group">
             <button type="submit" class="btn-success">{{ isset($post) ? 'Edit Post' : 'Create Post' }}</button>
            </div>



        </form>
    </div>
</div>

@endsection

@section('page-script')
    <script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>

    <script>


$(function () {

    $('.select2').select2();
    $(".search-select").select2({
        allowClear: true
    });

    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    CKEDITOR.replace('ckeditor');
    CKEDITOR.config.height = 300;

});

</script>

@endsection

@section('page-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css" integrity="sha256-vu9SAWhYz3+PNEdy/FtYE0QBaAS2e/cB7OcSWV28WcM=" crossorigin="anonymous" />

<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>

@endsection
