@extends('layouts.app')
@section('content')




<div class="container" style="margin-bottom:2em; ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="search" required/>
                    <button type="submit">Search</button>
                </form>
         
            </div> 
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-7">
           
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="search" required/>
                    <button type="submit">Search</button>
                </form>
         
        </div>
    </div>
</div>


<div class="container">
    <h1>Auto Complete Search</h1>   
    <input class="typeahead form-control" type="text">
</div>
   
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
             @foreach($posts as $post)

                    <h5><b>Title:</b>{{ $post->title }}</h5>
                    <p style="text-align: justify;"><strong>Description:</strong>{{$post->body}}</p>

                    <div class="pull-right">
                    	<a class="btn btn-info" href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Comment</a>
                    </div>

                    <hr>        

                @endforeach
            </div> 
        </div>
    </div>


    <ul class="pagination">
		<li class="page-item"><a class="page-link" href="{{$posts->previouspageUrl()}}">Previous</a></li>
		<li class="page-item"><a class="page-link" href="{{$posts->nextpageUrl()}}">Next</a></li>

	</ul>


</div>

<div class="container">



</div>
@endsection