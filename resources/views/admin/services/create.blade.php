@extends('admin.layout.master')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> New service
  </h4>
  
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Add data</h5>
        <div class="card-body">
        <div class="card-body">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" aria-describedby="floatingInputHelp" />
            <label for="floatingInput">Title</label>
            <div id="floatingInputHelp" class="form-text">We'll never share your details with anyone else.</div>
          </div>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" aria-describedby="floatingInputHelp" />
            <label for="floatingInput">Description</label>
            <div id="floatingInputHelp" class="form-text">We'll never share your details with anyone else.</div>
          </div>
        </div>
       
          
        
      </div>
    </div>
  </div>
@endsection