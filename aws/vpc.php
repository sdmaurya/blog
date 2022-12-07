
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
            <!-- <h3>XML</h3> -->
            <!-- <a class="w3-bar-item w3-button" href='/agile'>Agile</a>
            <a class="w3-bar-item w3-button" href='/linux'>Linux</a>         -->
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
        <!-- <div class='w3-col l3 m6 w3-hide-medium'>        
          <a class="w3-bar-item w3-button" href='/clouds'>CLOUD COMPUTING</a>
            <a class="w3-bar-item w3-button" href='/blockchain'>BLOCKCHAIN</a>  
        
        </div> -->
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
  
      <h1>AWS<span class="color_h1"> Virtual Private Cloud(VPC)</span></h1>
      <hr>




<div class="aws-intro" id="aws-intro">

    <h2>What is Amazon VPC? - Amazon Virtual Private Cloud</h2>
   
        <p>
        VPC stands for Virtual Private Cloud.
VPC is a logically isolated area of ​​the AWS Cloud where you can launch AWS resources in a virtual network that you define.
This virtual network is much like a traditional network that you would run in your own data center, but with the added benefit of using AWS's scalable infrastructure.
        </p>
</div>


<div class="ec2-features">
<h2>Features of Amazon VPC</h2>   
<p>These are the main features of Amazon VPC:</p>

<p>
    <span class="strong"><strong>Virtual private clouds (VPC)</strong></span>:
    A VPC is a virtual network that works similar to a traditional network in your own data center. Subnets can be added to a VPC after it has been created.
</p>
<p>
    <span class="strong"><strong>Subnets</strong></span>:
    A subnet is a range of IP addresses in your VPC. A subnet must reside in a single Availability Zone. After adding subnets, you can deploy AWS resources to your VPC.
</p>
<p>
    <span class="strong"><strong>IP addressing</strong></span>:
    IPv4 and IPv6 addresses can be assigned to VPCs and subnets. You can also bring your public IPv4 and IPv6 GUA addresses to AWS and assign them to resources in your VPC, such as EC2 instances, NAT gateways, and network load balancers.
</p>
<p>
    <span class="strong"><strong>Routing</strong></span>:
    Using route tables to determine the destination of network traffic from your subnet or gateway.
</p>
<p>
    <span class="strong"><strong>Peering connections</strong></span>:
    A VPC peering connection is a network connection that allows you to route traffic between two VPCs privately.
</p>
<p>
    <span class="strong"><strong>Traffic Mirroring</strong></span>:
    Network traffic must be copied from network interfaces and sent to security and monitoring devices for deep packet inspection.
</p>
<p>
    <span class="strong"><strong>VPC Flow Logs</strong></span>:
    A flow log stores information about IP traffic from network interfaces in your VPC.
</p>


</div>


<div class="s3-advantages">
    <h2>Components of Amazon VPC?</h2>
    <!-- <span class="strong">
        <strong> Advantages include</strong>
    </span> -->
    <ul>
<li>CIDR and IP address subnets</li>
<li>Implied Router and Routing table</li>
<li>Internet Gateway</li>
<li>Security Group</li>
<li>NACL</li>
<li>Virtual Private Gateway</li>
<li>Peering Connectors</li>
<li>Elastic IP</li>
</ul>

<!-- CIDR and IP address subnets -->

<h5>
        <span class="strong"><strong>CIDR and IP address subnets</strong></span>
    </h5>

    <p>
    <span class="strong"><strong>Public Subnet</strong></span>:
    When traffic from a subnet is routed to an Internet gateway, the subnet is called a public subnet. If you want your public subnet instance to communicate with the Internet over IPV4, it must have a public IPV4 address or an Elastic IP address.
    </p>
    <p>
    <span class="strong"><strong>Private Subnet</strong></span>:
    A private subnet is one that does not have a route to the Internet gateway. You must specify an IPV4 CIDR block for the VPC when you create it. The allowed block size ranges from /16 to /28 networks. The first four and last IP addresses of the subnet cannot be assigned.
    </p>

    <p>For example, let&rsquo;s see 192.168.0.0/24:</p>
        <p>IP Address: 192.168.0.0</p>

        <p>Subnet Mask: 255.255.255.0</p>

        <p>11000000 10101000 00000000 00000000</p>

        <p>11111111 11111111 00000000 00000000</p>


        <h5>
        <span class="strong"><strong>Implied Router and Routing table</strong></span>
    </h5>
    <ul>
<li>It is the central routing function.</li>
<li>It connects the different Availability Zones and the VPC to the Internet gateway.</li>
<li>Per VPC, you can have up to 200 route tables.</li>
<li>Each routing table can contain up to 50 routing entries.</li>
<li>At any given time, each subnet can only be associated with one route table.</li>
<li>If you don't specify a subnet to associate the routing table with, the subnet will be associated with the default VPC routing table.</li>
<li>If necessary, you can also edit the main route table, but you cannot delete it.</li>
<li>However, you can manually make a custom route table the primary route table, after which you can delete the old primary route table because it is no longer a primary route.</li>
</ul>


<div class="internet">
    <h5>
        <span class="strong"><strong>Internet Gateway</strong></span>
    </h5>
    <ul>
        <li>An Internet gateway is a virtual router that connects a VPC to the Internet.</li>
        <li>The default VPC is already linked to an Internet gateway.</li>
        <li>To access the Internet, you must attach the Internet gateway when creating a new VPC.</li>
        <li>Check that your subnet's route table points to the Internet gateway.</li>
        <li>It uses NAT to connect your public and private IPV4 addresses.</li>
        <li>It is compatible with IPV4 and IPV6.</li>
        </ul>
</div>
<div class="internet">
    <h5>
        <span class="strong"><strong>NAT Gateway</strong></span>
    </h5>
    <ul>
        <li>You can use a network address translation gateway to connect instances in a private subnet to the Internet or other AWS services while preventing the Internet from connecting to those instances.</li>
        
        <li>In your account, you are charged for creating and using a NAT gateway. NAT gateway hourly usage and data processing fees apply. Amazon EC2 data transfer fees also apply.</li>
        <li>To create a NAT gateway, you must first specify the public subnet where the NAT gateway will be located.</li>
        
        <li>When you create a NAT gateway, you must also specify an Elastic IP address to associate with it.</li>
        
        <li>You do not need to give your private instance a public IP address.</li>
        </ul>
</div>
<div class="internet">
    <h5>
        <span class="strong"><strong>Security Group</strong></span>
    </h5>
    <ul>
        <li>It is a virtual firewall that operates at the ENI level.</li>
        <li>Each EC2 instance interface can have up to five security groups.</li>
        <li>There can only be allow rules and not deny rules.</li>
        <li>Return traffic with incoming traffic state allowed is allowed even if there are no rules allowing it.</li>
        </ul>
</div>

<div class="internet">
    <h5>
        <span class="strong"><strong>NACL</strong></span>
    </h5>
    <ul>
        <li>It is a function that runs on the implicit router.</li>
        <li>NACL is an optional layer of security for your VPC that acts like a firewall to control traffic in and out of one or more subnets.</li>
       
        <li>Your VPC is preconfigured with a writable default NACL. By default, it allows all incoming and outgoing IPV4 traffic, as well as IPV6 traffic, if applicable.</li>
        <li>A custom NACL can be created and associated with a subnet. Unless you add rules, each NACL denies all incoming and outgoing traffic by default.</li>
       
        <li>A NACL must be assigned to each subnet in your VPC. If a subnet is not explicitly associated with a NACL, it is automatically associated with the default NACL.</li>
        </ul>
</div>
<div class="internet">
    <h5>
        <span class="strong"><strong>VPC Peering</strong></span>
    </h5>
    <ul>
        <li>A VPC peering connection is a network connection that allows you to route traffic between two VPCs using private IPV4 or IPV6 addresses.</li>
        <li>Instances within any of the VPCs can communicate with each other as if they were on the same network.</li>
        <li>You can establish a VPC peering connection between your own VPC and the VPC of another AWS account. The VPC can be located in a different region.</li>
        </ul>
</div>



    
</div>


<div class="route-table">
    <h2>What Is Route Table?</h2>
    <p>
        Route table can be understood as a table that contains rules for routing traffic within and outside a subnet.
The route table is also used to add Internet Gateway to the subnet. There can be multiple route tables in a VPC.
    </p>
</div>
<div class="route-table">
    <h2>What Is Internet Gateway?</h2>
    <p>
        Internet Gateway allows connection to the Internet. Allows the user to make the subnet public by connecting it to the Internet. An instance can access the Internet with the help of the Internet Gateway, and resources external to the instance can access the instance.
    </p>
</div>
<div class="route-table">
    <h2>What is NAT(Network Address Translation)?</h2>
    <p>
       
        NAT is designed to save IP addresses. It allows private IP networks to connect to the Internet using unregistered IP addresses.
    </p>
    <h5>
        <span class="strong"><strong>What is NAT Instance?</strong></span>
    </h5>
    <p>
        NAT allows a single device, such as a router, to act as an agent between the Internet and a local network, requiring only a single IP address to represent an entire group of computers on the public network, i.e. outside your network.
    </p>

    <h5>
        <span class="strong"><strong>What is NAT Instance?</strong></span>
    </h5>
    <p>
        Instances in the private subnet can initiate outbound traffic to the Internet, but cannot receive inbound traffic initiated by someone on the Internet.
      
     </p>
 
        <p>
            <span class="strong"><strong>Note</strong></span>:
            NAT instance is no longer supported; use NAT Gateway instead.
        </p>
      
    <h5>
        <span class="strong"><strong>What is NAT Gateway?</strong></span>
    </h5>
    <p>
        NAT Gateway is a managed NAT service that offers improved availability, higher bandwidth, and requires less administrative effort.
       
        </p>
   
</div>


</div>

</div>
<?php include('../footer.php') ?>

<script src="../lib/w3schools_footer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:28 GMT -->
</html>
