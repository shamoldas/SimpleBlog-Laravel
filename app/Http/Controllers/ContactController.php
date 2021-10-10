<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Post;
use App\Posts;
use App\Product;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Contact::all()->toArray();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required',
            'location'     =>  'required'
        ]);
        $contact = new Contact([
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'location'     =>  $request->get('location'),
            'subject'    =>  $request->get('subject'),
            'message'     =>  $request->get('message')
        ]);
        $contact->save();
        return redirect()->route('contact.create')->with('success', 'Thank  You For Your Message.Contact Soon..!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Data Deleted');
    }

        public function userposts()
        {
            $posts = Post::all();
            $posts=Post::paginate(10);
            return view('post.userpost', compact('posts'));
        }
    public function aboutme()
    {
        
        return view('post.aboutme');
    }

       public function showbook()
    {
        //
         $products = Product::latest()->paginate(5);            
         return view('products.showbooks',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function blog()
    {
        $posts = Post::all();
        $posts=Post::paginate(10);
        return view('post.blog', compact('posts'));
    }

    
    /*
    public function blog()
    {
        //
         $posts = Post::latest()->paginate(10);            
         return view('post.blog',compact('posts'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    */

 

    public function autocomplete(Request $request)
    {
        $data = Post::select("title")
                ->where("title","LIKE","%{$request->query}%")
                ->get();
   
        return response()->json($data);
    }

    public function search(Request $request)

    {
    // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search.search', compact('posts'));
    }


}
