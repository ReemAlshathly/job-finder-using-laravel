
  @extends('front.header')
    @section('content')
  <section class="col-md-12" >
    <div class="container py-5 ">
     
  
      <div class="  row"style=" justify-content: center;margin-top:0% ;width: 100%;">
        <main class="col-md-12 ms-sm-auto col-lg-10 px-md-4"  >
      
          <div class="b-example-divider"></div>
          <div class="container rounded  mt-5 mb-5" style="justify-content: center;">
            <div class=" col-md-9 row " style="justify-content: center;">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="margin-right: 20%;">
                      <input type="file" class="rounded-circle " width="150px" height="150px"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex  align-items-center " style="width: 80%;">
                            <h4 class="text-right">Add Your detials</h4>
                        </div>
                        @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          <form id="formAuthentication" class="mb-3" action="{{ route('save_user') }}" method="POST">
          @csrf
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">full Name</label><input type="text" name="full_name"  class="form-control" placeholder="first name" value="{{ old('full_name') }}"></div>
                            <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value="{{ old('u_email') }}" name="u_email" placeholder="email"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">password </label><input type="password" name="user_pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" class="form-control" placeholder="enter email id" value=""></div>
        
                            <div class="col-md-12"><label class="labels">confirm Password</label><input type="password"  class="form-control" name="confirm_pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" placeholder="enter phone number" value=""></div>
                            <!-- <div class="col-md-12"><label class="labels">phone </label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div> -->
                            </div>
                        
                        <div class="mt-5 text-center"> 
                        <button class="btn btn-secondary d-grid w-100">
              Sign up
            </button>
                      </div>
</form>
                </div>
</form>
            </div>
        </div>
        
            </main>
          </div>
        </div>
       
  </section>
</main>

    @endsection
