<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;


class CommentController extends Controller
{
    //

    public function store(Request $request)
		{
			
				$comment = new Comment;
				$comment->body = $request->get('comment_body');
				$comment->user()->associate($request->user());
				$post = Post::find($request->get('post_id'));
				//$post = Post::find($request->get('parent_id'));
				$post->comments()->save($comment);
				return back();
				

				/*
			$request->validate([
            'name'=>'required',
              ]);

        $comment = new Comment([
            'comment_body'=>$request->get('comment_body'),
            'user' => $request->get('user'),
            'fname' => $request->get('fname'),
            'edulevel'=>$request->get('edulevel'),
            'department' => $request->get('departmnet'),
            'year' => $request->get('year'),
            'section'=>$request->get('section'),
            'session'=>$request->get('session'),
            'message' => $request->get('message')
        ]);
        $student->save();
        */

		}

		public function replyStore(Request $request)
		{
				$reply = new Comment();
				$reply->body = $request->get('comment_body');
				$reply->user()->associate($request->user());
				$reply->parent_id = $request->get('comment_id');
				$post = Post::find($request->get('post_id'));
				$post->comments()->save($reply);
				return back();
		}
}
