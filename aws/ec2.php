
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:26 GMT -->
<head>
<title>AWS Tutorial</title>
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
<h2 class="left"><span class="left_h2">AWS </span> Tutorial</h2>
<a target="_top" href="http://temp.co/aws/index.php">AWS Introduction</a>
<a target="_top" href="ec2.php" title="What is Elastic Cloud Compute">AWS EC2</a>
<a target="_top" href="s3.php" title="What is S3">AWS S3</a>
<a target="_top" href="iam.php" title="What is IAM">AWS IAM</a>
<a target="_top" href="vpc.php" title="What is VPC">AWS VPC</a>
<a target="_top" href="route53.php" title="What is Route 53">AWS Route 53</a>


      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
  
      <h1>AWS<span class="color_h1"> Elastic Compute Cloud </span></h1>
      <hr>

<div class="aws-intro" id="aws-intro">

    <h2>Introduction to Amazon EC2</h2>
   
    <ul>
      <li>EC2 stands for Elastic Compute Cloud.</li>
      <li>Amazon EC2 is the virtual machine in the Cloud Environment.</li>
      <li>Amazon EC2 provides scalable capacity. Instances can scale up and down automatically based on the traffic.</li>
      <li>You do not have to invest in the hardware.</li>
      <li>You can launch as many servers as you want with full control over security, networking and storage.</li>
      </ul>
</div>


<div class="aws-intro" id="aws-intro">

    <h2>What is Elastic Compute Cloud (EC2)</h2>
   
        <p>Amazon Elastic Compute Cloud (Amazon EC2) is a cloud computing web service that provides scalable and secure computing power. Its goal is to make web-scale cloud computing easier for developers by allowing them to obtain and configure capacity with minimal friction.
Amazon is adaptable and supports a wide range of operating systems.</p>
</div>


<div class="ec2-features">
<h2>Features of Amazon EC2</h2>   
<p>Amazon EC2 provides the following features:</p>

<h4>Storage</h4>
<p>Amazon offers elastic block storage services, which allow users to attach hard drives to EC2 services as needed. This allows users to scale up and down the storage requirements for their work, making it highly customizable.</p>


<h4>Operating system</h4>
<p>There are several operating systems that are compatible with EC2 instances, including Linux, Windows Server, CentOS, and Debian. As a result, it is the first choice of many developers.</p>

<h4>Reliable</h4>
<p>Amazon EC2 provides a highly reliable environment where instances can be changed quickly. For each Amazon EC2 region, the SLA commitment is 99.9% availability.</p>

<h4>Secure</h4>
<p>Amazon EC2 works with Amazon Virtual Private Cloud to provide resources with a secure and robust network.</p>
<h4>CloudWatch</h4>
<p>Since there are numerous applications deployed on AWS, this service helps monitor those services in the AWS Cloud. Cloud Watch services include the analysis, collection, and storage of real-time and historical performance data. This can improve resource utilization as well as cost optimization and changing workloads on a regular basis.</p>

</div>



<h2>What are the different types of Amazon EC2 Instance?</h2>
<div class="aws-list">
<ul>
<li>General purpose</li>
<li>Computer Optimized</li>
<li>Storage Optimized</li>
<li>Memory Optimized</li>
<li>Accelerated Computing</li>
</ul>
</div>



<div class="instance-types" id="instance-types">

    <h3>General purpose</h3>
    <p class="mb-2">
    General Purpose instances offer a good mix of compute, memory, and network resources and can be used for a wide variety of workloads. These instances are ideal for applications such as web servers and code repositories that use these resources equally.
    </p>
  <div class="examples mb-4">


   <b>Ex:</b> <span> Mac, T4g, T3, T3a, T2, M6g, M5, M5a, M5n, M5zn, M4, A1</span>
   </div>
</div>
<div class="instance-types" id="instance-types">

    <h3>Computer Optimized</h3>
    <p class="mb-2">
    Compute Optimized Instances are best suited for compute-intensive applications that require powerful processors. Instances in this family are ideal for batch processing workloads, media transcoding, high-performance web serving, high-performance computing (HPC), scientific modeling, dedicated game servers and ad serving engines, machine learning and other computationally intensive applications.
    </p>
  <div class="examples mb-4">


   <b>Ex:</b> <span> C7g, C6g, C6gn, C5, C5a, C5n, C4</span>
   </div>
