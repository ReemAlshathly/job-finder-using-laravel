@extends('front.header')
    @section('content')
  
  <section class="col-md-12" >
    <div class="container py-5 ">
     
      <div class="  row"style=" justify-content: center;margin-top:0% ;width: 100%;">
        <main class="col-md-12 ms-sm-auto col-lg-10 px-md-4"  >
      
          <div class="b-example-divider"></div>
          <div class="container rounded  mt-5 mb-5" style="justify-content: center;">
            <div class=" col-md-9 row " style="justify-content: center;">
               
                <div class="col-md-9 border-right bg-light">
                    <div class="p-3 py-5">
                        <div class="d-flex  align-items-center " style="width: 80%;">
                            <h4 class="text-right">Add Your detials</h4>
                        </div>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>
            @if ($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
                
            @endforeach
                
            @endif

          <form id="formAuthentication" class="mb-3" action="{{ route('do_login') }}" method="POST" enctype="multipart/form-data">
            @csrf
                        <div class=" mt-3">
                          <div class="col-md-12"><label class="labels">Email</label>
                          <input type="text"class="form-control" name="email_username" 
                          placeholder="Enter your email or username" autofocus>
                          @error('email_username')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
                        </div>

                          <div class="col-md-12">
                          <a href="auth-forgot-password-basic.html">
                  <small>Forgot Password?</small>
                </a>  
                          <label class="labels">password</label>
                          <input type="password" class="form-control" name="user_pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" >
                       </div>

                      </div>
</div>
                      <div class="mb-3">
              <button class="btn btn-secondary d-grid w-100" type="submit">log in</button>
            </div>
          </form>
                       
                </div>
                
            </div>
        </div>
        
            </main>
          </div>
        </div>
       
  </section>
</main>


    @endsection