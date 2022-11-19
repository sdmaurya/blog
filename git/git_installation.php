
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:26 GMT -->
<head>
<title>Docker Tutorial</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Python,Java,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">
<link href="../other.css" rel="stylesheet" >
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="../w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Source%20Code%20Pro' rel='stylesheet'>
<!-- <link href='bootstrap.min.css' rel='stylesheet'> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="../main.css">
<link rel="stylesheet" href="/../w3css/page/page.css">
<link  href="../font/css/all.min.css" rel="stylesheet" >

</head>
<body>
<div class='w3-container top'>
  <!-- <a class='w3schools-logo notranslate' href='../index.html'>D<span class='dotcom'>igitalCoTech</span></a> -->
    <a class='w3schools-logo ' href='/'> <span > <img src="../img/lo.png" alt=""></span> <span class="h1 text-danger">D</span><span class='dotcom h4 text-warning'>igitalCoTech</span></a>
  <div class='w3-right w3-hide-small w3-wide toptext'>
  <div class="text-light">
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-github"></i>
        </a>
      </div>
  </div>
</div>

<div style='display:none;position:absolute;z-index:4;right:52px;height:44px;background-color:#5f5f5f;letter-spacing:normal;' id='googleSearch'>
  <div class='gcse-search'></div>
</div>
<div style='display:none;position:absolute;z-index:3;right:111px;height:44px;background-color:#5f5f5f;text-align:right;padding-top:9px;' id='google_translate_element'></div>

