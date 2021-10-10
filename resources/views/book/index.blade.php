@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="row">
				@foreach($posts as $post)
				<div class="col-md-4">
					<figure>
						<picture>
							<img src="images/shamol.jpg" class="img-thumbnail" >
							<source srcset="assets/image/cp100x50.jpeg" media="(max-width: 480px)">							
						</picture>	
					</figure>
				</div>
				<div class="col-md-8">
					
					foreach($posts as $post)
					
					<h4>Book Code:{{ $post->id }}</h4>
					<h5><b>Book Name:</b>{{ $post->title }}</h5>
					<p style="text-align: justify;"><strong>Description:</strong>{{ $post->body }}</p>
					<hr>		
					endforeach
					
				</div>
				@endforeach
	 		</div> 
		</div>
	</div>

	<ul class="pagination">
		
		<li class="page-item"><a class="page-link" href="{{$posts->previouspageUrl()}}">Previous</a></li>
		<li class="page-item"><a class="page-link" href="{{$posts->nextpageUrl()}}">Next</a></li>
	</ul>

</div>
@endsection