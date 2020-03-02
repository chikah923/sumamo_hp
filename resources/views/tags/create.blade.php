@extends('layout.master')

@section('content')

    <div class="card card-default">
        <div class="card-header">{{ isset($tag) ? 'Edit Tag' : 'Create Tag' }}</div>

        <div class="card-body">


            <form action="{{ isset($tag) ? route(' .update', $tag->id) : route('tags.store') }}" method="POST">
            @csrf

            @if(isset($tag))
                @method('PUT')
            @endif

            <div class="form-group">
            <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($tag) ? $tag->name : '' }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">{{ isset($tag) ? 'Update Tag' : 'Create Tag'}}</button>
            </div>
            </form>
        </div>
    </div>
@endsection
