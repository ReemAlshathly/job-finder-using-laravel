@extends('front.header')
    @section('content')
     <!--       slider               -->
     <hr class="featurette-divider">

     <div class="row featurette"  style="justify-content: center;">
       <div class="col-md-6">
         <h2 class="featurette-heading"> <span class="text-muted">Find Your Jobs.</span></h2>
         <p class="lead">This website help you to find that job you want to apply to .</p>
       </div>
       <div class="col-md-4">
         <img src="./images/j2.jpg" width="auto">
 
       </div>
     </div>
     <hr class="featurette-divider">

    <div class="row featurette ml-4" style="justify-content: center;">
      <div class="col-md-5 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-4 order-md-1 ml-4">
        <img src="<?php echo asset('images/j1.jpg')?>">
      </div>
    </div>

    <hr class="featurette-divider" >

    <div class="row featurette"  style="justify-content: center;">
      <div class="col-md-6">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-4">
        <img src="./images/j3.jpg">


      </div>
    </div>


 
    @endsection