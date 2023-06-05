@extends('layouts.admin')
@section('content')
<form action="{{Route('admin.posts.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cover</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Content</label>
        <textarea class="form-control" name="" id="" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection