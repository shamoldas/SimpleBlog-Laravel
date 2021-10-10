@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="css/textSlide.css">
<link rel="stylesheet" href="css/imageScrolling.css">

<link type="text/css" rel="stylesheet" href="magicscroll/imageScrolling.css"/>


<!-- Jumbotron -->
<div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white" style="
      background-image: url('image/20210912172956.jpg'); height:500px;
    ">
  <h1 class="mb-3 h2">Shamol Das</h1>

  <p>
    To be a highly competent human capital through extensive innovate work. Utilize the potentiality through hard work and devote myself for the development and peace of the nation and all humanity.
  </p>
</div>
<!-- Jumbotron -->
<section>

<div class="container">
  <div class="row">
    <div class="col-md-6">
		<p style="text-align:justify;">
		<img src="images/Shamol++.jpg" alt="Smiley face" style="margin-left:5px;float:right;width:100px;height:100px; border: 1px dashed;">
		A paragraph with a floating image. A paragraph with a floating image. A paragraph with a floating image. To be a highly competent human capital through extensive innovate work.    To be a highly competent human capital through extensive innovate work. Utilize the potentiality through hard work and devote myself for the development and peace of the nation and all humanity To be a highly competent human capital through extensive innovate work. </p>
    </div>
    <div class="col-md-6">
      <p style="
box-sizing: border-box;
box-sizing: content-box;
border-radius: 1em;
border: 1px solid red;
margin: 3px;">  a simple box is given a width of
        500 pixels, a height of 150 pixels, with 20 pixels of padding, a 2-pixel border,
        and a 20-pixel margin all around. Using the content box model, the width
        and height values are applied to the content area only.a simple box is given a width of
        500 pixels, a height of 150 pixels, with 20 pixels of padding, a 2-pixel border,
        and a 20-pixel margin all around. Using the content box model, the width
        and height values are applied to the content area only.</p> 
    </div>
  </div>

</div>

</section>


<div class="container">
  <div class="row">
    <div class="col-md-12">

      <figure>
        <blockquote class="blockquote">
          <p>A well-known quote, contained in a blockquote element.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
      </figure>
    </div>
  </div>
</div>







<div id="image_container"> <span class="title">Book List</span>
  <ul id="imgs">
    <li><img src="https://unsplash.it/800/600?image=489" alt="" /></li>
    <li><img src="image/20210913140202.png" alt="" /></li>
    <li><img src="image/20210912172956.jpg" alt="Book List " /></li>
    <li><img src="https://unsplash.it/800/600?image=487" alt="" /></li>
    <li><img src="https://unsplash.it/800/600?image=486" alt="" /></li>
    <li><img src="https://unsplash.it/800/600?image=485" alt="" /></li>
    <li><img src="https://unsplash.it/800/600?image=484" alt="" /></li>
    <li><img src="https://unsplash.it/800/600?image=483" alt="" /></li>
  </ul>
  <span class="title"></span> 
</div>
<div id="controler"> </div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script type="text/javascript" src="js/ImageScroll.js"></script> 
<script src="{{ asset('js/ImageScroll.js') }}" defer></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


<script type="text/javascript">

  $('#imgs').imageScroll({
    orientation:"left",
    speed:600,
    interval:1000,
    hoverPause:true,
    /*
    callback:function(){
      var ordinal = $(this).find("img").first().attr("src");
      <!-- console.log(ordinal); -->
      $(this).next("span").text("CallbackDisplay: hidden "+ordinal+"!");
    }
    */
  });

</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>












@endsection