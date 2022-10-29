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
          <img src="img/lo.png" alt="digitalcotech.com">
          <a class="navbar-brand" href="#"><span class="h1 text-danger">D</span><span class="h4 text-warning">igitalCoTech</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home                 
                </a>
              </li>     
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact-us.php">Contact</a>
              </li>      
              
              <li class="nav-item dropdown has-megamenu">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Tutorials List  </a>
                <div class="dropdown-menu megamenu" role="menu" style="margin-top: -.2%;">
                  <div class="container">
                  <div class="row g-0">
                  <h2 class="text-center">Tutorials List</h2>
                    <div class="col-lg-3 col-md-6 col-xs-12 mb-3">
                   
                      <div class="col-megamenu">
                        <h4 class="title">Frontend</h4>
                        <ul class="list-unstyled">
                          <li><a href="/html">HTML</a></li>
                          <li><a href="#">CSS</a></li>
                          <li><a href="#">JAVASCRIPT</a></li>
                          <li><a href="#">BOOTSTRAP</a></li>                        
                        </ul>
                      </div>  
                    </div><!-- end col-3 -->
                    <div class="col-lg-3 col-md-6 col-xs-12 mb-3">
                      <div class="col-megamenu">
                        <h4 class="title">Backend</h4>
                        <ul class="list-unstyled">
                          <li><a href="/php">PHP</a></li>
                          <li><a href="/python">PYTHON</a></li>                         
                        </ul>
                      </div>  
                    </div><!-- end col-3 -->
                    <div class="col-lg-3 col-md-6 col-xs-12 mb-3">
                      <div class="col-megamenu">
                        <h4 class="title">Cloud & Devops</h4>
                        <ul class="list-unstyled">
                          <li><a href="/clouds">CLOUD COMPUTING</a></li>
                          <li><a href="/docker">DOCKER</a></li>
                          <li><a href="/jenkins">JENKINS</a></li>
                          <li><a href="/agile">AGILE</a></li>
                          <li><a href="/linux">LINUX</a></li>                      
                        </ul>
                      </div>  
                    </div>    
                    <div class="col-lg-3 col-md-6 col-xs-12 mb-3">
                      <div class="col-megamenu">
                        <h4 class="title">Others</h4>
                        <ul class="list-unstyled">
                          <li><a href="/blockchain">BLOCKCHAIN</a></li>                          
                        </ul>
                      </div>  
                    </div>
                  </div>
                  </div>
                </div> 
              </li>
            </ul>          
          </div>
        </div>
      </nav>

      <div class="social">
      <ul class="scl">
        <!-- <li><a href="#" class="scls"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
        <li><a href="#" class="scls"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
        <li><a href="#" class="scls"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
        <li><a href="#" class="scls"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
        <li><a href="#" class="scls"><i class="fab fa-github"></i><span>Github</span></a></li>
        <li><a href="#" class="scls"><i class="fab fa-youtube"></i><span>Youtube</span></a></li> -->
        <li><a href="#" class="scls"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="scls"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="scls"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" class="scls"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#" class="scls"><i class="fab fa-github"></i></a></li>
        <li><a href="#" class="scls"><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div>
