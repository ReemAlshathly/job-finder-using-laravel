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
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
                  <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/job">Jobs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Our-Services">Our Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/AboutUs">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/ContactUs">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/companies">companies</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="/profile">Your-profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Acounts">Acounts</a>
                </li>
                
               
              </ul>
             <!---- <form class="col-md-2 d-flex " >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
              <div class="col-md-4  ">
              <a  type="button" class="  btn btn-secondary" href="/Login" >Login</a>
              <a  type="button" class="  btn btn-outline-secondary" href="signup">Sign Up</a>
            </div>
            </div>
          </div>
        </nav>
        
  </header>
    <!--       slider
                 -->
                
    @yield('content');
    

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
   
    <script src="/js/bootstrap.js"></script>
</body>
</html>