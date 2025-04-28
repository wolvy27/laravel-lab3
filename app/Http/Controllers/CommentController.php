<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; 

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $postId)
    {
        // Validate input fields
        $validated = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        // Save new comment linked to the post
        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $validated['commenter_name'],
            'comment' => $validated['comment'],
        ]);

        // Redirect back to the post page upon creation
        return redirect()->route('posts.show', $postId)->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
