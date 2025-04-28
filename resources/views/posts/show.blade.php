@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $post->title }}</h1>
        <p>By {{ $post->author->name }} - {{ $post->created_at->format('F j, Y') }}</p>
        <p>{!! nl2br(e($post->content)) !!}</p>
    </div>
    
    <h3>Comments ({{ $post->comments->count() }})</h3>
    
    <!-- List of comments associated to the post-->
    @foreach($post->comments as $comment)
        <div>
            <h4>{{ $comment->commenter_name }}</h4>
            <p>{{ $comment->created_at->format('F j, Y g:i A') }}</p>
            <p>{!! nl2br(e($comment->comment)) !!}</p>
        </div>
        <hr>
    @endforeach
    
    <!-- Add a new comment -->
    <div>
        <h3>Add a Comment</h3>
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <div>
                <label for="commenter_name">Your Name</label>
                <input type="text" id="commenter_name" name="commenter_name" 
                       value="{{ old('commenter_name') }}" required>
                @error('commenter_name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="comment">Your Comment</label>
                <textarea id="comment" name="comment" rows="3" required>{{ old('comment') }}</textarea>
                @error('comment')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection