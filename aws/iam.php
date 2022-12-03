
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
<a target="_top" href="rds.php" title="What is IAM">AWS RDS</a>



      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
  
      <h1>AWS<span class="color_h1"> Identity Access Management (IAM)</span></h1>
      <hr>




<div class="aws-intro" id="aws-intro">

    <h2>What is IAM? - AWS Identity and Access Management</h2>
   
        <p>
        AWS Identity and Access Management is a web service that you security control access to
        AWS resources. We use IAM to control who is authenticated (signed-in) and authorized (has
        permission) to use resources. 
        </p>

        <ul>
<li>When you first create AWS account, you begin in a single sign-in identity that has completely access to all AWS services and resources in the account.</li>
<li>This identity is called the AWS account “Root-User” and is accessed by sighed-in with the email address and password that you used to create the account.</li>
<li>AWS strongly recommends that you do not use the root user for you everyday tasks,even the administrative ones.</li>
<li>Use another IAM user account to manage your account's administrative tasks, and securely store the root user credentials for only a few account and service management tasks.</li>

<li>The maximum number of IAM users per AWS account is 5000. You can add up to ten users at once.</li>
<li>You are also limit to 300 groups per AWS account.</li>
<li>Default limits of managed policies attached to an IAM role and IAM user is 10.</li>
<li>IAM user can be a member of maximum 10 groups.</li>
<li>We can assign maximum two access keys to an IAM user.</li>
</ul>
</div>


<div class="ec2-features">
<h2>What is AWS Identity and Access Management (IAM) Features</h2>   
<p>These are the main features of Amazon AWS Identity and Access Management (IAM):</p>

<p>
    <span class="strong"><strong>Shared access to your AWS account</strong></span>:
  <ul>
    <li>You can give different people different permissions for different resources.</li>
    <li>For example, you can give some users full access to EC2, S3, Dynamo DB, and Redshift while denying others read-only access to some S3 buckets, or permission to manage only some EC2 instances or access your billing information, but nothing more.</li>
  </ul>
</p>
<p>
    <span class="strong"><strong>Granular permission</strong></span>:
    Amazon S3 provides a strong authentication mechanism for manipulating stored data.
</p>
<p>
    <span class="strong"><strong>Secure access to AWS resources for application that run on Amazon EC2</strong></span>:
        You can use IAM roles to securely provide the credentials required by applications running on EC2 instances to access other AWS resources. Include S3 repositories and RDS or Dynamo DB databases, for example.
</p>
<p>
    <span class="strong"><strong>Identity federation</strong></span>:
    You can grant access to users who already have passwords elsewhere. For example, you could use your corporate network or an Internet identity provider to gain temporary access to your AWS account.
</p>
<p>
    <span class="strong"><strong>Multifactor Authentication (MFA)</strong></span>:
        You can add two-factor authentication to your account and individual users to increase security. Physical hardware or virtual MFA (for example, Google Authenticator) can be used.
</p>
<p>
    <span class="strong"><strong>Identity information for assurance</strong></span>:
        If you use AWS Cloud Trail, you will receive logs that contain information about who has requested resources in your account. That data is based on IAM identities.
</p>
<p>
    <span class="strong"><strong>PCI-DSS compliance</strong></span>:
    IAM enables a merchant or service provider to process, store, and transmit credit cards and has been validated as compliant with Payment Card Industries (PCI) Data Security Standards (DSS).
</p>
<p>
    <span class="strong"><strong>Fee to Use</strong></span>:
    AWS IAM is a free feature included with every AWS account. You will only be charged if your IAM users use other AWS products.
</p>


</div>


<div class="iam-advantages">
    <h2>What is IAM users - AWS Identity and Access Management</h2>

    <p>An AWS Identity and Access Management (IAM) a user is a person or application that interacts with AWS. You can create up to 5 users at a time. An IAM user can be a real person or a program that requires AWS access to process AWS resources. IAM users are primarily used to allow people to sign in to the AWS Management Console for interactive tasks and to make programmatic requests to AWS services via an API or CLI.</p>
    
</div>
<div class="iam-advantages">
    <h2>What is IAM Groups</h2>

    <p>IAM user group is a group of IAM users. User groups allow you to specify permissions for multiple users, making it easier to manage those users' permissions.</p>
    <ul>
<li>An IAM group is a collection of IAM users.</li>
<li>It is a method for assigning permissions/policies to multiple users at the same time.</li>
<li>Use groups to specify permissions for a group of users, making those permissions easier to manage for those users.</li>
<li>For example, you could create a group called HR and grant that group the types of permissions that the HR department typically requires.</li>
<li>Any user in that group has the group's permissions automatically.</li>
<li>If a new user joins your organisation and should have administrator privileges, you can assign the appropriate permissions by adding the user to that group.</li>
</ul>


<h3>IAM Group Limitations</h3>
<ul>
    <li>A group is not a true identity in IAM because it cannot be identified as a principal in a permissions policy.</li>
    <li>The group cannot be nested.</li>
    <li>AWS accounts are limited to 300 groups.</li>
    <li>A user can be a member of up to ten IAM groups.</li>
    </ul>
</div>


<div class="s3-featurea">
<h2>What is IAM Roles</h2>
    <p>Roles are a set of permissions that provide access to tasks and resources in AWS. An IAM user can use a role in the same or different AWS account.</p>

    <ul>
<li>An IAM role, such as a user, is an identity with permissions policies that govern what the identity can and cannot do in AWS.</li>
<li>An IAM role is not associated with any credentials (password or access key).</li>
<li>A role, rather than being associated with a single person, is intended to be assumed by anyone who requires it.</li>
<li>An IAM user can temporarily assume different permissions for a specific task by assuming a role.</li>
<li>A federated user who signs in with an external identity provider instead of IAM can be assigned an IAM role.</li>
</ul>

<p>A role can be used in two ways:</9>

<div class="instance-types" id="instance-types">
    <h3>  IAM Console</h3>
    <p class="mb-2">
        IAM users in your account who are signed in to the IAM console can switch to a role to temporarily use the role's permissions in the console. The user relinquishes their original permission and accepts the role's permission. When a user is assigned a role, their original permissions are restored.
    </p>
</div>
<div class="instance-types" id="instance-types">
    <h3> Programmatic Access</h3>
    <p class="mb-2">
        Applications or services provided by AWS (such as Amazon EC2) can assume a role by requesting temporary security credentials for a role to make programmatic requests to AWS.
        You use a role in this way to avoid having to share or maintain long-term security credentials for each entity that needs access to a resource.
</div>

</div>


<div class="iam-policy">
    <h2>What is IAM Policies</h2>

    <p>Policies are made up of documents known as policy documents. These documents are in JSON format and specify what a user/group/role is allowed to do.</p>

    <h6>You can create a new IAM policy in the AWS management console in one of three ways:</h6>


    <p>
        <span class="strong"><strong>Json</strong></span>:
        You can write your own JSON syntax.
    </p>
    <p>
        <span class="strong"><strong>Import</strong></span>:
        You can import a managed policy into your account and then edit the policy to customize it to your specific requirements.
    </p>
    <p>
        <span class="strong"><strong>Visual editor</strong></span>:
        You can build a new policy from scratch in the visual editor. If you can use the visual editor, you don't need to understand JSON syntax.
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
