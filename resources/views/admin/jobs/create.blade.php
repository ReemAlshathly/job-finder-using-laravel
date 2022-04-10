@extends('admin.layout.master')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Add New Job
  </h4>
  
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Add job detials</h5>
        
       
        <div class="card-body">
        @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          <form id="formAuthentication" class="mb-3" action="{{ route('save_job') }}" method="POST" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="_method" value="post">

          <div>
            <label  class="form-label">job title</label>
            <input type="text" class="form-control"  placeholder="job title"  name="title"/>
            <br>
          </div>
          <div>
            <label for="defaultFormControlInput" class="form-label">company</label>
            <input type="text" class="form-control" placeholder="company" name="company" />
            <br>
          </div>
          <div>
            <label class="form-label">location</label>
            <input type="text" class="form-control"  placeholder="location" name="location" />
            <br>

          </div>
          <div>
            <label  class="form-label">subject</label>
            <input type="text" class="form-control"  placeholder="subject" name="subject" />
            <br>
          </div>
          <div class="mb-3">
            <label  class="form-label">year of experinces</label>
            <select class="form-select" name="experinces">
              <option selected>year of experinces</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <br>
          <div>
            <label  class="form-label">job roles description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
          </div>
          <br>
          <div>
            <label  class="form-label">salary</label>
            <input type="text" class="form-control"  placeholder="salary" name="salary" />
<br>          </div>
          <button class="btn btn-primary d-grid w-100">
             Add
            </button>
          </form>
        </div>
        
      </div>
    </div>
    
  
    <!-- Form controls -->
   
  </div>
@endsection