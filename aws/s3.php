
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
    <a class='w3schools-logo ' href='/'> <span > <img src="../img/lo.png" alt=""></span><span class='dotcom h2 text-warning'>Digitalcotech</span></a>
  <div class='w3-right w3-hide-small w3-wide toptext'>
<div class="text-light">
        <a href="https://www.facebook.com/people/Digitalcotech/100088403738077/?is_tour_completed=true" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-facebook-f"></i>
        </a>        
        <a href="https://www.instagram.com/digitalcotech/" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://www.youtube.com/@digitalcotech/channels" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-youtube"></i>
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
          <!-- <h3>HTML and CSS</h3> -->
          <a class="w3-bar-item w3-button" href='/html'>HTML</a>
          <a class="w3-bar-item w3-button" href='/git'>GIT</a>        
          <div class="w3-hide-large w3-hide-small">
          
          </div>
        </div>
        <div class='w3-col l3 m6'>
          <!-- <h3>JavaScript</h3> -->
          <a class="w3-bar-item w3-button" href='/agile'>AGILE</a>
            <a class="w3-bar-item w3-button" href='/linux'>LINUX</a>  
             
        </div>
        <div class='w3-col l3 m6'>
          <!-- <h3>Server Side</h3> -->
          <a class="w3-bar-item w3-button" href='/json'>JSON</a>
          <a class="w3-bar-item w3-button" href='/docker'>DOCKER</a>            
        </div>
        
        <div class='w3-col l3 m6 w3-hide-medium'>
          <!-- <h3>XML</h3> -->
          <a class="w3-bar-item w3-button" href='/clouds'>CLOUD COMPUTING</a>
            <a class="w3-bar-item w3-button" href='/blockchain'>BLOCKCHAIN</a>  
        
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
  
      <h1>AWS<span class="color_h1"> S3 </span></h1>
      <hr>




<div class="aws-intro" id="aws-intro">

    <h2>What is Amazon S3?</h2>
   
        <p>
            Amazon S3 (Simple Storage Service) is a scalable, high-speed, low-cost web-based backup and archiving service for data and application programs.
            It is Object-based storage, i.e., you can store the images, word files, pdf files, etc.
            It storage is provided through a web service interface. It is intended for developers and provides 99.999999999% durability and 99.99% item availability. You can also store computer files up to 5 terabytes.
        </p>
</div>


<div class="ec2-features">
<h2>Features of Amazon S3</h2>   
<p>These are the main features of Amazon S3:</p>

<p>
    <span class="strong"><strong>Scalable</strong></span>:
    Amazon S3 does not impose any size restrictions on users when storing data. Because it is a pay-as-you-go service, it stores the data and generates the bill accordingly. As a result, the subscriber will never run out of space.
</p>
<p>
    <span class="strong"><strong>Security</strong></span>:
    Amazon S3 provides a strong authentication mechanism for manipulating stored data.
</p>
<p>
    <span class="strong"><strong>Reliable</strong></span>:
    Amazon S3 guarantees 99.9% server uptime. As a result, the subscriber does not need to worry about the reliability of the data.
</p>
<p>
    <span class="strong"><strong>Versioning</strong></span>:
    Amazon S3 supports storing multiple versions of an object. It is mainly used to recover lost data.
</p>
<p>
    <span class="strong"><strong>Website Hosting</strong></span>:
    Users can host a website on Amazon S3 and assign it to your domain. This is extremely profitable because the user only pays for what he uses. Also, the user does not need specially configured servers to serve the website.
</p>
<p>
    <span class="strong"><strong>Integration</strong></span>:
    Amazon S3 can be integrated with a variety of other services, including Amazon EC2, Amazon EBS, Amazon Glacier, and many others. Developers often use Amazon S3 to store images, videos, or documents and access them via HTTP Get.
</p>
<p>
    <span class="strong"><strong>Reduced Redundancy Storage</strong></span>:
    Amazon S3 subscribers have the option of storing data using the Reduced Redundancy Storage (RRS) storage class. It is primarily used for non-critical, reproducible data storage at lower levels of redundancy. The cost of storing in an RRS storage class is significantly less than the cost of storing in a standard storage class.
</p>


</div>


<div class="s3-advantages">
    <h2>What are the advantages and benefits of using Amazon S3?</h2>
    <span class="strong">
        <strong> Advantages include</strong>
    </span>
    <ul>
        <li>
            Amazon S3 is a high-availability storage service provided by Amazon. As a free Tier user, you can save up to 5GB of data.
        </li>
        <li>
            It is a low cost method of storing files. However, because you only pay for what you use, your bill grows with the app (and hopefully app revenue).
        </li>
        <li>
            It scales. You can keep putting files and it will never fill up.
            You can serve files and even entire static websites directly from S3.
        </li>
        <li>
            It is centralized, which makes it easy for it to act as a file store for many servers that share files, such as user images that need to be accessed from any server in the cluster.
        </li>
        <li>
            You can render files from S3 as well as entire static websites.
        </li>
        <li>
            There are libraries available in almost every programming language that connects to S3 and integrates it into your application.
        </li>
        <li>
            Files can be automatically stored in the Glacier storage class. It keeps files like log files for longer time and at less cost. The disadvantage is that you have to wait for them to be retrieved if you need them.
        </li>
    </ul>
