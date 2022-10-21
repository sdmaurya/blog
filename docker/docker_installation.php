
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
    <a class='w3schools-logo ' href='../index.html'> <span > <img src="../img/lo.png" alt=""></span> <span class="h1 text-danger">D</span><span class='dotcom h4 text-warning'>igitalCoTech</span></a>
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
      <a href='../default.html' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
      <a class="w3-bar-item w3-button" href='default.html' title='HTML Tutorial'>HTML</a>
      <a class="w3-bar-item w3-button" href='../css/default.html' title='CSS Tutorial'>CSS</a>
      <a class="w3-bar-item w3-button" href='../js/default.html' title='JavaScript Tutorial'>JAVASCRIPT</a>   
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
          <a class="w3-bar-item w3-button" href='../w3css/default.html'>Learn W3.CSS</a>
          <a class="w3-bar-item w3-button" href='../colors/default.html'>Learn Colors</a>
          <a class="w3-bar-item w3-button" href='../icons/default.html'>Learn Icons</a>
          <a class="w3-bar-item w3-button" href='../graphics/default.html'>Learn Graphics</a>
          <a class="w3-bar-item w3-button" href='../graphics/svg_intro.html'>Learn SVG</a>
          <a class="w3-bar-item w3-button" href='../graphics/canvas_intro.html'>Learn Canvas</a>
          <a class="w3-bar-item w3-button" href='../howto/default.html'>Learn How To</a>
          <a class="w3-bar-item w3-button" href='../sass/default.html'>Learn Sass</a>          
          <div class="w3-hide-large w3-hide-small">
            <h3>XML</h3>
            <a class="w3-bar-item w3-button" href='../xml/default.html'>Learn XML</a>
            <a class="w3-bar-item w3-button" href='../xml/ajax_intro.html'>Learn XML AJAX</a>
            <a class="w3-bar-item w3-button" href="../xml/dom_intro.html">Learn XML DOM</a>
            <a class="w3-bar-item w3-button" href='../xml/xml_dtd_intro.html'>Learn XML DTD</a>
            <a class="w3-bar-item w3-button" href='../xml/schema_intro.html'>Learn XML Schema</a>
            <a class="w3-bar-item w3-button" href='../xml/xsl_intro.html'>Learn XSLT</a>
            <a class="w3-bar-item w3-button" href='../xml/xpath_intro.html'>Learn XPath</a>
            <a class="w3-bar-item w3-button" href='../xml/xquery_intro.html'>Learn XQuery</a>
          </div>
        </div>
        <div class='w3-col l3 m6'>
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href='../js/default.html'>Learn JavaScript</a>
          <a class="w3-bar-item w3-button" href='../jquery/default.html'>Learn jQuery</a>
          <a class="w3-bar-item w3-button" href='../react/default.html'>Learn React</a>
          <a class="w3-bar-item w3-button" href='../angular/default.html'>Learn AngularJS</a>
          <a class="w3-bar-item w3-button" href="../js/js_json_intro.html">Learn JSON</a>
          <a class="w3-bar-item w3-button" href='../js/js_ajax_intro.html'>Learn AJAX</a>
          <a class="w3-bar-item w3-button" href="../w3js/default.html">Learn W3.JS</a>
          <h3>Programming</h3>
          <a class="w3-bar-item w3-button" href='../python/default.html'>Learn Python</a>
          <a class="w3-bar-item w3-button" href='../java/default.html'>Learn Java</a>
          <a class="w3-bar-item w3-button" href='../cpp/default.html'>Learn C++</a>
          <a class="w3-bar-item w3-button" href='../cs/default.html'>Learn C#</a>
          <a class="w3-bar-item w3-button" href='../python/python_ml_getting_started.html'>Learn Machine Learning</a>
          <div class="w3-hide-small"><br class="w3-hide-medium w3_hide-small"><br class="w3-hide-medium w3_hide-small"></div>
        </div>
        <div class='w3-col l3 m6'>
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href='../sql/default.html'>Learn SQL</a>
          <a class="w3-bar-item w3-button" href='../php/default.html'>Learn PHP</a>
          <a class="w3-bar-item w3-button" href='../asp/default.html'>Learn ASP</a>
          <a class="w3-bar-item w3-button" href='../nodejs/default.html'>Learn Node.js</a>
          <a class="w3-bar-item w3-button" href='../nodejs/nodejs_raspberrypi.html'>Learn Raspberry Pi</a>          
          <h3>Web Building</h3>
          <a class="w3-bar-item w3-button" href="../w3css/w3css_templates.html">Web Templates</a>
          <a class="w3-bar-item w3-button" href='../browsers/default.html'>Web Statistics</a>
          <a class="w3-bar-item w3-button" href='../cert/default.html'>Web Certificates</a>
          <a class="w3-bar-item w3-button" href='../tryit/default.html'>Web Editor</a>
          <a class="w3-bar-item w3-button" href="../whatis/default.html">Web Development</a>
        </div>
        <div class='w3-col l3 m6 w3-hide-medium'>
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href='../xml/default.html'>Learn XML</a>
          <a class="w3-bar-item w3-button" href='../xml/ajax_intro.html'>Learn XML AJAX</a>
          <a class="w3-bar-item w3-button" href="../xml/dom_intro.html">Learn XML DOM</a>
          <a class="w3-bar-item w3-button" href='../xml/xml_dtd_intro.html'>Learn XML DTD</a>
          <a class="w3-bar-item w3-button" href='../xml/schema_intro.html'>Learn XML Schema</a>
          <a class="w3-bar-item w3-button" href='../xml/xsl_intro.html'>Learn XSLT</a>
          <a class="w3-bar-item w3-button" href='../xml/xpath_intro.html'>Learn XPath</a>
          <a class="w3-bar-item w3-button" href='../xml/xquery_intro.html'>Learn XQuery</a>
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
<h2 class="left"><span class="left_h2">Docker</span> Tutorial</h2>
<a target="_top" href="http://myblog.com/docker/">Docker Introduction</a>
<a target="_top" href="docker_installation.php" title="Installing Docker">Docker Installation</a>
<a target="_top" href="docker_command.php" title="Docker Commands List">Docker Commands</a>
<a target="_top" href="docker_file.php" title="Docker File Instruction List">Docker File</a>


      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
  
