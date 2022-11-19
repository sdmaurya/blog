<?php include('header.php') ?>

<div class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert" style="border-radius: unset;">
  <p class="mb-0"><strong>Thank you for contacting <b class="alert">DigitalCoTech..</b><strong></p>
</div>

    <!-- <h1>Contact Us !</h1>
    <h2 style="text-align: center;">Welcome to <span id="W_Name"> digitalcotech</span>!</h2>

    <p style="font-size: 17px;">Please email us if you have any queries about the site, advertising, or anything else.</p>

    <div style="text-align: center;">

      <img alt="contact-us" height="87" src="https://lh3.googleusercontent.com/-BA7qy8h_v1g/YLVCWDNZdCI/AAAAAAAAALw/rsHNJWX0BK4P5CuB0ymG8QkJ9A9E8KchgCLcBGAsYHQ/w320-h87/email-us-1805514__480.webp" width="320">

      <p style="margin-left: 25%;"><i class="fas fa-envelope-open-text" style="color: #2c3e50; font-size: 20px;"></i> <b><i> <span id="W_Email"><a href="mailto:support@hotmail.com">support@hotmail.com</a></span></i></b><br>

        <i class="fab fa-whatsapp-square" style="color: #3edc81; font-size: 20px;"></i> <b><span id="W_whatsapp"><a href="tel:4554455445">4554455445</a></span></b><br></p>    

      <h3 style="color: #3e005d;">We will revert you as soon as possible...!</h3>
      <p style="color: #3e005d; text-align: center;">Thank you for contacting us! <br><b>Have a great day</b></p>
      <span style="font-size: 1px; opacity: 0;">This page is generated with the help of <a href="https://www.blogearns.com/2021/06/free-contact-us-page-generator.html" style="color: inherit;">Contact Us Page Generator</a></span>
    </div> -->
  
    
<div class="container  p-5 text-center "> 
  <div class="row h-100" >
    
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4 m-0 todo-form" style="margin-top: -2%;">
        <div class="card mx-auto" style="border-radius: 1rem;" id="cardcomm">
        <div class="row g-0">
            <div class="col-md-12  d-flex align-items-center">
                <div class="card-body p-4 text-black">
                    <form name="data" class="Scrumlog" action="" method="POST" id="addproject" enctype="multipart/form-data">              
                
                   <div class="alert alert-warning alert-dismissible fade show text-center" role="alert" style="border-radius: unset;">
                    <p class="mb-0"><strong>Contact DigitalCoTech<strong></p>
                  </div>
                   <div class="row">
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="yname">Your Name</label>
                                <input type="text" name="yname" class="form-control" required placeholder="Your Name">   
                                <div class="error" id="errname"></div>                               
                            </div>
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="yemail">Your Email</label>
                                <input type="email" name="yemail" class="form-control" required  placeholder="Your Email">       
                                <div class="error" id="erremail"></div>                              
                            </div>
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="ysubject">Subject</label>                                                                                           
                                 <textarea type="text" rows="3" class="form-control" required name="ysubject" placeholder="Subject"></textarea>
                                 <div class="error" id="errsubject"></div>   
                                </div>
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="ysubject">Message</label>                                                                                           
                                 <textarea type="text" rows="5" class="form-control" required name="message" placeholder="Message"></textarea>
                                 <div class="error" id="errmessage"></div>   
                                </div>
                        </div>
                      
                               
                        <div class="text-center">
                            <input name="submit" type="submit" id="Submit" value="Send Message"  class="btn btn-primary m-2" >                           
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>

<style>

</style>