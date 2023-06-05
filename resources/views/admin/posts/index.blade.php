@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{Route('admin.posts.create')}}" role="button">Add Post</a>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Posts</caption>
                <tr>
                    <th>ID</th>
                    <th>Cover Image</th>
                    <th>Title</th>
                    <th>slug</th>
                    <th>content</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($posts as $post)
                    <tr class="table-primary" >
                        <td scope="row">{{$post->id}}</td>
                        <td><img src="{{$post->cover}}" width="200" alt="{{$post->title}}"></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>{{$post->content}}</td>
                    </tr>  
                    @endforeach
                </tbody>
        </table>
    </div>
    
@endsection