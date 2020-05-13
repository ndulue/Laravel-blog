<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class DetailController extends Controller
{
    public function getDetail($id)
    {
        $details = Post::where('post_id', $id)->first();
        $comments = Comment::where('post_id', $details->post_id)->get();
        $count = Comment::where('post_id', $details->post_id)->count();
        return view('post-details', [
            'details' => $details,
            'comment' => $comments,
            'count' => $count
        ]);
    }

    public function postDetail(Request $request, $id){

        $request->validate([
            'name' => 'required|string|max:250',
            'email_address' => 'required|email|max:250',
            'message' => 'required|integer|max:250'
        ]);

        $comment = new Comment;
        $comment->name = $request->input('name');
        $comment->email = $request->input('email_address');
        $comment->message = $request->input('message');
        $comment->post_id = $id;
        $comment->save();
        
        return back()->with([
            'success' => 'Comment saved'
        ]);

        return[
            'name.required' => 'Enter your name',
            'email.required' => 'Enter your email address',
            'message.required' => 'Enter your message',
            'name.string' => 'Your name should contain only alphabet and whitespaces',
            'email.email' => 'Enter a valid email address',
            'message.string' => 'Your message should contain only alphabet and whitespacese',
        ];
    }
}
