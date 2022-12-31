<?php 
session_start();


?>

<!doctype html>
<html lang="en">
  <head>
  <?php global $title; ?>
<title><?php echo isset($title) ? $title : "Digitalcotech Online Learning Platform."; ?></title>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6ZXYD6YL56"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6ZXYD6YL56');
</script>
<meta name="google-site-verification" content="d4h29-qQsuc3zcbGtvJZ8Oxtv0oJKdpGEjZ3shxzp5Q" />
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digitalcotech is an online learning and testing platform.It allows students and professionals to improve their skills by following an interactive learning path.">
  <meta name="keywords" content="Digitalcotech, Html tutorial, linux tutorial, beginners, professionals, Blockchain, Agile, Aws tutorial">
    <meta name="author" content="Digitalcotech is an online learning and testing platform. It allows students and professionals to improve their skills by following an interactive learning path.
Use our platform to learn or enhance your skills, and keeps students and professionals up-to-date with the latest developments in the technology industry.
">

<meta property="og:title" <?php echo isset($ogtitle) ? $ogtitle : "Digitalcotech Online Learning Platform."; ?> />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo isset($ogdesc) ? $ogdesc : 'Digitalcotech is an online learning and testing platform.It allows students and professionals to improve their skills by following an interactive learning path.'; ?>">
<meta property="og:url" content="<?php echo isset($ogurl) ? $ogurl : 'https://www.digitalcotech.com/'; ?>" />
<meta property="og:image" content="<?php echo isset($ogimg) ? $ogimg : 'https://www.digitalcotech.com/img/lo.png'; ?>" />

<link rel="apple-touch-icon" sizes="57x57" href="image/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="image/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="image/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="image/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="image/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="image/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="image/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="image/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="image/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="image/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="image/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
<link rel="manifest" href="image/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="image/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link href="style.css" rel="stylesheet" >
    <link href="bootstrap.min.css" rel="stylesheet" > 
    <link  href="font/css/all.min.css" rel="stylesheet" >
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){

        document.querySelectorAll('.dropdown-menu').forEach(function(element){
        	element.addEventListener('click', function (e) {
        		e.stopPropagation();
        	});
        })
    }); 

</script>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-header sticky-top">
        <div class="container-fluid">
          <img src="img/lo.png" class="digitalcotech-logo" alt="digitalcotech.com">
         
          <a class="navbar-brand" href="/"><span class="h2 text-warning">Digitalcotech</span></a>
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
                <a class="nav-link" href="about.php">About</a>
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
                    <div class="col-lg-3 col-md-6 col-xs-12">
                   
                      <div class="col-megamenu">
            
                        <ul class="list-unstyled">
                          <li><a href="/html">HTML</a></li>
                          <li><a href="/git">Git</a></li>  
                          
                        </ul>
                      </div>  
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                      <div class="col-megamenu">
               
                        <ul class="list-unstyled">
                        <li><a href="/agile">AGILE</a></li>
                          <li><a href="/linux">LINUX</a></li>  
                          
                        </ul>
                      </div>  
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                      <div class="col-megamenu">
                       
                        <ul class="list-unstyled">
               
                          <li><a href="/json">Json</a></li>
                          <li><a href="/docker">DOCKER</a></li>
                         
                        
                                           
                        </ul>
                      </div>  
                    </div>    
                    <div class="col-lg-3 col-md-6 col-xs-12">
                      <div class="col-megamenu">                       
                        <ul class="list-unstyled">
                        <li><a href="/clouds">CLOUD COMPUTING</a></li>
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
      
        <li><a href="https://www.facebook.com/people/Digitalcotech/100088403738077/?is_tour_completed=true" class="scls"><i class="fab fa-facebook-f"></i></a></li>
  
        <li><a href="https://www.instagram.com/digitalcotech/" class="scls"><i class="fab fa-instagram"></i></a></li>
        <li><a href="" class="scls"><i class="fab fa-linkedin-in"></i></a></li>

        <li><a href="https://www.youtube.com/@digitalcotech/channels" class="scls"><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div>