<h1>Docker<span class="color_h1" title="Git Installation"> Installation</span></h1>


<p>
  <a class="btn btn-primary" id="collapse_1" data-bs-toggle="collapse"  role="button" aria-expanded="false" >Docker Windows Installation </a>
  <button class="btn btn-primary" id="collapse_2"  type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" title="How to Install Docker on Ubuntu 22.04">Docker Installation in Ubuntu 22.04</button>
  <button class="btn btn-primary" id="collapse_3"  type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3" title="How Install Docker on Reahat Linux , RHEL, Fedora">Docker RHEL Linux Installation</button>
</p>

<hr>

<div class="" id="multiCollapseExample1" title="How to install Docker on Windows (Step-by-Step) Guide">
  <h4 title="Install Docker Desktop on Windows">Docker Installation on Windows: How to install Docker on Windows (Step-by-Step) Guide</h4>
  <p>Requirements.</p>
  <ul>
    <li>
    64-bit processor with Second Level Address Translation (SLAT).</li>
    <li>Windows should have the Hyper V, WSL 2, and Container features enabled.</li>
    <li>BIOS-level hardware virtualization support must be enabled in the BIOS settings.</li>
    <li>Minimum 4GB system RAM.</li>
  </ul>

  <div title="Docker Installation">Installation</div>
  <ul>
    <li> <a href="https://docs.docker.com/desktop/install/windows-install/" class="mb-2">Download Docker</a></li>
    <li> Then, double-click on the Docker Desktop Installer.exe to run the installer.</li>
    <li>Follow the instructions in the installation wizard to allow the installer and complete the installation.</li>
    <li>After successful installation, click Close to finish the installation process.</li>
  </ul>


  <div title="How to set up from the command line.">How to set up from the command line.</div>
  <ul>
    <li>To work as a terminal,<code> "Docker Desktop Installer.exe" </code> installation.</li>
    <li>If you're using PowerShell, execute it as
      <code>
      Start-Process 'Docker Desktop Installer.exe' -Wait install
      </code>
    </li>
    <li>If you're using  Windows Command Prompt, execute it as
      <code>
      start /w "" "Docker Desktop Installer.exe" install
      </code>
    </li>
  
  </ul>

</div>

<div class="collapse multi-collapse" id="multiCollapseExample2" title="How to Install Git on Linux (Step-by-Step) Guide">
  <h4 title="Git Installation on Linux">How to Install and Use Docker on Ubuntu (Step-by-Step) Guide</h4>
  <p>Debian-based distribution (Debian/Ubuntu/Ubuntu-derivatives)</p>
  <h5>Step1:</h5>
  <p>Installing Docker</p>
  <p>Use the following command to see if the system is up to date</p>
  <figure class="highlight">
    <pre>
			<code class="language-html" data-lang="html">
  $ sudo apt-get update
      </code>
		</pre>
  </figure>
  <h5>Step2:</h5>
  <p>Remove any Docker files that are running in the system, using the following command</p>
  <figure class="highlight">
    <pre>
			<code class="language-html" data-lang="html">
  $ sudo apt-get remove docker docker-engine docker.io
  </code>
		</pre>
  </figure>
  <h5>Step3:</h5>
  <p>Install Docker using the following command</p>
  <figure class="highlight">
    <pre>
			<code class="language-html" data-lang="html">
  $ sudo apt install docker.io
