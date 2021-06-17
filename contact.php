<?php include 'header.php' ?>
<section class="contact-us">
    <div class="container contact-me">
        <div class="row ">
            <div class="col-md-12 heading mt-3 mr-3">
            <h1 class="">  <a class="navbar-brand font-weight-bold" href="#" style="font-size: 30px;color:white;">
                    <i class="fa fa-home pr-3 " style="font-size: 50px; color:white" aria-hidden="true"></i>Happy Home</a>
                </h1>
                <!-- <hr style="height: 2px; background-color:black"> -->
            </div>
            
            <div class="col-md-12 pt-3 text-center">
                <div class=" ">
                    <h4 class="font-weight-bold text-success"><span class="pr-2 pt-2"><i class="fa fa-phone" aria-hidden="true"></i></span> CONTACT US</h4>
                </div>
                <hr>
            </div>
            <hr>
        
            <div class="col-md-6">
                <div class="form">
                    <form action="contact-us.php" class="" method="POST">
                        <div class="form-group my-2">
                            <label for="">Name :</label>
                            <input type="text" name="name" class="form-control p-3" placeholder="Enter Name">
                        </div>
                        <div class="form-group my-2">
                            <label for="">Email Address:</label>
                            <input type="email" name="email" class="form-control p-3" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group my-2">
                            <label for="">Mobile No :</label>
                            <input type="tel"  name ="mobileno" class="form-control p-3" placeholder="Enter Mobile No">
                        </div>
                        <div class="form-group my-2">
                            <label for="">City :</label>
                            <input type="text" name="city" class="form-control p-3" placeholder="Enter Your City">
                        </div>
                        <div class="form-group my-2">
                            <label for="">Message :</label>
                            <textarea name="message"  cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group my-2 float-right">
                            <input type="submit" class="btn  p-2 px-5 " name="submit" value="Submit" ></input>
                        </div>
                    </form>
            </div>
            </div>
            <div class="col-md-6">
                <div class="info ">
                    <p class="py-3 font-weight-bold">Do not hesitate to contact us, if you want to know more about Our servic.
                        Read our Privacy Policy for details on how your information may be used.</p>
                </div>
                <div class="contact-img d-md-block d-none ">
                    <img src="image/contactus.jpg" alt="contact" class="img-fluid">
                </div>
            </div>
        
    </div>
</section>
<?php include 'footer.php' ?>

