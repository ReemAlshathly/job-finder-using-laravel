@extends('front.header')
    @section('content')
     <!--       slider               -->
     <div class="container  mt-5 mb-5">
      <div class="row m-0">
      <div class="col-md-12 p-0  pt-4 pb-4">
      <form class="bg-light p-4 m-auto" action="#">
      <div class="row">
      <div class="col-md-12">
      <div class="mb-3">
      <input type="text" class="form-control" placeholder="Full Name" required>
      </div>
      </div>
      <div class="col-md-12">
      <div class="mb-3">
      <input type="email" class="form-control" placeholder="Email" required>
      </div>
      </div>
      <div class="col-md-12">
      <div class="mb-3">
      <input type="number" class="form-control" placeholder="Number" required>
      </div>
      </div>
      <div class="col-md-12">
      <div class="mb-3">
      <textarea class="form-control" placeholder="Message" required rows="3"></textarea>
      </div>
      </div>
      <button type="button" class="btn btn-custom btn-lg btn-block mt-3">Send Now</button>
      </form>
      </div>
      </div>
      </div>
      @endsection