<div class='w3-card-2 topnav notranslate' id='topnav'>
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px">
      <a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button' onclick='open_menu()' title='Menu'></a>
      <a href='/git' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
      <a class="w3-bar-item w3-button" href='/linux' title='HTML Tutorial'>Linux</a>
      <a class="w3-bar-item w3-button" href='/aws' title='HTML Tutorial'>AWS</a>
      <a class="w3-bar-item w3-button" href='/docker' title='CSS Tutorial'>Docker</a>
      <a class="w3-bar-item w3-button" href='/agile' title='JavaScript Tutorial'>Agile</a>   
      <a class="w3-bar-item w3-button" href='/blockchain' title='JavaScript Tutorial'>BLOCKCHAIN</a>   
      <a class="w3-bar-item w3-button" href='/api' title='JavaScript Tutorial'>API</a>   
            <a class="w3-bar-item w3-button" id='topnavbtn_tutorials' href='javascript:void(0);' onclick='w3_open_nav("tutorials")' title='Tutorials'>MORE <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>

    </div>
    <div id='nav_tutorials' class='w3-bar-block w3-card-2' style="display:none;">
      <span onclick='w3_close_nav("tutorials")' class='w3-button w3-xlarge w3-right' style="position:absolute;right:0;font-weight:bold;">&times;</span>
      <div class='w3-row-padding' style="padding:24px 48px">
        <div class='w3-col l3 m6'>
          <h3>HTML and CSS</h3>
          <a class="w3-bar-item w3-button" href='default.html'>Learn HTML</a>
          <a class="w3-bar-item w3-button" href='../css/default.html'>Learn CSS</a>
          <a class="w3-bar-item w3-button" href='../bootstrap/bootstrap_ver.html'>Learn Bootstrap</a>     
          <div class="w3-hide-large w3-hide-small">
            <h3>XML</h3>
            <a class="w3-bar-item w3-button" href='../xml/default.html'>Learn XML</a>
            <a class="w3-bar-item w3-button" href='../xml/ajax_intro.html'>Learn XML AJAX</a>
            <a class="w3-bar-item w3-button" href="../xml/dom_intro.html">Learn XML DOM</a>         
          </div>
        </div>
        <div class='w3-col l3 m6'>
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href='../js/default.html'>Learn JavaScript</a>
          <a class="w3-bar-item w3-button" href='../jquery/default.html'>Learn jQuery</a>
          <a class="w3-bar-item w3-button" href='../react/default.html'>Learn React</a>          
        </div>
        <div class='w3-col l3 m6'>
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href='../sql/default.html'>Learn SQL</a>
          <a class="w3-bar-item w3-button" href='../php/default.html'>Learn PHP</a>
          <a class="w3-bar-item w3-button" href='../asp/default.html'>Learn ASP</a>
          <a class="w3-bar-item w3-button" href='../nodejs/default.html'>Learn Node.js</a>
          <a class="w3-bar-item w3-button" href='../nodejs/nodejs_raspberrypi.html'>Learn Raspberry Pi</a>                 
        </div>
        <div class='w3-col l3 m6 w3-hide-medium'>
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href='../xml/default.html'>Learn XML</a>
          <a class="w3-bar-item w3-button" href='../xml/ajax_intro.html'>Learn XML AJAX</a>
          <a class="w3-bar-item w3-button" href="../xml/dom_intro.html">Learn XML DOM</a>
        
        </div>
      </div>
      <br>
    </div>
    <div id='nav_references' class='w3-bar-block w3-card-2'>
      <span onclick='w3_close_nav("references")' class='w3-button w3-xlarge w3-right' style="position:absolute;right:0;font-weight:bold;">&times;</span>
      <div class='w3-row-padding' style="padding:24px 48px">
        <div class='w3-col l3 m6'>
          <h3>HTML</h3>
          <a class="w3-bar-item w3-button" href='../tags/default.html'>HTML Tag Reference</a>
          <a class="w3-bar-item w3-button" href='../tags/ref_eventattributes.html'>HTML Event Reference</a>
          <a class="w3-bar-item w3-button" href='../colors/default.html'>HTML Color Reference</a>
          <a class="w3-bar-item w3-button" href='../tags/ref_attributes.html'>HTML Attribute Reference</a>
          <a class="w3-bar-item w3-button" href='../tags/ref_canvas.html'>HTML Canvas Reference</a>
          <a class="w3-bar-item w3-button" href='../graphics/svg_reference.html'>HTML SVG Reference</a>
          <a class="w3-bar-item w3-button" href='../charsets/default.html'>HTML Character Sets</a>
          <a class="w3-bar-item w3-button" href='../graphics/google_maps_reference.html'>Google Maps Reference</a>
          <h3>CSS</h3>
          <a class="w3-bar-item w3-button" href='../cssref/default.html'>CSS Reference</a>
          <a class="w3-bar-item w3-button" href='../cssref/css3_browsersupport.html'>CSS Browser Support</a>
          <a class="w3-bar-item w3-button" href='../cssref/css_selectors.html'>CSS Selector Reference</a>
          <a class="w3-bar-item w3-button" href='../bootstrap/bootstrap_ref_all_classes.html'>Bootstrap 3 Reference</a>
          <a class="w3-bar-item w3-button" href='../bootstrap4/bootstrap_ref_all_classes.html'>Bootstrap 4 Reference</a>
          <a class="w3-bar-item w3-button" href='../w3css/w3css_references.html'>W3.CSS Reference</a>
          <a class="w3-bar-item w3-button" href='../icons/icons_reference.html'>Icon Reference</a>
          <a class="w3-bar-item w3-button" href='../sass/sass_functions_string.html'>Sass Reference</a>
       </div>
        <div class='w3-col l3 m6'>
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href='../jsref/default.html'>JavaScript Reference</a>
          <a class="w3-bar-item w3-button" href='../jsref/default.html'>HTML DOM Reference</a>
          <a class="w3-bar-item w3-button" href='../jquery/jquery_ref_overview.html'>jQuery Reference</a>
          <a class="w3-bar-item w3-button" href='../angular/angular_ref_directives.html'>AngularJS Reference</a>
          <a class="w3-bar-item w3-button" href="../w3js/w3js_references.html">W3.JS Reference</a>
          <h3>Programming</h3>
          <a class="w3-bar-item w3-button" href='../python/python_reference.html'>Python Reference</a>
          <a class="w3-bar-item w3-button" href='../java/java_ref_keywords.html'>Java Reference</a>
        </div>
        <div class='w3-col l3 m6'>
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href='../sql/sql_ref_keywords.html'>SQL Reference</a>
          <a class="w3-bar-item w3-button" href='../php/php_ref_overview.html'>PHP Reference</a>
          <a class="w3-bar-item w3-button" href='../asp/asp_ref_response.html'>ASP Reference</a>
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href='../xml/dom_nodetype.html'>XML Reference</a>
          <a class="w3-bar-item w3-button" href='../xml/dom_http.html'>XML Http Reference</a>
          <a class="w3-bar-item w3-button" href='../xml/xsl_elementref.html'>XSLT Reference</a>
          <a class="w3-bar-item w3-button" href='../xml/schema_elements_ref.html'>XML Schema Reference</a>
        </div>
        <div class='w3-col l3 m6 w3-hide-medium w3-hide-small'>
          <h3>Character Sets</h3>
          <a class="w3-bar-item w3-button" href='../charsets/default.html'>HTML Character Sets</a>
          <a class="w3-bar-item w3-button" href='../charsets/ref_html_ascii.html'>HTML ASCII</a>
          <a class="w3-bar-item w3-button" href='../charsets/ref_html_ansi.html'>HTML ANSI</a>
          <a class="w3-bar-item w3-button" href='../charsets/ref_html_ansi.html'>HTML Windows-1252</a>
          <a class="w3-bar-item w3-button" href='../charsets/ref_html_8859.html'>HTML ISO-8859-1</a>
          <a class="w3-bar-item w3-button" href='../charsets/ref_html_symbols.html'>HTML Symbols</a>
          <a class="w3-bar-item w3-button" href='../charsets/ref_html_utf8.html'>HTML UTF-8</a>
        </div>
      </div>
      <br>
    </div>
    <div id='nav_exercises' class='w3-bar-block w3-card-2'>
      <span onclick='w3_close_nav("exercises")' class='w3-button w3-xlarge w3-right' style="position:absolute;right:0;font-weight:bold;">&times;</span>
      <div class='w3-row-padding' style="padding:24px 48px">
        <div class='w3-col l4 m6'>
          <h3>Exercises</h3>
          <a class="w3-bar-item w3-button" href="html_exercises.html">HTML Exercises</a>
          <a class="w3-bar-item w3-button" href="../css/css_exercises.html">CSS Exercises</a>
          <a class="w3-bar-item w3-button" href="../js/js_exercises.html">JavaScript Exercises</a>
          <a class="w3-bar-item w3-button" href="../sql/sql_exercises.html">SQL Exercises</a>
          <a class="w3-bar-item w3-button" href="../php/php_exercises.html">PHP Exercises</a>
          <a class="w3-bar-item w3-button" href="../python/python_exercises.html">Python Exercises</a>
          <a class="w3-bar-item w3-button" href="../jquery/jquery_exercises.html">jQuery Exercises</a>
          <a class="w3-bar-item w3-button" href="../java/java_exercises.html">Java Exercises</a>
          <a class="w3-bar-item w3-button" href="../bootstrap/bootstrap_exercises.html">Bootstrap Exercises</a>
          <a class="w3-bar-item w3-button" href="../cpp/cpp_exercises.html">C++ Exercises</a>
          <a class="w3-bar-item w3-button" href="../cs/cs_exercises.html">C# Exercises</a>
        </div>
        <div class='w3-col l4 m6'>
          <h3>Quizzes</h3>
          <a class="w3-bar-item w3-button" href='html_quiz.html' target='_top'>HTML Quiz</a>
          <a class="w3-bar-item w3-button" href='../css/css_quiz.html' target='_top'>CSS Quiz</a>
          <a class="w3-bar-item w3-button" href='../js/js_quiz.html' target='_top'>JavaScript Quiz</a>
          <a class="w3-bar-item w3-button" href="../sql/sql_quiz.html" target="_top">SQL Quiz</a>
          <a class="w3-bar-item w3-button" href='../php/php_quiz.html' target='_top'>PHP Quiz</a>
          <a class="w3-bar-item w3-button" href='../python/python_quiz.html' target='_top'>Python Quiz</a>
          <a class="w3-bar-item w3-button" href='../jquery/jquery_quiz.html' target='_top'>jQuery Quiz</a>
          <a class="w3-bar-item w3-button" href='../java/java_quiz.html' target='_top'>Java Quiz</a>
          <a class="w3-bar-item w3-button" href='../bootstrap/bootstrap_quiz.html' target='_top'>Bootstrap Quiz</a>
          <a class="w3-bar-item w3-button" href='../xml/xml_quiz.html' target='_top'>XML Quiz</a>
        </div>
        <div class='w3-col l4 m12'>
         <h3>Certificates</h3>
         <a class="w3-bar-item w3-button" href="../cert/cert_html_new.html" target="_top">HTML Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_css.html" target="_top">CSS Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_javascript.html" target="_top">JavaScript Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_sql.html" target="_top">SQL Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_php.html" target="_top">PHP Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_python.html" target="_top">Python Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_jquery.html" target="_top">jQuery Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_bootstrap.html" target="_top">Bootstrap Certificate</a>
         <a class="w3-bar-item w3-button" href="../cert/cert_xml.html" target="_top">XML Certificate</a>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>


