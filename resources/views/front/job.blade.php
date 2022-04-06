@extends('front.header')
    @section('content')
   
    <div class=" clo-md-12 input-group bg-light mt-4 mb-4">
     
      <div style="position: relative;"class=" col-md-3 input-group">
        
        <input type="search" class="form-control " placeholder="Search by skill, company & job" style="padding-left: 40px;width: vw10" id="search-key"/>
        <span style="position: absolute;margin-top: 2%;margin-left: 3%;">
          <i class="fa fa-search" aria-hidden="true"></i>
      </span>
    </div>
    <div style="position: relative;"class=" col-md-3 input-group">
        
      <input type="search" class="form-control " placeholder="Location" style="padding-left: 40px;" id="search2-key"/>
      <span style="position: absolute;margin-top: 2%;margin-left: 3%;">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
    </span>
  </div>
  <div style="position: relative;"class=" col-md-3 input-group">
    <span style="position: absolute;margin-top: 2%;margin-left: 3%;z-index: 100;">
      <i class="fa fa-briefcase" aria-hidden="true"></i>
  </span>

      <select id="filter-company" class="filter form-select"   placeholder="Experience" style="padding-left: 40px;">
       
        <option value="0">Experience</option>
        <option value="one">one year</option>
        <option value="Two">Two year</option>
        <option value="Three">Three year</option>
      </select> 
      </div>
     

    </div>
    <div class="row w-100 mt-2 mb-2 bg-light">
      <div class="row col-md-3 d-flex ml-4 ">
        
        <div class=" card mb-3" style="max-width: 100%;">
            <div class="card" style="width: 100%;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Function</li>
                <li class="list-group-item">Role</li>
                <li class="list-group-item">Experience (In Years)</li>
                <li class="list-group-item">Salary (AED)</li>
                <li class="list-group-item">City</li>
                <li class="list-group-item">Job Type</li>
              </ul>
             
            </div>

          
        </div>

      </div>
      
      <div class="col-md-7   ">
        <h3 class="text-muted mt-2 px-2">Find Your Jobs</h3>
        
          
            <!--c                                      -->
            
             
             
              <div class="col-md-12  job_card" >
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="./images/co1.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
                    <div style="display: flex;flex-direction: column;">
                      <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                      <div style="display: flex; flex-direction: row; margin-top: 5%;">
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                         <h6 style="margin-left: 10%;"  class="company"  data-company="Two"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
                          1700$</h6>
                    </div>
                    <a href="/job-detials" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl"> 
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="./images/co7.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
                    <div style="display: flex;flex-direction: column;">
                      <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                      <div style="display: flex; flex-direction: row; margin-top: 5%;">
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i>Aden</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                         <h6 style="margin-left: 10%;"  class="company"  data-company="Two"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
                          5000$</h6>
                    </div>
                    <a href="/job-detials" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="./images/co8.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
                    <div style="display: flex;flex-direction: column;">
                      <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                      <div style="display: flex; flex-direction: row; margin-top: 5%;">
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Qairo</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Doctor</h6>
                         <h6 style="margin-left: 10%;"  class="company"  data-company="Three"><i class="fa fa-briefcase" aria-hidden="true"></i> 3Years</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
                          2500$</h6>
                    </div>
                    <a href="/job-detials" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="./images/co4.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width: 20%; ">
                    <div style="display: flex;flex-direction: column;">
                      <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                      <div style="display: flex; flex-direction: row; margin-top: 5%;">
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Jeda</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Desginer</h6>
                         <h6 style="margin-left: 10%;"  class="company"  data-company="one"><i class="fa fa-briefcase" aria-hidden="true"></i>  1Years</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
                          3000$</h6>
                    </div>
                    <a href="/job-detials" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="../../images/co6.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
                    <div style="display: flex;flex-direction: column;">
                      <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                      <div style="display: flex; flex-direction: row; margin-top: 5%;">
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                         </i> Danser</h6>
                         <h6 style="margin-left: 10%;"  class="company"  data-company="one"><i class="fa fa-briefcase" aria-hidden="true"></i> 1Years</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
                          2000$</h6>
                    </div>
                    <a href="/job-detials" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="./images/co5.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
                    <div style="display: flex;flex-direction: column;">
                      <h5 class="card-title " style="margin-top:3% ;"><i class="fa fa-briefcase me-2" aria-hidden="true" ></i>Global Relations Manager, Brand Protection</h5>
                      <div style="display: flex; flex-direction: row; margin-top: 5%;">
                         <h6 style="margin-left: 10%;"><i class="fa fa-map-marker" aria-hidden="true"></i> Sana'a</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                         </i> Danser</h6>
                         <h6 style="margin-left: 10%;"  class="company"  data-company="one"><i class="fa fa-briefcase" aria-hidden="true"></i> 1 Years</h6>
                         <h6 style="margin-left: 10%;"><i class="fa fa-money" aria-hidden="true"></i>
                          2000$</h6>
                    </div>
                    <a href="/job-detials" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
              </div>
              @endsection
            

            
               
               
              
            </div>
          
         
        
        
      </div>
   