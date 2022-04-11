
@extends('Applyuser.layout.saide')
@section('content')
  
   
  <div class="container rounded  mt-5 mb-5" style="justify-content: center;">
    <div class=" col-md-9 row bg-light" style="justify-content: center;">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Cources Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Course name</label><input type="text" class="form-control" placeholder="Course name" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">From </label><input type="text" class="form-control" placeholder="From" value=""></div>

                    <div class="col-md-12"><label class="labels">Year</label><input type="text" class="form-control" placeholder="enter  number of Year" value=""></div>
                    </div>
                
                <div class="mt-5 text-center"> <a  href="./courses.html" class="btn btn-secondary">Save</a></div>
            </div>
        </div>
        
    </div>
</div>

@endsection