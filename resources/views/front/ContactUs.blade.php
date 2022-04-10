@extends('front.header')
    @section('content')
     <!--       slider               -->
     <div class="container  mt-3 mb-3">
      <div class="row m-0">
      <div class="col-md-12 p-0  pt-4 pb-4" >
      <div class="card-body">
        @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
      <form class="bg-light p-4 m-auto" action="{{ route('save_messege') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col-md-4">
      <div class="mb-3">
      <input type="text" class="form-control" placeholder="Full Name" name="Name">
      </div>
      </div>
      <div class="col-md-4">
      <div class="mb-3">
      <input type="text" class="form-control" placeholder="Email" name="Email">
      </div>
      </div>
      <div class="col-md-4">
      <div class="mb-3">
      <input type="int" class="form-control" placeholder="phone" name="phone">
      </div>
      </div>
      <div class="col-md-12">
      <div class="mb-3">
      <textarea class="form-control" placeholder="Message"  rows="4" name="Message"></textarea>
      </div>
      </div>
      <button type="button" class="col-md-2 btn btn-custom btn-dark btn-block mt-3">Send Now</button>
      </form>
      </div>
      </div>
      </div>
</div>
      @endsection