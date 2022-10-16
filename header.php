<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="style.css" rel="stylesheet" >
    <link href="bootstrap.min.css" rel="stylesheet" >
    <link  href="font/css/all.min.css" rel="stylesheet" >
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
        	element.addEventListener('click', function (e) {
        		e.stopPropagation();
        	});
        })
    }); 
	// DOMContentLoaded  end
</script>
    <title>DigitalCoTech Online Web Tutorials</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-header sticky-top">
        <div class="container-fluid">
          <img src="img/lo.png" alt="">
          <a class="navbar-brand" href="#"><span class="h1 text-danger">D</span><span class="h3 text-warning">igitalCoTech</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown has-megamenu">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Tutorials List  </a>
                <div class="dropdown-menu megamenu" role="menu">
                  <div class="row g-0">
                  <h2>Tutorials List</h2>
                    <div class="col-lg-3 col-6">
                   
                      <div class="col-megamenu">
                        <h6 class="title">Frontend</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                      </div>  
                    </div><!-- end col-3 -->
                    <div class="col-lg-3 col-6">
                      <div class="col-megamenu">
                        <h6 class="title">Backend</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                      </div>  
                    </div><!-- end col-3 -->
                    <div class="col-lg-3 col-6">
                      <div class="col-megamenu">
                        <h6 class="title">Cloud & Devops</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                      </div>  
                    </div>    
                    <div class="col-lg-3 col-6">
                      <div class="col-megamenu">
                        <h6 class="title">Title Menu Four</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                      </div>  
                    </div>
                  </div>
                </div> 
              </li>
            </ul>          
          </div>
        </div>
      </nav>