
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
                      <img class="rounded-circle " width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex  align-items-center " style="width: 80%;">
                            <h4 class="text-right">Add Your detials</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">full Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                            <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Headline </label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
        
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">phone </label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                            </div>
                        
                        <div class="mt-5 text-center"> <a  href="./profile.html" class="btn btn-secondary">Save</a></div>
                    </div>
                </div>
                
            </div>
        </div>
        
            </main>
          </div>
        </div>
       
  </section>
</main>

    @endsection
