@extends('layouts.app')
@section('content')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>



        @if($posts->isNotEmpty())
        @foreach ($posts as $post)
            <div class="post-list">
                <p>Title:{{ $post->title }}</p>
                <p>Description:{{ $post->body }}</p>
              
            </div>
        @endforeach

        @else 
            <div>
                <h2>No posts found</h2>
            </div>
        @endif


@endsection