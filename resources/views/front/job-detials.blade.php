@extends('front.header')
    @section('content')
     <!--       slider               -->
     <div >
    
    
      <main  class="col-lg-8 mx-auto p-3 py-md-5">
     <h1>About the Job in Detail</h1>
     <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
      <div class="card-body">
        <div style="display: flex;flex-wrap: wrap;">
        <img src="./images/co6.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
        <div style="display: flex;flex-direction: column;">
          <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
          <div style="display: flex; flex-direction: row; margin-top: 5%;">
             <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
             <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
             <h6 style="margin-left: 10%;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
             <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
              1700$</h6>
        </div>
        <a href="#" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">Apply</a>
        </div></div>
         
        
      </div>
    </div>
   

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
        <h2>Job Description</h2>
        <p>Job Description :</p>
        <ul class="icon-list">
          <li>Experience in mega projects with proven experience record.</li>
          <li>Ability to mobilize from one location to another as per company requirements
             (after covering their accommodation and necessities, as per Siemens standard procedures).</li>
          <li>Experience in mega projects with proven experience record.</li>
          <li>Ability to mobilize from one location to another as per company requirements (after covering their 
            accommodation and necessities, as per Siemens standard procedures).</li>
        </ul>
      </div>
      <div class="col-md-6" style="justify-content: center;">
        <h2>About Company</h2>
        <img src="./images/co6.jpeg" width="100%" >
        <p>Job summary Amazon's mission is to be the most customer centric company in the world. The Workforce Staffing organization is on the front line of that mission by hiring the hourly fulfillment.</p>
        <section class="mb-4" style="justify-content: center;align-items: center;margin-left: 10%;">
          <!-- Facebook -->
          <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
    
          <!-- Github -->
          <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github"></i
          ></a>
         
        </section>
      </div>

     
    </div>
</main>
    @endsection