
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.w3schools.com/html/default.asp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 00:04:26 GMT -->
<head>
<title>HTML Tutorial</title>
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
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-3855518-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>

<script type='text/javascript'>
var k42 = false;
var googletag = googletag || {}; googletag.cmd = googletag.cmd || [];

(function() {
  var gads = document.createElement('script');
  gads.async = true;
  gads.type = 'text/javascript';
  gads.src = '../../www.googletagservices.com/tag/js/gpt.js';
  var node = document.getElementsByTagName('script')[0];
  node.parentNode.insertBefore(gads, node);
})();

var snhb = snhb || {}; snhb.queue = snhb.queue || [];
snhb.options = {
               logOutputEnabled : false,
               autoStartAuction: false,
               gdpr: {
                     mainGeo: "us",
                     reconsiderationAppealIntervalSeconds: 0
                     }
               };

// GPT slots
var gptAdSlots = [];
googletag.cmd.push(function() {
  googletag.pubads().disableInitialLoad();               
  googletag.pubads().enableSingleRequest();
  var leaderMapping = googletag.sizeMapping().
    // Mobile ad
    addSize([0, 0], [320, 50]). 
    // Vertical Tablet ad
    addSize([512, 0], [468, 60]). 
    // Horizontal Tablet
    addSize([812, 0], [728, 90]).
    // Small Desktop
    addSize([1025, 0], [468, 60]).
    // Normal Desktop
    addSize([1182, 0], [728, 90]).
    // Large Desktop and bigger ad
    addSize([1457, 0], [[728, 90], [970, 90]]).build();
  gptAdSlots[0] = googletag.defineSlot('/16833175/MainLeaderboard', [[728, 90], [970, 90]], 'div-gpt-ad-1422003450156-2').
    defineSizeMapping(leaderMapping).addService(googletag.pubads());
  var skyMapping = googletag.sizeMapping().
    // Mobile ad
    addSize([0, 0], [320, 50]). 
    // Tablet ad
    addSize([983, 0], [120, 600]). 
    // Desktop
    addSize([1143, 0], [160, 600]).   
    // Large Desktop
    addSize([1683, 0], [[160, 600], [300, 600], [300, 1050]]).build();
  gptAdSlots[1] = googletag.defineSlot('/16833175/WideSkyScraper', [[160, 600], [300, 600], [300, 1050]], 'div-gpt-ad-1422003450156-5').
    defineSizeMapping(skyMapping).addService(googletag.pubads());
  var stickyMapping = googletag.sizeMapping().
    // Mobile ad
    addSize([0, 0], []). 
    // Tablet ad
    addSize([983, 0], [120, 600]). 
    // Desktop
    addSize([1143, 0], [160, 600]).   
    // Large Desktop
    addSize([1683, 0], [[160, 600], [300, 600], [300, 250]]).build();
  gptAdSlots[4] = googletag.defineSlot('/16833175/StickySkyScraper', [[300, 600], [120, 600], [300, 250], [160, 600]], 'div-gpt-ad-1472547360578-0').
    defineSizeMapping(stickyMapping).addService(googletag.pubads());
  var mcontMapping = googletag.sizeMapping().
    // Mobile ad
    addSize([0, 0], [[300, 250], [336, 280], [320, 50]]). 
    // Vertical Tablet ad
    addSize([522, 0], [[300, 250], [336, 280], [468, 60]]). 
    // Horizontal Tablet
    addSize([782, 0], [728, 90]).
    // Small Desktop
    addSize([1025, 0], [[300, 250], [336, 280], [468, 60]]).
    // Normal Desktop
    addSize([1167, 0], [728, 90]).
    // Large Desktop and bigger ad
    addSize([1472, 0], [[728, 90], [970, 90], [970, 250]]).build();
  gptAdSlots[5] = googletag.defineSlot('/16833175/MidContent', [[300, 250], [336, 280]], 'div-gpt-ad-1493883843099-0').
    defineSizeMapping(mcontMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
  var bmrMapping = googletag.sizeMapping().
    // Smaller
    addSize([0, 0], [[300, 250], [336, 280]]). 
    // Large Desktop
    addSize([1272, 0], [[300, 250], [336, 280], [970, 250]]).build();
    gptAdSlots[2] = googletag.defineSlot('/16833175/BottomMediumRectangle', [[300, 250], [336, 280], [970, 250]], 'div-gpt-ad-1422003450156-0').
    defineSizeMapping(bmrMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
  var rbmrMapping = googletag.sizeMapping().
    // Smaller
    addSize([0, 0], []). 
    // Large Desktop
    addSize([1007, 0], [[300, 250], [336, 280]]).build();
  gptAdSlots[3] = googletag.defineSlot('/16833175/RightBottomMediumRectangle', [[300, 250], [336, 280]], 'div-gpt-ad-1422003450156-3').
    defineSizeMapping(rbmrMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
  googletag.pubads().setTargeting("content",(function () {
    var folder = location.pathname;
    folder = folder.replace("../index.html", "");
    folder = folder.substr(0, folder.indexOf("../index.html"));
    return folder;
  })());
});  

</script>
<script src="../../static.h-bid.com/sncmp/sncmp_stub.min.js" type="text/javascript"></script>
<script>
			window.__cmp('setLogo', "../images/w3schoolscom_gray.gif", function(result){
	       		snhb.console.log("Logo set");
	    	});
			window.__cmp('setPrivacyPolicy', "../about/about_privacy.html", function(result){
	       		snhb.console.log("Privacy policy URI set");
	    	});
			window.__cmp('enableBanner', null, function(result) {
	       		snhb.console.log("Banner mode enabled");
			});
			__cmp('enablePopupDismissable', null, function(result) {});
			window.__cmp('disableBannerPrivacyPolicyButton', null, function(result) {
	       		snhb.console.log("Banner mode without privacy policy button enabled");
			});
      window.__cmp('setTranslationFiles', { path: '//www.w3schools.com/lib/', locales: ["en"] }, function(result) {});
      __cmp('setCSS', '../lib/cmp.css', function(result){} );
</script>
<script async type="text/javascript" src="../../static.h-bid.com/w3schools.com/20190327/snhb-w3schools.com.min8a4b.js?20190327"></script>
<script>
  snhb.queue.push(function(){

    snhb.addAdditionalAdSlotsToRefresh(gptAdSlots);

  });
</script>
<script type='text/javascript'>
var stickyadstatus = "";
function fix_stickyad() {
  document.getElementById("stickypos").style.position = "sticky";
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
      document.getElementById("stickypos").style.position = "sticky";

    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
      document.getElementById("stickypos").style.position = "static";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
      document.getElementById("stickypos").style.position = "static";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
        document.getElementById("stickypos").style.position = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>
</head>
<body>
<div class='w3-container top'>
  <a class='w3schools-logo notranslate' href='../index.html'>w3schools<span class='dotcom'>.com</span></a>
  <div class='w3-right w3-hide-small w3-wide toptext' style="font-family:'Segoe UI',Arial,sans-serif">THE WORLD'S LARGEST WEB DEVELOPER SITE</div>
</div>

<div style='display:none;position:absolute;z-index:4;right:52px;height:44px;background-color:#5f5f5f;letter-spacing:normal;' id='googleSearch'>
  <div class='gcse-search'></div>
</div>
<div style='display:none;position:absolute;z-index:3;right:111px;height:44px;background-color:#5f5f5f;text-align:right;padding-top:9px;' id='google_translate_element'></div>

<div class='w3-card-2 topnav notranslate' id='topnav'>
  <div style="overflow:auto;">
    <div class="w3-bar w3-left bg_nav_bar" style="width:100%;overflow:hidden;height:44px">
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
<h2 class="left"><span class="left_h2">Blockchain </span> Tutorial</h2>
<a target="_top" href="http://myblog.com/blockchain/">Blockchain Introduction</a>
<a target="_top" href="cryptocurrency_intro.php" title="What is cryptocurrency?">What is Cryptocurrency</a>
<a target="_top" href="git_command.php" title="What is Bitcoin">What is Bitcoin</a>


      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
  
<h1>Blockchain<span class="color_h1"> Tutorial</span></h1>
<hr>


<h2>What is Blockchain</h2>
<p>A blockchain is a distributed database or ledger that is shared between nodes on a computer network. As a database, a blockchain stores information electronically in a digital format. Blockchains are best known for their crucial role in cryptocurrency systems, such as Bitcoin, in keeping a secure and decentralized record of transactions.</p>
<p>Blockchain is a continuously growing ledger that keeps a permanent record of all transactions in a secure, chronologically, and immutable manner.</p>

<h2>Who makes use of blockchain?</h2>
<p>Blockchain technology has the potential to be applied in a variety of fields. Blockchains are most commonly used as a distributed ledger for cryptocurrencies. It shows great promise in a wide range of business applications, such as banking, finance, government, healthcare, insurance, media and entertainment, retail, etc. </p>



<h2 title="Why do we need blockchain?">Why do we need blockchain?</h2>
<p>Here are some of the reasons why blockchain technology has grown in popularity.</p>

<p><strong>Flexibility : </strong>   Blockchain architecture is often replicated. In the event of a massive attack on the system, most nodes continue to run the chain.</p>
<p><strong>Time Savings : </strong>  In the financial industry, blockchain can play an important role by allowing for faster trade settlement as it eliminates the need for lengthy verification, settlement and clearance processes as all stakeholders need to reach a consensus. A version is accessed. Data on a shared ledger.</p>

<p><strong>Reliability : </strong>  Blockchain validates and verifies the identity of the parties involved. It eliminates duplicate records, reduces rates, and speeds up transactions.
</p>

<p><strong>Immutable Transactions : </strong>  Since blockchain registers transactions chronologically, it ensures immutability of all transactions, which means that once a new block is added to the chain of ledgers, So it cannot be removed or changed.
</p>
<p><strong>Fraud Prevention : </strong>  Shared information and consensus concepts help prevent potential losses from fraud or embezzlement. Blockchain as a monitoring mechanism reduces costs in logistics-based industries.
</p>
<p><strong>Transparency : </strong>  All changes made to public blockchains are visible to the public. This improves transparency, and all transactions are final.
</p>
<p><strong>Decentralization : </strong>  There are rules that govern how each node exchanges blockchain information.</p>




<h2 title="Blockchain variants?">Blockchain variants?</h2>

<ul>
  <li> Public Blockchain</li>
  <li>Private Blockchain</li>
  <li>Consortium Blockchain</li>
</ul>

<div class="container">
  <h3 title="What is Public Blockchain">Public Blockchain</h3>
  <p>Ledgers on this type of blockchain are visible to everyone on the internet. It enables anybody to check and add a block of transactions to the blockchain. People are encouraged to join public networks, which are also free to use. A public blockchain network is accessible to anyone.
  </p>
  <h3 title="What is Private Blockchain">Private Blockchain</h3>
  <p>A private blockchain exists within a single organization. It only allows certain members of the organization to verify and add blocks of transactions. However, it is generally allowed to be viewed by anyone on the Internet.
  </p>
  <h3 title="What is Consortium Blockchain">Consortium Blockchain</h3>
  <p>A consortium blockchain is a semi-decentralized network in which membership is not granted to a single entity. Instead, it is distributed to a group of people known as "nodes." It provides network security that public chains do not provide. It also gives you more control, faster processing, and makes it more efficient and secure in many ways.
  </p>

  
</div>

<div class="container mt-2">
  <div class="digital-link mt-2">
    <h4>You Might Like:</h4>
    <div><a href="bitcoin_intro.php" title="What is Bitcoin">What is Bitcoin</a></div>
    <div> <a href="cryptocurrency_intro.php" title="What is cryptocurrency">What is cryptocurrency</a></div>

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
