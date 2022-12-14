
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
      <a href='/clouds' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
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
<h2 class="left"><span class="left_h2">Cloud Computing</span></h2>
<a target="_top" href="https://digitalcotech.com/clouds/">Cloud Computing Introduction</a>
<a target="_top" href="devops.php" title="Devops Tutorial">Devops</a>


      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
  
<h1>Devops<span class="color_h1"> Tutorial</span></h1>
<hr>

<div class="container">
<h2>What is DevOps?</h2>
<!-- <p>DevOps is a set of practises, methodologies, and tools that bring together development (dev) and IT operations (ops)
    to improve an organization's ability to deliver superior software solutions, applications, and other digital products at a much faster pace.
    </p>

<div class="Cloud-Computing text-center" >
  <img src="img/devops.jpg" alt="Devops" width="500">
              <p> <strong>Devops</strong> </p>
              </div> -->

              <div class="container mb-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="bg-image">
                      <img src="img/devops.jpg" alt="Cloud Computing">
                    </div>  
                  </div>
                  <div class="col-md-6 mt-2">
                    <p>DevOps is a set of practises, methodologies, and tools that bring together development (dev) and IT operations (ops)
                      to improve an organization's ability to deliver superior software solutions, applications, and other digital products at a much faster pace.
                      </p>
                </div>
                </div>
                </div>

<div class="devops-benefite">
  <h3 title="What Is DevOps Lifecycle?">What Is DevOps Lifecycle?</h3>
  <p>The following are some key DevOps Lifecycle Phases.</p>
  
  <p>DevOps practises reflect the concept of continuous improvement and automation. Many practises concentrate on one or more phases of the development cycle. These practises include:</p>
  <ul>
    <li><strong>Continuous Improvement -  </strong> This practice covers the planning and coding phases of the DevOps lifecycle. Mechanisms for version control may be involved. </li>    
    <li><strong>Continuous Testing -  </strong> As application code is written or updated, this practice incorporates ongoing, scheduled, and automated code testing. Such tests can help speed up the delivery of code to production. </li>    
    <li><strong>Continuous Integration (CI) - </strong>  This practice combines configuration management (CM) tools with other test and development tools to track how much code is ready for production. It involves rapid feedback between testing and development to identify and resolve code issues as quickly as possible.</li>    
    <li><strong>Continuous Delivery - </strong> This practise automates the delivery of code changes to a pre-production or staging environment after testing. A staff member can then decide to push those code changes into production.?? </li>    
    <li><strong>Continuous Deployment (CD) - </strong>  This practice, like continuous delivery, automates the release of new or changed code to production. A company using continuous deployment may release code or feature changes several times a day. Container technologies like Docker and Kubernetes can help keep your code consistent across different platforms and deployment environments, enabling continuous deployment.</li>    
    <li><strong>Continuous Monitoring - </strong>  This practice involves continuous monitoring of both the code in use and the underlying infrastructure that supports it. A feedback loop that reports bugs or issues and then returns to development.??</li>    
    <li><strong>Infrastructure as Code - </strong>  This practice can be used during various phases of DevOps to automate the provisioning of the infrastructure required for a software release. Developers add infrastructure "code" from their existing development tools. Developers could, for example, use Docker, Kubernetes, or OpenShift to create a storage volume on demand. This practice also enables operations teams to monitor environment configurations, track changes, and simplify configuration rollback.</li>    
   
  </ul>
    
</div>

<div class="cloud-public">
  <h2>What are the basic topics in DevOps technology?</h2>
  <p>
    Devops is a culture as much as it is a technology!! Devops enables us to deliver software by bringing together developers and IT operations.
  </p>  
<p>
  One can divide and conquer the Devops culture by mastering below given tools/topics. Devops can be categorized as following,
</p>