<div class='w3-sidebar w3-collapse' id='sidenav'>
  <div id='leftmenuinner'>
    <div class='w3-light-grey' id='leftmenuinnerinner'>
<h2 class="left"><span class="left_h2">GIT</span> Tutorial</h2>
<a target="_top" href="http://myblog.com/git/">GIT Introduction</a>
<a target="_top" href="git_installation.php" title="Installing Git">Git Installation</a>
<a target="_top" href="git_command.php" title="GIT Commands List">GIT Commands</a>



      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
  
<h1>GIT<span class="color_h1" title="Git Installation"> Installation</span></h1>


<p>
  <a class="btn btn-primary" id="collapse_1" data-bs-toggle="collapse" role="button" aria-expanded="false">GIT Windows Installation </a>
  <button class="btn btn-primary" id="collapse_2" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">GIT Linux Installation</button>
  <button class="btn btn-primary" id="collapse_3" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">GIT AWS Installation</button>
</p>
<hr>
<div class="" id="multiCollapseExample1" title="How to Install Git on Windows (Step-by-Step) Guide">
  <h4 title="Git Installation on Windows">Git Installation on Windows: How to Install Git on Windows (Step-by-Step) Guide</h4>
  <p>Download the most recent Git version and choose the 64/32 bit option. After downloading the file, install it. After installing, select Launch the Git Bash, then finish.</p>
  <a href="https://git-scm.com/downloads" class="mb-2">Download Git</a>
  <p>Type to confirm that the installation was successful.</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
  $ git --version
