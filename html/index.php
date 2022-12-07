
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
      <a href='../default.html' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
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
    <h2 class="left"><span class="left_h2">HTML</span> Tutorial</h2>
<a target="_top" href="https://digitalcotech.com/docker/">HTML Introduction</a>
<a target="_top" href="html_editor.php" title="HTML Editors">HTML Editors</a>
<a target="_top" href="html_basic.php" title="HTML Basic">HTML Basic</a>
<a target="_top" href="html_elements.php" title="HTML Elements">HTML Elements</a>
<a target="_top" href="html_attributes.php" title="HTML Attributes">HTML Attributes</a>
<a target="_top" href="html_heading.php" title="HTML Headings">HTML Headings</a>
<a target="_top" href="html_paragraph.php" title="HTML Paragraphs">HTML Paragraphs</a>


      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12 mt-2' id='main'>
<h1 title="Docker Tutorial: A Step by Step Tutorial for Beginners and Advance">HTML Tutorial: A Step by Step Tutorial for Beginners and Advance</span></h1>


<hr>

<div class="">
  <h2>Introduction to HTML</h2>
<p>The preferred markup language for building Web pages is HTML.</p>
 
</div>
<div class="">
  <h2>What is HTML?</h2>
<p>
  <ul>
    <li>
    Hyper Text Markup Language is what HTML stands for.
    </li>
    <li>
    The preferred markup language for building Web pages is HTML.
    </li>
    <li>
    HTML explains how a Web page is put together.
    </li>
    <li>
    There are several different elements in HTML.
    </li>
    <li>
    HTML components instruct browsers on how to display content.
    </li>
    <li>
    The labels "this is a heading," "this is a paragraph," "this is a link," etc., are provided by HTML elements.
    </li>
  </ul>
</p>
</div>

<div class="">
  <h2 title="What is a Git repository">Example Explained</h2>
  <p>
  <ul>
    <li>
    This document is an HTML5 document, as indicated by the <code class="">&lt;!DOCTYPE html&gt;</code> declaration.
    </li>
    <li>
    The root element of an HTML page is the <code class="">&lt;html&gt;</code> element.
    </li>
    <li>
    The HTML page's <code class="">&lt;head&gt;</code> element stores meta data about it.
    </li>
    <li>
    The HTML page's title (which appears in the browser's title bar or in the page's tab) is specified by the <code class="">&lt;title&gt;</code> element
    </li>
    <li>
    A document's body is defined by the <code class="">&lt;body&gt;</code> element, which also serves as a container for all of the elements that can be seen, including headings, paragraphs, images, hyperlinks, tables, lists, and so on.
    </li>
    <li>
    A huge heading is defined using the <code class="">&lt;h1&gt;</code> element.
    </li>
    <li>
    The paragraph is defined by the <code class="">&lt;p&gt;</code> element.
    </li>
  </ul>
</p>
</div>

<div class="">
  <h2 title="What is a Git repository">What is an HTML Element?</h2>
<p>An HTML element is defined by a start tag, some content, and an end tag:</p>
<p>
<span class="">
<span class="spes_tag">&lt;</span>tagname<span class="spes_tag">&gt;</span></span><b>Content goes here...</b><span class="">
<span class="spes_tag">&lt;</span>/tagname<span class="spes_tag">&gt;</span></span>
</p>
<p>
The start tag and the end tag together make up the HTML <b>element</b>.
</p>
<p>
<span class=""><span class="spes_tag">&lt;<span class="">h1</span>&gt;</span></span>My 
  First Heading<span class=""><span class="spes_tag">&lt;</span>/h1<span class="spes_tag">&gt;</span></span>
</p>
<p>
<span class=""><span class="spes_tag">&lt;</span>p<span class="spes_tag">&gt;</span></span>My first paragraph.<span class=""><span class="spes_tag">&lt;</span>/p<span class="spes_tag">&gt;</span></span>
</p>
<div>
<table class="ws-table-all notranslate">
<tbody><tr>
<th>Start tag</th>
<th>Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td><em>none</em></td>
<td><em>none</em></td>
</tr>
</tbody></table>
</div>
</div>

<div class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert" style="border-radius: unset;">
<p><strong>Note: </strong> Some HTML elements (like the &lt;br&gt;)
element are empty. These are referred to as empty elements. Elements with no content do not have an end tag.</p>
</div>

<div class="">
  <h2 title="What is a Git repository">Web Browsers</h2>
<p>Chrome, Edge, Firefox, and Safari are a few examples of web browsers whose primary function is to read and accurately display HTML texts.</p>
<p>Although they are not displayed themselves, HTML tags are used by browsers to determine how to display a page:
</p>
<img src="..img/h1.png" alt="">
</div>
<div class="">
  <h2 title="What is a Docker File">HTML Page Structure</h2>
<p>Here is an illustration of the structure of an HTML page:</p>
 <h5 class="mt-2 mb-1">Example</h5>
 <img src="" alt="">
 <div class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert" style="border-radius: unset;">
<p><strong>Note: </strong> Some HTML elements (like the &lt;br&gt;)
element are empty. These are referred to as empty elements. Elements with no content do not have an end tag.</p>
</div>
<div class="">
  <h2 title="What is a Git repository">HTML History</h2>
<p>There have been numerous HTML variants since the World Wide Web's inception, including:</p>
<div>
<table class="ws-table-all notranslate">
  <tbody><tr>
    <th>Year</th>
    <th>Version</th>
  </tr>
  <tr>
    <td>1989</td>
    <td>Tim Berners-Lee invented www</td>
  </tr>
  <tr>
    <td>1991</td>
    <td>Tim Berners-Lee invented HTML</td>
  </tr>
  <tr>
    <td>1993</td>
    <td>Dave Raggett drafted HTML+</td>
  </tr>
  <tr>
    <td>1995</td>
    <td>HTML Working Group defined HTML 2.0</td>
  </tr>
  <tr>
    <td>1997</td>
    <td>DCT Recommendation: HTML 3.2</td>
  </tr>
  <tr>
    <td>1999</td>
    <td>DCT Recommendation: HTML 4.01</td>
  </tr>
  <tr>
    <td>2000</td>
    <td>DCT Recommendation: XHTML 1.0</td>
  </tr>
  <tr>
    <td>2008</td>
    <td>WHATWG HTML5 First Public Draft</td>
  </tr>
  <tr>
    <td>2012</td>
    <td><a href="" target="_blank">WHATWG HTML5 Living Standard</a></td>
  </tr>
  <tr>
    <td>2014</td>
    <td><a href="" target="_blank">DCT Recommendation: HTML5</a></td>
  </tr>
  <tr>
    <td>2016</td>
    <td>DCT Candidate Recommendation: HTML 5.1</td>
  </tr>
  <tr>
    <td>2017</td>
    <td><a href="" target="_blank">DCT Recommendation: HTML5.1 2nd Edition</a></td>
  </tr>
  <tr>
    <td>2017</td>
    <td><a href="" target="_blank">DCT Recommendation: HTML5.2</a></td>
  </tr>
</tbody></table>
</div>
</div>
<div class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert" style="border-radius: unset;">
<p><strong>Note: </strong>This tutorial follows the latest HTML5 standard.</p>
</div>
</div>






</div>

</div>
<?php include('../footer.php') ?>

<script src="../lib/w3schools_footer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:28 GMT -->
</html>
