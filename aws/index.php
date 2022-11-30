
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
      <a href='/aws' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
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
<h2 class="left"><span class="left_h2">AWS </span> Tutorial</h2>
<a target="_top" href="https://digitalcotech.com/aws/index.php">AWS Introduction</a>
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
  <h1>AWS<span class="color_h1"> Introduction</span></h1>
  <hr>
  <h2>What is AWS (Amazon Web Services) and How Does it Work?</h2>
  <div class="container">
     <div class="row">
        <div class="aws-intro" id="aws-intro">
           <p>AWS is an abbreviation for Amazon Web Services. It is a platform that provides cloud computing solutions that are flexible, reliable, scalable, easy to use and cost-effective.</p>
           <p>AWS is a comprehensive and easy-to-use computing platform provided by Amazon. The platform is built on a combination of infrastructure as a service (IaaS), platform as a service (PaaS) and packaged software as a service (SaaS).
           </p>
        </div>
     </div>
  </div>
  <h2>In this tutorial, you can learn,</h2>
  <div class="container mb-3">
     <div class="row">
        <div class="aws-list">
           <ul>
              <li><a href="">What is Cloud Computing? </a></li>
              <li><a href="aws.php#aws-intro">What is AWS? </a></li>
              <li><a href=""> History of AWS</a></li>
              <li><a href="aws.php#aws-imp-topic"> Important AWS Services</a></li>
              <li><a href="aws.php#aws-user">Companies using AWS </a></li>
              <li><a href="aws.php#advantages">Advantages of AWS</a></li>
           </ul>
        </div>
     </div>
  </div>
  <h2>History of AWS</h2>
  <div class="container mb-3">
     <div class="row">
        <div class="aws-history" id="aws-history">
           <p>
              Amazon Web Services began operations in July 2002. Amazon made a significant investment in cloud technology and quickly came to dominate this new category of IT services. Many companies were hesitant to process data outside of the office space due to security and privacy concerns. This cultural resistance slowed the adoption of cloud concepts, and resistance to remote processing and storage has not yet been completely eliminated.
           </p>
           <p>Because it created a sense of ownership, the concept of creating virtual servers increased business confidence in the platform. Companies didn't feel like they were entrusting all their data to Amazon; instead, they had their own processing and storage facilities that they leased from Amazon.
           </p>
        </div>
     </div>
  </div>
  <h2>Who's Using AWS (Amazon Web Services)</h2>
  <div class="container mb-3">
     <div class="row">
        <div class="aws-history" id="aws-user">
           <ul>
              <li>Adobe Systems</li>
              <li>Airbnb</li>
              <li>Alcatel-Lucent</li>
              <li>Aon</li>
              <li>Autodesk</li>
              <li>BMW</li>
              <li>Bristol-Myers Squibb</li>
              <li>Canon</li>
              <li>Capital One</li>
              <li>Comcast</li>
              <li>Docker</li>
              <li>GE</li>
              <li>Hearst Corporation</li>
              <li>Hitachi</li>
              <li>HTC</li>
              <li>Intuit</li>
              <li>Johnson & Johnson</li>
              <li>Kellogg Company -SAP ERP Migration</li>
              <li>Lafarge</li>
              <li>Lyft</li>
              <li>NASA</li>
              <li>Netflix</li>
              <li>News Corp</li>
           </ul>
        </div>
     </div>
  </div>
  <h2>What are the Most Important AWS Cloud Services?</h2>
  <div class="container mb-3">
     <div class="row">
        <div class="aws-important-topic" id="aws-imp-topic">
           <ul>
              <li>EC2  Elastic Cloud Compute</li>
              <li>IAM  Identity and Access Management</li>
              <li>VPC  Virtual Private Cloud</li>
              <li>RDS  Relational Database Service</li>
              <li>EBS  Elastic Block Store</li>
              <li>ELB  Elastic Load Balancer</li>
              <li>Auto scaling</li>
              <li>DNS Route 53 - DNS</li>
              <li>Amazon Cloudwatch</li>
              <li>Amazon Lambda</li>
              <li>Amazon Beanstalk</li>
              <li>Amazon CloudFront</li>
              <li>SNS - Simple Notification Service</li>
           </ul>
        </div>
     </div>
  </div>
  <h2>AWS Benefits and Advantages</h2>
  <div class="container mb-3">
     <div class="row">
        <div class="aws-advantages" id="advantages">
           <ul>
              <li>User-friendly \Flexible</li>
              <li>Secure</li>
              <li>Cost-effective</li>
              <li>Reliable</li>
              <li>Scalable and elastic</li>
              <li>Outstanding performer</li>
              <li>Limitations of AWS</li>
              <li>Experts are in short supply.</li>
              <li>Price Variations</li>
              <li>Issues in General</li>
           </ul>
        </div>
     </div>
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
