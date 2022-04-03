<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Git Your Carier</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

</head>
<body>
 
     <!--       slider               -->
     <header class="col-md-12 w-100" style="width: 100%;">
      <nav class="col-12 navbar navbar-expand-lg navbar-light bg-secondary w-100">
        <div class=" col-12 container-fluid">
          <a class="col-md-4 navbar-brand" style="font-size: 3vw; color: #fff;font-weight: 500;" href="#">FJ<sub style="font-size:1vw; font-weight: 800;">find job</sub></a>
          
           <form class="col-md-8 d-flex px-2 " >
             <input class="col-8 form-control ml-4" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light ml-2 " type="submit">Search</button>
            </form> 
           
          </div>
        </div>
      </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="col-md-7 navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./job.html">Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./Our-Services.html">Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./AboutUs.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./ContactUs.html">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./companies.html">companies</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="./profile.html">Your-profile</a></li>
                      <li><a class="dropdown-item" href="./UserAcounts.html">Acounts</a></li>
                      <li><a class="dropdown-item" href="./index.html">log out</a></li>
                      <li><hr class="dropdown-divider"></li>
                     
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">English</a></li>
                      <li><a class="dropdown-item" href="#">Arabic</a></li>
                     
                     
                    </ul>
                  </li>
                </ul>
               <!---- <form class="col-md-2 d-flex " >
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <div class="col-md-4  ">
                <a  type="button" class="  btn btn-secondary" href="./Login.html" >Login</a>
                <a  type="button" class="  btn btn-outline-secondary" href="./signup.html">Sign Up</a>
              </div>
              </div>
            </div>
          </nav>
          
    </header>
   
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
                    <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
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
                    <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
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
                    <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
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
                    <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
                <div class="card  mt-2" style="background: rgb(230, 229, 238);" id="search-tbl">
                  <div class="card-body">
                    <div style="display: flex;flex-wrap: wrap;">
                    <img src="./images/co6.jpeg" alt="avatar" class="rounded-circle img-fluid" style="width:  20%;">
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
                    <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
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
                    <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;">About</a>
                    </div></div>
                     
                    
                  </div>
                </div>
              </div>
             
            

            
               
               
              
            </div>
          
         
        
        
      </div>
    <footer class="bg-secondary text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
    
          <!-- Github -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3 bg-secondary" >
        © 2022 Copyright:
        <a class="text-white" href="#">Find Jobs</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="bootstrap.js"></script>
    <script src="jquery.min.js"></script>
    <script src="./search.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <script>

    $(document).ready(function(){
        $("#search2-key"||"#search-key").on('keyup',function(){
          
            var word=$('#search2-key'||'#search-key').val().toLowerCase();
            $("#search-tbl ").filter(function(){

              
                $(this).toggle( $(this).text().toLowerCase().indexOf(word)>-1);
             



            });

           
        });
        $("#search-key").on('keyup',function(){
          
          var word=$('#search-key').val().toLowerCase();
          $("#search-tbl ").filter(function(){

            
              $(this).toggle( $(this).text().toLowerCase().indexOf(word)>-1);
           



          });

         
      });
      });

</script>
    </body>
    </html>