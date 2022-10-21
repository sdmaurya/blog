<?php include('header.php') ?>

<div class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert" style="border-radius: unset;">
  <p class="mb-0"><strong>Thank you for contacting <b class="alert">DigitalCoTech..</b><strong></p>
</div>

    
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
                                <input type="text" name="yname" class="form-control" placeholder="Your Name">                                  
                            </div>
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="yemail">Your Email</label>
                                <input type="email" name="yemail" class="form-control" placeholder="Your Email">                                  
                            </div>
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="ysubject">Subject</label>                                                                                           
                                 <textarea type="text" rows="3" class="form-control" name="subject" placeholder="Subject"></textarea>
                            </div>
                            <div class="col-md-12 form-group mb-2">
                                <label class="mb-2" id="ysubject">Message</label>                                                                                           
                                 <textarea type="text" rows="5" class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                      
                               
                        <div class="text-center">
                            <input name="Submit" type="submit" id="Submit" value="Send Message"  class="btn btn-secondary m-2" >                           
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