</div>
<div class="instance-types" id="instance-types">

    <h3>Memory Optimized</h3>
    <p class="mb-2">
    Memory Optimized Instances are designed to provide fast performance for workloads that process large data sets in memory.
    </p>
  <div class="examples mb-4">


   <b>Ex:</b> <span> R6a, R6g, R5, R5a, R5b, R5n, R4, X2gd, X1e, X1, Z1d</span>
   </div>
</div>
<div class="instance-types" id="instance-types">

    <h3>Storage Optimized</h3>
    <p class="mb-2">
    Storage Optimized Instances are intended for workloads that require high-performance sequential read and write access to very large data sets on local storage. They are designed to provide applications with tens of thousands of low-latency random I/O operations per second (IOPS).
    </p>
  <div class="examples mb-4">


   <b>Ex:</b> <span> Im4gn, Is4gen, I4i I3, I3en, D2, D3, D3en, H1</span>
   </div>
</div>
<div class="instance-types" id="instance-types">

    <h3>Accelerated Computing</h3>
    <p class="mb-2">
      Accelerated computing instances use hardware accelerators or coprocessors to perform tasks such as floating point number calculations, graph processing, or data pattern matching, rather than software that runs on the CPU.
    </p>
  <div class="examples mb-4">


   <b>Ex:</b> <span> P4, P3, P2, Inf1, G4dn, G3, F1</span>
   </div>
</div>

<div class="instance-types" id="instance-types">
  <h2>Here are some terms you need to know before creating an EC2 instance:</h2>
  <ul>
    <li>Amazon Machine Image (AMI)</li>
    <li>Instance Type</li>
    <li>Network</li>
    <li>Subnet</li>
    <li>Public IP</li>
    <li>Elastic IP</li>
    <li>Private IP</li>   
    <li>Root Volume</li>
    <li>Security Group</li>
    <li>KeyPair</li>
    </ul>

   
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Amazon Machine Image (AMI)</h3>
  <p class="mb-2">
     An Amazon Machine Image (AMI) Provides the information required to launch
     an instance. An AMI Includes the following, one or more Elastic Block Store snapshot, a template for the
     root volume of the instance (for example Operating system, software, configurations etc.)
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Instance Type</h3>
  <p class="mb-2">
     Instance types comprise varying combinations of CPU, Memory, storage & Networking
     capacity and give you the flexibility to choose the appropriate mix of resources for your applications.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Subnet</h3>
  <p class="mb-2">
     Subnet is a subnetwork in your virtual network of your Amazon Network. By default there is one
     subnet per availability zone.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Public IP</h3>
  <p class="mb-2">
     A public IP is an IP Address which can be used to access internet and allow the communication
     over the internet. Public IP will be assigned by amazon and it is dynamic. If you stop and start your EC2
     instance, The public IP will change.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Elastic IP(EIP)</h3>
  <p class="mb-2">
     Elastic IP is a kind of Fixed Public IP address which we can attach to our Instances. Elastic
     IP will not change if we stop & Start our EC2 instances. We need to request EIP from amazon and it will
     be free if we attach to any instances, if you keep this EIP unused in your account then it will be charged
     after initial 1st hour.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Private IP</h3>
  <p class="mb-2">
     Private IP can be used to establish the communication with in the same network only,
     Private (internal) addresses are not routed on the Internet and no traffic can be sent to them from the
     Internet, means no internet access will be available over private address.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Root Volume</h3>
  <p class="mb-2">
     The storage which we used to install Operating system for instance is called as root
     volume (Ex: C:\ Drive). The following volume types are supported as root volumes: General purpose SSD,
     Provisioned IOPS SSD, Magnetic.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>Security Group</h3>
  <p class="mb-2">
     A Security group acts as a virtual firewall for your instance to control incoming &
     Outgoing traffic. Security groups to be attached and we can attach 5 security groups to each instance.
  </p>
</div>
<div class="instance-types mb-3" id="instance-types">
  <h3>KeyPair</h3>
  <p class="mb-2">
     Key pair is a combination of public key and private key which can be used to encrypt and
     decrypt the data, is a set of security credentials that you use to prove your identity when connecting to
     an instance. Amazon EC2 stores the public key and user stores the private key.
  </p>
</div>






<!-- <div class="container mt-2">
  <div class="digital-link mt-2">
    <h4>You Might Like:</h4>
    <div><a href="bitcoin_intro.php" title="What is Bitcoin">What is Bitcoin</a></div>
    <div> <a href="/blockchain/" title="What is Blockchain">What is Blockchain</a></div>

  </div>
</div> -->

</div>

</div>
<?php include('../footer.php') ?>

<script src="../lib/w3schools_footer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:28 GMT -->
</html>