</div>


<div class="s3-featurea">
    <h2>How Amazon S3 works</h2>
    <p>Amazon S3 is a bucket-based object storage service that stores data as objects. A file and any metadata that describes it are considered objects. A bucket is an object container.</p>

    <h5>
        <span class="strong"><strong>Bucket</strong></span>
    </h5>

        <p>
            A bucket is a storage container for Amazon S3 items. A bucket can contain any number of objects and you can have up to 100 buckets in your account.
        </p>

    <h5>
        <span class="strong"><strong>Versioning</strong></span>
    </h5>

        <p>
            Versioning is the practice of placing multiple variants of an object in the same Amazon S3 bucket. It is used to preserve, retrieve and restore each version of each item stored in the S3 bucket. Versioning can help you recover quickly from unexpected user actions and application failures. An S3 bucket can be used to store multiple objects with the same key but different version IDs.
        </p>
    <h5>
        <span class="strong"><strong>Objects</strong></span>
    </h5>

        <p>
            Objects are made up of object data and metadata. Metadata consists of a collection of name-value pairs that describe an object. These pairs include some standard HTTP metadata, such as Content-Type, as well as some default metadata, such as the last modified date. Custom metadata can also be specified when the object is saved.
        </p>
    <h5>
        <span class="strong"><strong>Keys</strong></span>
    </h5>

        <p>
            An object key (or key name) is a unique identifier for the objects of a bucket. Each object in the bucket has only one key. Each object is uniquely identified by a bucket, object key, and optionally, the version ID (if S3 versioning is enabled for the bucket). So consider Amazon S3 to be a simple data map between a "bucket + key + version" and an object.
        </p>
    <h5>
        <span class="strong"><strong>Access Control Lists</strong></span>
    </h5>

        <p>
            Access control lists differ from policies in that they can allow access on buckets or individual items.
        </p>
    <h5>
        <span class="strong"><strong>Bucket Policies </strong></span>
    </h5>

        <p>
            Bucket policies grant granular control over buckets and the objects they contain.
        </p>
    <h5>
        <span class="strong"><strong>Access Points</strong></span>
    </h5>

        <p>
            Amazon S3 Access Points make it easy to manage data access at scale in S3. Access points are network endpoints that are linked to buckets from which you can perform S3 object operations. An access point alias has the same functionality as an access point ARN and can be used in place of an S3 bucket name for data access.
        </p>
        <!-- <ul>
            <li>In S3, data is stored in buckets</li>
            <li>You can have upto 100 buckets</li>
            <li>Bucket names can contain upto 63 lowercase letters, numbers, hyphens</li>
            <li>Bucket Names must be unique.</li>
        </ul> -->
</div>

<div class="s3-classes">
    <h2>What are the different types of Storage Classes in S3?</h2>
    <p>AWS S3 offers a variety of storage types with varying performance, features, and cost structures.</p>
    <span>
        Following are the types of storage classes in S3,
    </span>

</div>




<p>
    <span class="strong"><strong>Standard</strong></span>:
    The Standard Storage Class is designed for frequently accessed data and has 99.999999999% durability and 99.99% capacity. Provides data for more than three Availability Zones.
</p>
<p>
    <span class="strong"><strong>Standard_IA (Infrequent access)</strong></span>:
    The Standard IA storage class is designed for long-term, infrequently accessed data, with 99.999999999% durability and 99.9% capacity. Provides data for more than three Availability Zones. The minimum storage period is 30 days.
</p>
<p>
    <span class="strong"><strong>Intelligent_Tiering</strong></span>:
    The Intelligent Tiering storage class is designed for long-term data with changing or unknown access patterns, with 99.999999999% durability and 99.9% capacity. Provides data for more than three Availability Zones. The minimum storage period is 30 days.
</p>
<p>
    <span class="strong"><strong>Glacier</strong></span>:
    The Glacier storage class is designed for long-term data archiving, with recovery times ranging from minutes to hours, 99.999999999% durability, and 99.99% capacity. Provides data for more than three Availability Zones. The minimum storage period is 90 days.
</p>
<p>
    <span class="strong"><strong>Onezone_IA</strong></span>:
    The Onezone IA storage class is designed for long-lived, infrequently accessed, non-critical data with 99.999999999% durability and 99.5% capacity. It only provides data for one Availability Zone. The minimum storage period is 30 days.
</p>



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
