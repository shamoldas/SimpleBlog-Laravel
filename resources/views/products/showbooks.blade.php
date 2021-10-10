@extends('layouts.app')
     
@section('content')

<!--
<section>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <center><h3 style="color:#0A84AC;letter-spacing: 8px;"><b>BOOK LIST</b></h3></center>

          </div>
        </div>
      </div>
</section>


-->
<section>

      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color:#0A84AC;letter-spacing: 8px;text-shadow: .2em .2em .1em gray;"><b>BOOK LIST</b></h3></center>

          </div>
        </div>
      </div>
</section>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              @foreach ($products as $product)
                <div class="col-md-4">
                    <figure>
                        <picture>
                         
                            <img src="image/{{ $product->image }}" height="500px" width="300px" class="img-thumbnail">                        
                        </picture>  
                    </figure>
                </div>
                <div class="col-md-8">

                    <h5><b>Book Name:</b>{{ $product->name }}</h5>
                    <p style="text-align: justify;"><strong>Description:</strong>{{ $product->detail }}</p>
                    <hr>        
                  
                    
                </div>
                @endforeach
            </div> 
        </div>
    </div>
</div>

    <ul class="pagination">
        
        <li class="page-item"><a class="page-link" href="{{$products->previouspageUrl()}}">Previous</a></li>
        <li class="page-item"><a class="page-link" href="{{$products->nextpageUrl()}}">Next</a></li>
    </ul>
      
@endsection