</code>
			</pre>
  </figure>
</div>
<div class=" collapse multi-collapse" id="multiCollapseExample2" title="How to Install Git on Linux (Step-by-Step) Guide">
  <h4 title="Git Installation on Linux">Git Installation on Linux: How to Install Git on Linux (Step-by-Step) Guide</h4>
  <p>Debian-based distribution (Debian/Ubuntu/Ubuntu-derivatives)</p>
  <h5>Step1:</h5>
  <p>#Perform a quick update on your system:</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
  $ sudo apt-get update
    </code>
			</pre>
  </figure>
  <h5>Step2:</h5>
  <p>#After the update is finished, you can install Git:</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
  $ sudo apt-get install git
    </code>
			</pre>
  </figure>
  <h5>Step3:</h5>
  <p>#Type to ensure that the git installation was successful:</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
    $ git --version
        </code>
			</pre>
  </figure>
</div>
<div class="collapse multi-collapse" id="multiCollapseExample3" title="How to Install Git on AWS EC2 instance (Step-by-Step) Guide">
  <h4 title="Git installation on AWS EC2 instance">Git Installation on AWS EC2 instance: How to Install Git on AWS EC2 instance (Step-by-Step) Guide</h4>
  <div> #Create an EC2 instance with Amazon Linux 2 with internet access </div>
  <div>#Connect to your instance using putty shell </div>
  <br>
  <h5>Step1:</h5>
  <p>#Perform a quick update on your instance:</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
    $ sudo yum update -y
        </code>
			</pre>
  </figure>
  <h5>Step2:</h5>
  <p>#Install git in your EC2 instance:</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
    $ sudo yum install git -y
        </code>
			</pre>
  </figure>
  <h5>Step3:</h5>
  <p>#Check git version:</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
    $ git --version
        </code>
			</pre>
  </figure>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
  $("#collapse_1").click(function(){
    $('#multiCollapseExample1').toggle('slow');
  });
 
});
</script>


</div>

</div>
<?php include('../footer.php') ?>

<script src="../lib/w3schools_footer.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

</body>

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:28 GMT -->
</html>
