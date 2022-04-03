<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Git Your Carier</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
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
    <!--       slider               -->
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/j2.jpg" class="d-block w-100" alt="..."style="height: 70vh;"> 
         
        </div>
        <div class="carousel-item">
          <img src="./images/j3.jpg" class="d-block w-100" alt="..." style="height: 70vh;">
         
        </div>
        <div class="carousel-item">
          <img src="./images/sl3.jpg" class="d-block w-100" alt="..." style="height: 70vh;">
        
        </div>
      </div>
     
    </div>
    
      <div class="col-md-12 row row-cols-2 row-cols-md-4 mb-2 text-center" >
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
              <div class="card-body" style="padding: 3%;padding-left: 0%;">
                <div style="display: flex;flex-wrap: wrap;">
                <img src="./images/co7.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
                <div style="display: flex;flex-direction: column;">
                  <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                  <div style="display: flex; flex-direction: row; margin-top: 5%;">
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                      1700$</h6>
                </div>
                <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
                </div></div>
                 
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
              <div class="card-body" style="padding: 3%;padding-left: 0%;">
                <div style="display: flex;flex-wrap: wrap;">
                <img src="./images/co2.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
                <div style="display: flex;flex-direction: column;">
                  <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                  <div style="display: flex; flex-direction: row; margin-top: 5%;">
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                      1700$</h6>
                </div>
                <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
                </div></div>
                 
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
              <div class="card-body" style="padding: 3%;padding-left: 0%;">
                <div style="display: flex;flex-wrap: wrap;">
                <img src="./images/co10.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
                <div style="display: flex;flex-direction: column;">
                  <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                  <div style="display: flex; flex-direction: row; margin-top: 5%;">
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                     <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                      1700$</h6>
                </div>
                <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
                </div></div>
                 
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class=" card  mt-2 me-2"  id="search-tbl">
              <div class="card-body" style="padding: 3%;padding-left: 0%;">
                <div style="display: flex;flex-wrap: wrap;">
                <img src="./images/j3.jpg" alt="avatar" class=" img-fluid" style="width:  100%;height: 30vh;;align-items: center;margin-left: 2%;">
                
                  
                <a href="#" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;"> more</a>
                </div>
                 
                
              </div>
            </div>
          </div>
        </div>
      
      </div>


      <div class="col-md-12 row row-cols-2 row-cols-md-4 mb-2 text-center" >
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
            <div class="card-body" style="padding: 3%;padding-left: 0%;">
              <div style="display: flex;flex-wrap: wrap;">
              <img src="./images/co5.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
              <div style="display: flex;flex-direction: column;">
                <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
                <div style="display: flex; flex-direction: row; margin-top: 5%;">
                   <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                   <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                   <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                   <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                    1700$</h6>
              </div>
              <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
              </div></div>
               
              
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
          <div class="card-body" style="padding: 3%;padding-left: 0%;">
            <div style="display: flex;flex-wrap: wrap;">
            <img src="./images/co4.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
            <div style="display: flex;flex-direction: column;">
              <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
              <div style="display: flex; flex-direction: row; margin-top: 5%;">
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                  1700$</h6>
            </div>
            <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
            </div></div>
             
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
          <div class="card-body" style="padding: 3%;padding-left: 0%;">
            <div style="display: flex;flex-wrap: wrap;">
            <img src="./images/co3.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
            <div style="display: flex;flex-direction: column;">
              <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
              <div style="display: flex; flex-direction: row; margin-top: 5%;">
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                  1700$</h6>
            </div>
            <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
            </div></div>
             
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class=" card  mt-2 me-2"  id="search-tbl">
            <div class="card-body" style="padding: 3%;padding-left: 0%;">
              <div style="display: flex;flex-wrap: wrap;">
              <img src="./images/j2.jpg" alt="avatar" class=" img-fluid" style="width:  100%;height: 30vh;;align-items: center;margin-left: 2%;">
              
                
              <a href="#" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;"> more</a>
              </div>
               
              
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
          <div class="card-body" style="padding: 3%;padding-left: 0%;">
            <div style="display: flex;flex-wrap: wrap;">
            <img src="./images/co1.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
            <div style="display: flex;flex-direction: column;">
              <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
              <div style="display: flex; flex-direction: row; margin-top: 5%;">
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                  1700$</h6>
            </div>
            <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
            </div></div>
             
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
          <div class="card-body" style="padding: 3%;padding-left: 0%;">
            <div style="display: flex;flex-wrap: wrap;">
            <img src="./images/co7.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
            <div style="display: flex;flex-direction: column;">
              <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
              <div style="display: flex; flex-direction: row; margin-top: 5%;">
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                  1700$</h6>
            </div>
            <a href="./job-detials.html" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
            </div></div>
             
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class=" card  mt-2 me-2" style="background: rgb(230, 229, 238);" id="search-tbl">
          <div class="card-body" style="padding: 3%;padding-left: 0%;">
            <div style="display: flex;flex-wrap: wrap;">
            <img src="./images/co9.jpeg" alt="avatar" class=" img-fluid" style="width:  100%;align-items: center;margin-left: 2%;">
            <div style="display: flex;flex-direction: column;">
              <h5 class="card-title " style="margin-top:3% ;font-size:1.5vw; "><i class="fa fa-briefcase me-2" aria-hidden="true"  ></i>Senior Support Engineer - AKS (Azure Rapid Response)</h5>
              <div style="display: flex; flex-direction: row; margin-top: 5%;">
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-map-marker" aria-hidden="true"></i> IT</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-briefcase" aria-hidden="true"></i> 2 Years</h6>
                 <h6 style="margin-left: 10%;font-size:1vw;"><i class="fa fa-money" aria-hidden="true"></i>
                  1700$</h6>
            </div>
            <a href="#" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;">About</a>
            </div></div>
             
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class=" card  mt-2 me-2"  id="search-tbl">
            <div class="card-body" style="padding: 3%;padding-left: 0%;">
              <div style="display: flex;flex-wrap: wrap;">
              <img src="./images/j1.jpg" alt="avatar" class=" img-fluid" style="width:  100%;height: 30vh;;align-items: center;margin-left: 2%;">
              
                
              <a href="#" class="col-md-3 btn btn-outline-secondary mt-2 ml-9" style="margin-left: 4%;width: 10vw;"> more</a>
              </div>
               
              
            </div>
          </div>
        </div>
      </div>
    </div>
     <!--companies-->


<br><br>
     <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="col-md-7 carousel-item active" style="display: flex;flex-direction: row;">
          <img src="./images/co1.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co2.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co3.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co4.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co5.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co6.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">


          
        </div>
        <div class="col-md-7 carousel-item" style="display: flex;flex-direction: row;">
          <img src="./images/co7.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co8.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co9.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co10.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co1.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co6.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
        </div>
        <div class="col-md-7 carousel-item" style="display: flex;flex-direction: row;">
          <img src="./images/co10.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co7.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co8.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co4.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co5.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
          <img src="./images/co9.jpeg" class="d-block" alt="..." style="width: 30%;height: 10vh;margin: 3%;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>










     <!--Footer-->
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
</body>
</html>