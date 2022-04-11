
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
      
          <div class="col-md-12 row ml-4 " >
            <div class=" col-md-2 card" style="width: 30%;margin-right: 2%;height: 30vh;">
             
              <div class="card-body " >
                <h5 class="card-title">HTML</h5>
                <p class="card-text">taiz University facualty of Engineering.</p>
                <div class="d-flex justify-content-center mb-2">
                  <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                    Add
                  </a>
                  <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                    Edite
                  </a>
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Delete
                  </button>
                  
                </div>
              </div>
            </div>
            <div class=" col-md-2 card" style="width: 30%;margin-right: 2%;height: 30vh;">
             
              <div class="card-body " >
                <h5 class="card-title">CSS</h5>
                <p class="card-text">taiz University facualty of Engineering.</p>
                <div class="d-flex justify-content-center mb-2">
                  <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                    Add
                  </a>
                  <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                    Edite
                  </a>
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Delete
                  </button>
                  
                </div>
              </div>
            </div>
            <div class=" col-md-3 card" style="width: 30%;margin-right: 2%;height: 30vh;">
             
              <div class="card-body " >
                <h5 class="card-title">PYTHON</h5>
                <p class="card-text">taiz University facualty of Engineering.</p>
                <div class="d-flex justify-content-center mb-2">
                  <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                    Add
                  </a>
                  <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                    Edite
                  </a>
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Delete
                  </button>
                  
                </div>
              </div>
            </div>
            
            </div>
            <div class="dir col-md-12 row ml-4 mt-5 "style="display: flex; flex-direction:row margin: 2%;" >
              <div class=" col-md-2 card" style="width: 30%;margin-right: 2%;height: 30vh;">
               
                <div class="card-body " >
                  <h5 class="card-title">JavaScribt</h5>
                  <p class="card-text">taiz University facualty of Engineering.</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                      Add
                    </a>
                    <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                      Edite
                    </a>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                      Delete
                    </button>
                    
                  </div>
                </div>
              </div>
              <div class=" col-md-2 card" style="width: 30%;margin-right: 2%;height: 30vh;">
               
                <div class="card-body " >
                  <h5 class="card-title">ORACLE</h5>
                  <p class="card-text">taiz University facualty of Engineering.</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                      Add
                    </a>
                    <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                      Edite
                    </a>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                      Delete
                    </button>
                    
                  </div>
                </div>
              </div>
              <div class=" col-md-3 card" style="width: 30%;margin-right: 2%;height: 30vh;">
               
                <div class="card-body " >
                  <h5 class="card-title">PHP</h5>
                  <p class="card-text">taiz University facualty of Engineering.</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
                      Add
                    </a>
                    <a type="button" class="btn btn-secondary me-2" href="./corses-edite.html">
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
            @endsection('content')
              
               

