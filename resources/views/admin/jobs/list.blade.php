
@extends('admin.layout.master')
@section('content')


<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
  </h4>
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>Title</th>
            <th>Company</th>
            <th>Location</th>
            <th>Subject</th>
            <th>Description</th>
            <th>YEAR OF EXPERINCES</th>
            <th>SALARY</th>
            <th>is active</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
         
         @foreach ($jobs as $job)

         <tr>
           <td>{{ $loop->iteration }}</td>
          <td>{{ $job->id }}</td>
          <td>{{ $job->title }}</td>

          <td>{{ $job->Company}}</td>
          <td>{{ $job->Location }}</td>
          <td>{{ $job->Subject }}</td>

          <td>{{ $job->roles }}</td>
          <td>{{ $job->year_of_experince }}</td>
          <td>{{ $job->	salary}}</td>
         
         
          <td>
            @if($job->is_active==1)  
            <span class="badge bg-label-success me-1">مفعل</span>
        
            @else
            <span class="badge bg-label-danger me-1">موقف</span>
            @endif

        </td>
           
            <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit_job',$job->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('toggle_job',$job->id) }}"><i class="bx bx-trash me-2"></i> @if($job->is_active==1)disable @else enable @endif</a>
              </div>
            </div>
          </td>
        </tr>
             
         @endforeach
        
         
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


@endsection