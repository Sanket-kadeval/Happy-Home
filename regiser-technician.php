<?php include 'header.php';
    // session_start();
    if(!isset($_SESSION['firstname'])){
        header("Location:login.php");
    }
?>
<section class="pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2  col-sm-1 col-1"></div>
            <div class="col-xl-6 col-lg-8  col-sm-10 col-10">
                <div class="warning my-2">
                    <p><span class="pr-2"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span> If you able to work done with Ethical and Honesty, then 
                        register. Otherwise not register.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-sm-1 col-1"></div>
        </div>
    </div>
    <div class="container partner ">
        <div class="row ">
            <div class="col-md-12 heading">
            <h1>  <a class="navbar-brand font-weight-bold" href="#" style="font-size: 30px;color:white;">
                    <i class="fa fa-home pr-3 " style="font-size: 50px; color:white;" aria-hidden="true"></i>Happy Home</a>
                </h1>
                <!-- <hr style="height: 2px; background-color:black"> -->
            </div>
            <div class="col-md-12 pt-3 text-center">
                <h4 class="font-weight-bold text-success">BECOME OUR SERVICE PARTNER</h4>
                <hr>
            </div>
            <div class="col-md-12">
                
                   <form action="techinican_register.php" method="POST" enctype="multipart/form-data" onsubmit = "return validateForm()"> 
                   <div class="row form" > 
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Name:</label>
                            <input type="text" name="name" placeholder= "Enter Name" value="<?php echo $_SESSION['firstname'] . ' ' .$_SESSION['lastname']; ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Mobile Number:</label>
                            <input type="tel" name="mobileno" id="mobileno" placeholder="Enter Mobile No" value="<?php echo $_SESSION['mobileno']; ?>" class="form-control" required>
                            <span id="mobilenoerror" style="color: red; font-size : 13px;"></span>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Email:</label>
                            <input type="email" name="email" placeholder="Enter Email Address" value="<?php echo $_SESSION['email']; ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="" class="pr-4">State Name:</label>
                            <input type="text" name="state" placeholder="Enter State" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">City Name:</label>
                            <input type="text" name="city" placeholder="Enter City " class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Address:</label>
                            <input type="text" name="address" placeholder="Enter Address" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Which Service You Provide:</label>
                            <select name="service" id="" class="form-control" required>
                                <option value="" selected disabled>Select your service</option>
                                <option value="carpentry">Carpentry</option>
                                <option value="electrician">Electrician</option>
                                <option value="furniture installation">Furniture Installation</option>
                                <option value="furniture repair">Furniture Repair</option>
                                <option value="plumber">Plumber</option>
                                <option value="sofa repair">Sofa Repair</option>
                                <option value="wardrobe">Wardrobe</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Enter your Pincode:</label>
                            <input type="text" name="pincode" id="pincode" placeholder="Enter Pincode" class="form-control" >
                            <span id="pincodeerror" style="color: red; font-size : 13px;"></span>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Upload ID Proof:</label>
                            <input type="file" name="file" placeholder="file" class="form-control" required>
                        </div>
                        
                   
                        <div class="col-md-6 form-group pt-4">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary px-5 py-2 float-right">
                        </div>
                        
                        </div>
                    </form>
                   
            </div>
        </div>
    </div>

</section>
<?php include 'footer.php' ?>

<script>
    function validateForm(){
        const mobileno = document.getElementById("mobileno").value;
        const pincode = document.getElementById("pincode").value;

        if(isNaN(mobileno)){
            mobilenoerror.innerHTML = "Mobile no always digit so please type a digit"
            document.getElementById("mobileno").style.border="1px solid red";
            return false;
        }
        const mo_length = mobileno.length;
        if(mo_length != 10){
            mobilenoerror.innerHTML = "Mobile no must be 10 digit.."
            document.getElementById("mobileno").style.border="1px solid red";
            return false;
        }
         if(isNaN(pincode)){
            pincodeerror.innerHTML = "Pincode no always digit so please type a digit"
            document.getElementById("pincode").style.border="1px solid red";
            return false;
        }
        if(pincode == ""){
            pincodeerror.innerHTML = "Pincode No is required!"
            document.getElementById("pincode").style.border="1px solid red";
            return false;
        }
        const pin_length = pincode.length;
        if(pin_length != 6){
            pincodeerror.innerHTML = "Pincode no must be 6 digit..";
            document.getElementById("pincode").style.border="1px solid red";
            return false;
        }
        
    }
</script>