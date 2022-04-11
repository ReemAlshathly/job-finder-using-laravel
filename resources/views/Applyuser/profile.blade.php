@extends('Applyuser.layout.saide')
@section('content')
  
  
      <section class="col-md-12">
        <div class=" container py-5 " >
          <div class="row ">
            <div class="col" >
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4" >
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="./profile.html">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            </div>
          </div>
      
          <div class="row">
            <div class=" col-lg-4">
              <div class="card mb-5">
                <div class="card-body text-center bg-light ">
                  <img src="./images/me.PNG" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">Reem Alshathely</h5>
                  <p class="my-3 mb-1">Full Stack Developer</p>
                  <p class="my-3 mb-4">yemen-Taiz</p>
                
                </div>
              </div>
              
            </div>
            
            <div class="col-lg-7 ">
              <div class="card mb-4 bg-light">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Reem Alshathely</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">reem250139@gmail.com</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(0967) 775301706</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(0967) 739218431</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Jamal-street Taiz Yemen</p>
                    </div>
                  </div>
                 
                </div>
                <div class="d-flex justify-content-center mb-2">
                  
                  <a type="button" class="btn btn-secondary me-2" href="./popup.html">
                    Edite
                  </a>
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Delete
                  </button>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- Button trigger modal -->
    
    
    <!-- Modal -->
    
      </section>
      <div class="modal fade" id="myModal" style="width: 100%;">
        <div class="modal-dialog">
          <div class="modal-content"style="width: 100%;">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Are You Sure You Want to Deleta ?</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
            </div>
            <div class="modal-footer">
              <a href="./profile.html" type="button" class="btn btn-danger" >yes<a>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div></div></div></div>
            @endsection