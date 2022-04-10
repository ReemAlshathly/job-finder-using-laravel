@extends('admin.layout.master')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Advertisment</span> Mangement
  </h4>
  
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Add detials</h5>
        <div class="card-body">
        <div class="mb-3 row">
            <label for="html5-url-input" class="col-md-2 col-form-label">Title</label>
            <div class="col-md-10">
              <input class="form-control" type="text" value="" id="html5-url-input" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-url-input" class="col-md-2 col-form-label">URL</label>
            <div class="col-md-10">
              <input class="form-control" type="url" value="" id="html5-url-input" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-url-input" class="col-md-2 col-form-label">Imge</label>
            <div class="col-md-10">
              <input class="form-control" type="file" value="" id="html5-url-input" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-url-input" class="col-md-2 col-form-label">Company name</label>
            <div class="col-md-10">
              <input class="form-control" type="text" value="" id="html5-url-input" />
            </div>
          </div>
         </div>
         
        
      </div>
    </div>
    
      <!-- File input -->
     
  </div>
@endsection