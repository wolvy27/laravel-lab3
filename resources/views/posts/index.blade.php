@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    
    <div>
        @foreach($posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                <p>By {{ $post->author->name }}</p>
                <p>{{ Str::limit($post->content, 100) }}</p>
                <!-- Link to view full post -->
                <a href="{{ route('posts.show', $post->id) }}">Read More</a>
            </div>
            <hr>
        @endforeach
    </div>
@endsection