</code>
		</pre>
    <div class="h-100">
      <img src="ubuntu/1.PNG" alt="Install Docker using the following command">
    </div>
  </figure>
  <h5>Step4:</h5>
  <p>Install all the dependency packages using the following command</p>
  <figure class="highlight">
    <pre>
				<code class="language-html" data-lang="html">
  $ sudo snap install docker
</code>
			</pre>
    <div class="h-100">
      <img src="ubuntu/3.PNG" alt="Docker Install all the dependency packages">
    </div>
  </figure>
  <h5>Step5:</h5>
  <p>Verify that Docker Engine is installed correctly by running the hello-world image</p>
  <figure class="highlight">
    <pre>
					<code class="language-html" data-lang="html">
  $ docker --version
  </code>
				</pre>
  </figure>
  <h5>Step6:</h5>
  <p> Pull an image from the Docker hub using the following command</p>
  <figure class="highlight">
    <pre>
					<code class="language-html" data-lang="html">
  $ sudo docker run hello-world
</code>
				</pre>
    <div class="h-100">
      <img src="ubuntu/4.PNG" alt="Docker pull and run hello world container">
    </div>
  </figure>
  <h5>Step7:</h5>
  <p> Check if the docker image has been pulled and is present in your system using the following command</p>
  <figure class="highlight">
    <pre>
						<code class="language-html" data-lang="html">
  $ sudo docker images
</code>
					</pre>
    <div class="h-100">
      <img src="ubuntu/5.PNG" alt="Docker images show">
    </div>
  </figure>
</div>

<div class="collapse multi-collapse" id="multiCollapseExample3" title="How to Install Docker Engine on RHEL.">
  <h4 title="How to install Docker Engine on RHEL.">How to install Docker Engine on RHEL (Step-by-Step) Guide</h4>
  <h5>Step1:</h5>
  <p>First, uninstall any previous versions of Docker.</p> 
  <figure class="highlight">
     <pre><code class="language-html" data-lang="html">
      $ sudo yum remove docker \
      docker-client \
      docker-client-latest \
      docker-common \
      docker-latest \
      docker-latest-logrotate \
      docker-logrotate \
      docker-engine \
      podman \
      runc
     </code></pre>
  </figure>
  <h5>Step2:</h5>
  <p>Then, install any required packages</p>
  <figure class="highlight">
     <pre><code class="language-html" data-lang="html">
      $ sudo yum install -y yum-utils     
    </code></pre>
    <img src="redhat/1.PNG" alt="Docker images show">
  </figure>

  <h5>Step3:</h5>
  <p>Set up the docker-ce repo</p>
  <figure class="highlight">
     <pre><code class="language-html" data-lang="html"> 
      $ sudo yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo
    </code></pre>
    <img src="redhat/2.PNG" alt="Docker images show">
  </figure>

  <h5>Step4:</h5>
  <p>Install Docker using the following command</p>
  <figure class="highlight">
     <pre><code class="language-html" data-lang="html"> 
      $ sudo yum install docker-ce
    </code></pre>
    <img src="redhat/5.PNG" alt="Docker images show">
  </figure>
  <h5>Step5:</h5>
  <p>Enable Docker Service</p>
  <figure class="highlight">
     <pre><code class="language-html" data-lang="html"> 
      $ sudo systemctl enable docker.service
    </code></pre>
    <img src="redhat/6.PNG" alt="Docker Service Enable">
  </figure>
  <h5>Step6:</h5>
  <p>Start the Docker service</p>
  <figure class="highlight">
     <pre><code class="language-html" data-lang="html"> 
      $ sudo systemctl start docker.service
    </code></pre>
    <img src="redhat/7.PNG" alt="Start the Docker service">
  </figure>
  
<h5>Step7:</h5>
<p>Verify that Docker Engine is installed</p>
<figure class="highlight">
   <pre><code class="language-html" data-lang="html"> 
    $  sudo docker --version
  </code></pre>
  <img src="redhat/8.PNG" alt="Verify that Docker Engine is installed">
</figure>
<h5>Step8:</h5>
<p>Pull an image from the Docker hub using the following command</p>
<figure class="highlight">
   <pre><code class="language-html" data-lang="html"> 
    $   sudo docker pull hello-world
  </code></pre>
  <img src="redhat/9.PNG" alt="Docker pull image from Docker Hub">
</figure>
<h5>Step9:</h5>
<p>Check if the docker image has been pulled and is present in your system using the following command</p>
<figure class="highlight">
   <pre><code class="language-html" data-lang="html"> 
    $ sudo docker images 
  </code></pre>
  <img src="redhat/10.PNG" alt="Docker show images">
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
