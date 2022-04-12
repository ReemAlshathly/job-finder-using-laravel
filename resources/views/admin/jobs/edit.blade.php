
@extends('admin.layout.master')
@section('content')


<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Basic Inputs
  </h4>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Edite job detials</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          
          
          <form method="POST" action="{{ route('update_job',$jobs->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
            <div>
            <label  class="form-label">job title</label>
            <input type="text" class="form-control" value="{{ $jobs->title }}"  placeholder="job title"  name="title"/>
            <br>
          </div>
          <div>
            <label for="defaultFormControlInput" class="form-label">company</label>
            <input type="text" class="form-control"  value="{{ $jobs->company }}" placeholder="company" name="company" />
            <br>
          </div>
          <div>
            <label class="form-label">location</label>
            <input type="text" class="form-control" value="{{ $jobs->Location }}" placeholder="location" name="location" />
            <br>

          </div>
          <div>
            <label  class="form-label">subject</label>
            <input type="text" class="form-control" value="{{ $jobs->subject }}" placeholder="subject" name="subject" />
            <br>
          </div>
          <div class="mb-3">
            <label  class="form-label">year of experinces</label>
            <select class="form-select" name="experinces" value="{{ $jobs->year_of_experince }}">
              <option selected>year of experinces</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <br>
          <div>
            <label  class="form-label">job roles description</label>
            <textarea class="form-control" value="{{ $jobs->role}}" name="description" rows="3"></textarea>
          </div>
          <br>
          <div>
            <label  class="form-label">salary</label>
            <input type="text" class="form-control" value="{{ $jobs->salary }}"  placeholder="salary" name="salary" />
<br>          </div>
            
              
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                    
                    <option @if($jobs->is_active==1) selected @endif value="1">مفعل</option>
                    <option  @if($jobs->is_active==-1) selected @endif value="-1">معطل</option>
                  </select>
                </div>
              </div>
            </div>
            
            
           
          </div>



          
        </div>
        <div class="card-footer">
          <input type="submit" name="submit" id="formtabs-first-name"  value="تعديل"class="form-control" placeholder="John" />

        </form>


        </div>
      </div>
    </div>
    
  
  
  
  
  
  </div>
@endsection