<ul>
  <li>Version Control</li>
  <li>SVN</li>
  <li>GIT</li>
  <li>Perforce</li>
  <li>Build Tools</li>
  <li>Ant</li>
  <li>Maven</li>
  <li>Gradle</li>
  <li>Continuous Integration / Continuous Deployment</li>
  <li>Jenkins</li>
  <li>Urban Code Deploy</li>
  <li>Rundeck</li>
  <li>Scripting</li>
  <li>Python</li>
  <li>Ruby</li>
  <li>Perl</li>
  <li>Javascript</li>
  <li>Cloud Technology</li>
  <li>Microsoft Azure</li>
  <li>Amazon Web Services</li>
  <li>Oracle Cloud</li>
  <li>Linux Administration</li>
  <li>Monitoring Tools</li>
  <li>Configuration Management</li>
  <li>Chef</li>
  <li>Puppet</li>
  <li>Ansible</li>
  <li>Containerization & Virtualization Concepts</li>
  <li>Docker</li>
  <li>VM Ware</li>
  <li>Virtual Box</li>
  </ul>
</div>
<div class="cloud-private">
  <h2>What are DevOps Methodology practice and process</h2>
  <p>
    There are a few common DevOps methods that organizations can use to speed and improve development and product releases. They take the form of software development methodologies and practices. Among the most popular ones are Scrum, Kanban, and Agile:
  </p>  


  
</div>
<div class="cloud-hybrid">
  <h3>Scrum.</h3>
  <p>
    Scrum defines how team members should collaborate to speed development and QA projects. Scrum practices include key terminology and workflows (sprints, timelines, Daily Scrum [meeting]), as well as designated roles (Scrum Master, Product Owner).
</p>  

  
</div>
<div class="cloud-community">
  <h3>Kanban</h3>
  <p>
    Kanban grew out of efficiencies gained at the Toyota manufacturing plant. Kanban requires that the status of software project work in progress (WIP) be tracked on a Kanban board.
</p>    
</div>
<div class="cloud-community">
  <h3>Agile</h3>
  <p>
    Agile software development methods of the past continue to have a strong influence on DevOps tools and practices. Scrum and Kanban are two DevOps methods that incorporate elements of agile programming. Some agile practices include being more responsive to changing needs and requirements, documenting requirements as user stories, holding daily meetings, and incorporating ongoing customer feedback. Agile also advocates for shorter software development life cycles compared to traditional "waterfall" development methods.
</p>    
</div>


</div>

<div class="container">
  <div class="cloud-types">
    <h2 class="mt-2">What is DevOps Toolchain, Clearly Explained for Beginners</h2>
    <h3>Plan</h3>
    <p>This phase helps in defining the business value and requirements. Examples of tools include Jira or Git to help track down known issues and run project management.</p>
  
    <h3>Code</h3>
    <p>This stage includes software design and software code creation. Examples of tools: GitHub, GitLab, Bitbucket or Stash.</p>
  
    <h3>Build</h3>
    <p>During this phase, you manage software builds and releases, as well as use automated tools to build and package code for future production releases. It uses source code repositories or package repositories, which "package" the infrastructure required for product release. Docker, Ansible, Puppet, Chef, Gradle, Maven, and JFrog Artifactory are some examples of tools.</p>
  
    <h3>Test</h3>
    <p>This phase includes continuous testing (manual or automated) to ensure optimal code quality. JUnit, Codeception, Selenium, Vagrant, TestNG and BlazeMeter are some examples of tools.</p>
  
    <h3>Deploy</h3>
    <p>This phase may include tools that help manage, coordinate, schedule, and automate product releases to production. Puppet, Chef, Ansible, Jenkins, Kubernetes, OpenShift, OpenStack, Docker, and Jira are some examples of tools.</p>
  
    <h3>Operate</h3>
    <p>This phase oversees software production. Ansible, Puppet, PowerShell, Chef, Salt, and Otter are some examples.</p>
  
    <h3>Monitor</h3>
    <p>This phase requires identifying and gathering information about issues with a specific software release in production. Examples include New Relic, Datadog, Grafana, Wireshark, Splunk, Nagios, and Slack.</p>
  
  
  </div>
</div>






</div>

</div>
<?php include('../footer.php') ?>

<script src="../lib/w3schools_footer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>
