<?php include('header.php') ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<div class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert" style="border-radius: unset;">
  <p class="mb-0"><strong>Thank you for contacting <b class="alert">DigitalCoTech..</b><strong></p>
</div>

<header>
        <div class="p-5 text-center bg-image" style="
            background-image: url('img/bg.png');
            height: 450px;
          ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h2 class="mb-3 mt-3" style="background-color: rgba(0, 0, 0, 0.6);" >Learn to Code</h2>
                        <h4 class="mb-3">Master the Skills to Drive your Career.</h4>
                       
                         <input class="form-control mr-sm-2 mb-3" type="search" id="tags" placeholder="Aws,Agile..." aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" id="digital-search" onClick="myFunction()" type="submit">Search</button>
                        
                        <a href=""><h3 class="mb-3 mt-3 text-warning">Not Sure Where To Begin?</h3></a>
                </div>
            </div>
          </div>
    </header>
    
<div class="container  p-5 text-center ">
  <h1 class="mb-3" style="background-color: rgba(0, 0, 0, 0.3);">Our Latest Courses</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="card" >
        <img src="img/html.png"  class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">HTML</h4>
          <p class="card-text">Mark-up language for hypertext (a system used to mark text for World Wide Web pages in order to obtain colours, style, pictures, etc.)</p>
          <a href="/html" class="">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" >
      <img src="img/linux.png"  class="card-img-top" alt="...">
        <div class="card-body">
        <h4 class="card-title">LINUX</h4>
          <p class="card-text">Linux is an operating system, just like Windows, iOS, and Mac OS. In fact, Linux powers one of the most widely used platforms on the globe, Android.</p>
          <a href="/linux" class="">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" >
      <img src="img/d.jpg"  class="card-img-top" alt="...">
        <div class="card-body">
        <h4 class="card-title">DEVOPS</h4>
          <p class="card-text">The use of DevOps boosts an organization's capacity to provide applications and services at a rapid pace by combining several...</p>
          <a href="/clouds/devops.php" class="">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container2 container  p-5 pb-0 text-center ">
  <div class="row">
    <div class="col-md-4">
      <div class="card" >
      <img src="img/aws.png"  class="card-img-top" alt="...">
        <div class="card-body">
        <h4 class="card-title">AWS</h4>
          <p class="card-text">The most complete and widely used cloud platform in the world, Amazon Web Services (AWS), provides over 200 fully functional services from data...</p>
          <a href="/aws" class="">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" >
      <img src="img/block.png"  class="card-img-top" alt="...">
        <div class="card-body">
        <h4 class="card-title text-uppercase">Blockchain</h4>
          <p class="card-text">Blockchain is a decentralised, unchangeable database that streamlines asset tracking and transaction recording inside a business network.</p>
          <a href="/blockchain" class="">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" >
      <img src="img/agile.jpg"  class="card-img-top" alt="...">
        <div class="card-body">
        <h4 class="card-title">AGILE</h4>
          <p class="card-text">Agile uses an iterative approach to project management and software development to enable teams to deliver value to their clients more...</p>
          <a href="/agile" class="">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container  p-5 pt-0 pb-0 feat-course">
  <div class="row">
    <div class="col-md-12">
      <span class="sub-title text-left mb-2 h4 fw-bold">Featured Courses</span>
      <h2 class="section-title">      
        Pick a Course to Get Started
           </h2>         
    </div>
  </div>
       </div>
       



<div class="container   p-5 text-center">
  <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
        <div class="single-course-category">
           <div class="course-content">
              <h3 class="course-category-title"> <a href="/docker">Docker</a>  </h3>
           </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
        <div class="single-course-category">
           <div class="course-content">
              <h3 class="course-category-title"> <a href="/linux">Linux</a>  </h3>
           </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
        <div class="single-course-category">
           <div class="course-content">
              <h3 class="course-category-title"> <a href="/git">GIT</a>  </h3>
           </div>
        </div>
     </div>    
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="single-course-category">
         <div class="course-content">
            <h3 class="course-category-title"> <a href="/api">API</a>  </h3>
         </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="single-course-category">
         <div class="course-content">
            <h3 class="course-category-title"> <a href="/json">JSON</a>  </h3>
         </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="single-course-category">
         <div class="course-content">
            <h3 class="course-category-title"> <a href="/html">Html</a>  </h3>
         </div>
      </div>
   </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="single-course-category">
         <div class="course-content">
            <h3 class="course-category-title"> <a href="/blockchain">Blockchain</a>  </h3>
         </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="single-course-category">
         <div class="course-content">
            <h3 class="course-category-title"> <a href="/clouds">Cloud Computing</a>  </h3>
         </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="single-course-category">
         <div class="course-content">
            <h3 class="course-category-title"> <a href="/aws">AWS</a>  </h3>
         </div>
      </div>
   </div>
  </div>
</div>



<style>
 .single-course-category {
      text-align: left;
      text-decoration: none;
      padding: 28px;
      border-style: solid;
      border-width: 2px;
      color: #333;
      border-color: #83c1b2;
      border-radius: 15px;
  }
 .single-course-category:hover {
    background-color: #0eb582;
    color: black !important;
}
  .ts-course-category .single-course-category {
      padding: 20px;
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -ms-border-radius: 5px;
      overflow: hidden;
      border: 1px dashed #e8e8e8;
      transition: all .4s ease;
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      -ms-transition: all .4s ease;
      margin-top: 15px;
      margin-bottom: 15px;
      background: #fff;
  }
  .elementor *, .elementor :after, .elementor :before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
  }
  .course-category-title a{
    color: #333;
    text-decoration: none;
  }
  
  .course-category-title a:hover{
    text-decoration: none;
    color: #333;
  }
  
  .ts-course-category .single-course-category .course-category-title a {
      color: #333;
      text-decoration: none;
  }
 
  .card-text{
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  text-align: justify;
    overflow: hidden;
    text-overflow: ellipsis; 

  }
  </style>


<script src="../lib/search.js"></script>

<?php include('footer.php') ?>

