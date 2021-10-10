<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    	public function __construct()
		{
			return $this->middleware('auth');
		}

		public function index()
		{
			//$posts = Post::all();
			//$posts=Post::paginate(10);
			$posts = Post::latest()->paginate(10);            
			return view('post.index', compact('posts'));
		}
		
		public function create()
		{
			return view('post.create');
			//return view('post.post');
		}

		public function store(Request $request, Post $Post)
		{
				

				 $request->validate([
            'title' => 'required',
            'body' => 'required'
        		]);

			//$input = $request->all();

				$post = new Post;
				$post->title = $request->get('title');
				$post->body = $request->get('body');
				$post->save();
				return redirect('posts');
		}

		public function edit($id)
		{
			$post = Post::find($id);
			return view('post.edit', compact('post'));
		}
	

		public function update(Request $request,$id)
		{
			
				 $request->validate([
            'title' => 'required',
            'body' => 'required'
        		]);
				 
				$post = Post::find($id);
				//$post = new Post;
				$post->title = $request->get('title');
				$post->body = $request->get('body');
				$post->save();
    
        		return redirect()->route('post.index')
                        ->with('success','Post Updated successfully');
		}

		 public function destroy(Post $post)
    	{
        //
         	$post->delete();            
          	return redirect()->route('post')->with('success','Post Deleted successfully');
    	}


		public function show($id)
		{
			$post = Post::find($id);
			return view('post.show', compact('post'));
		}


		public function userposts()
		{
			$posts = Post::all();
			$posts=Post::paginate(10);
			return view('post.userpost', compact('posts'));
		}

		/*
		public function aboutme()
		{
		
			return view('post.aboutme');
		}
		*/
		public function booklist()
		{
		
			return view('post.booklist');
		}

	}
