@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="css/imageScrolling.css">
<script src="js/testEffect.jquery.js"></script>
<script src="{{ asset('js/textEffect.jquery.js') }}" defer></script>

<!--
<section>

      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color:#0A84AC;letter-spacing: 8px;text-shadow: .2em .2em .1em gray;"><b>ABOUT ME</b></h3></center>

          </div>
        </div>
      </div>
</section>
-->
<section>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <center><h3 style="color:#0A84AC;letter-spacing: 8px;"><b>ABOUT ME</b></h3></center>

          </div>
        </div>
      </div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
          <p id="demo1"> Random Effects Example book is your faithful friend..! কৃতজ্ঞতা কি কখনো ভালোবাসা থেকে জন্মায় ? কৃতজ্ঞতা মানুষকে নম্র করে হয়তো, সেই নম্রতা  সইতে শেখায়। সয়ে গেলে এক সময় ভালোবাসা তৈরী হয়ে যায়!!</p>

          <script> 
          jQuery(document).ready(function($) {
          $('#demo1').textEffect();
          });
          </script>
			</div>
		</div>
	</div>
</section>

<section>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                <img src="images/shamol.jpg" class="img-thumbnail" >   
                </div>
                <div class="col-md-6">
                     
                      <h3 id="demo2">Web Application Development</h3>
                      <script>
                        jQuery(document).ready(function($) {
                        $('#demo2').textEffect({
                        effect: 'jumble', // the type of the text aniamtion. fade, glow, jumble, slide, dropdown and random (default)
                        effectSpeed: 250, // the speed in ms at which new letters begin to animate.
                        completionSpeed: 3000, // the speed in ms of the text aniamtion.
                        jumbleColor: '#7f7f7f' // the color of the jumbled letters.
                        });
                        });
                      </script>
                      <h3 id="demo3">StartUp Company Website & Planning</h3>
                      <h3 id="demo4">Software Development</h3>
                      <h3 id="demo5">Application Development </h3>
                    
                </div>
            </div>
        </div>

</section>


<script>
jQuery(document).ready(function($) {
$('#demo3').textEffect({
effect: 'fade', // the type of the text aniamtion. fade, glow, jumble, slide, dropdown and random (default)
effectSpeed: 200, // the speed in ms at which new letters begin to animate.
completionSpeed: 6000, // the speed in ms of the text aniamtion.
jumbleColor: '#7f7f7f' 
});
});
</script>

<script>
jQuery(document).ready(function($) {
$('#demo4').textEffect({
effect: 'slide', // the type of the text aniamtion. fade, glow, jumble, slide, dropdown and random (default)

});
});
</script>


<script>
jQuery(document).ready(function($) {
$('#demo5').textEffect({
effect: 'dropdown', // the type of the text aniamtion. fade, glow, jumble, slide, dropdown and random (default)
effectSpeed: 100, // the speed in ms at which new letters begin to animate.
completionSpeed: 6000, // the speed in ms of the text aniamtion.
jumbleColor: '#7f7f7f' 

});
});
</script>


<br><br>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <strong><h4><i class='fas fa-seedling'></i>Professional Affiliations</h4></strong>
        <menu>
          <ol type="disc">
            <li>Advisory Board,Regulation Review. Advisory Board,Regulation Review</li> 
            <li>Board of Director of Advisory Board,Regulation Review.</li> 
            
            <li>Advisory Board, Food and Drug Law Institute.</li> 
            <li>etc</li>
          </ol>
        </menu>
      </div>
   
      <div class="col-md-6">
        <strong><h4><i class='far fa-object-group'></i>Honors & Awards</h4></strong>
        <ol>
          <dt>UnderGraduate</dt>
          <dd>BSc(Engr) In Computer Science & Engineering at Hajee Mohammad Danesh Science & Technology University. .</dd>
          <dt>Higher Seconadary</dt>
          <dd>Joypurhat Government Collge in Science Group.</dd>
        </ol>
      </div>
      
      
      
    </div>
  </div>
</section>

@endsection