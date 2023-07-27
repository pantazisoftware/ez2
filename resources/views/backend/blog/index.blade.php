@extends('backend.layouts.app')

@section('title', __('Blog Posts'))

@section('content')
    <div class="card">
        <div class="p-3 card-header flex-column justify-content-md-between d-flex flex-md-row">
            <div>
                <h3>Blog Posts</h3>
            </div>
            <div>
                <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Create Post</a>
            </div>
        </div>
        <div class="">
            <table class="table overflow-hidden rounded card-body table-striped">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Image and Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </thead>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    <div class="media">
  <img class="mr-3 img-thumbnail" width="64" height="64" src="{{ $post->image }}" alt="{{ $post->title }}">
  <div class="media-body">
    <h5 class="mt-0">{{ $post->title }}</h5>
  </div>
</div>
                    
                    </td>
                <td><a href="#"><code>/{{ $post->slug }}</code></a></td>
                <td><a href="{{ route('admin.post.edit', $post->id) }}" class="btn-link btn">Edit</a></td>
            </tr>
            @endforeach
        </table>
        </div>
        
    </div>
@endsection
