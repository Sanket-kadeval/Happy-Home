<?php include 'header.php'; 
    if(!isset($_SESSION['firstname'])){
        header("Location:login.php");
    }

include 'config.php';

    $id = $_GET['id'];
    $result = mysqli_query($conn ,"SELECT subservice_name FROM subservice WHERE subservice_id=' ". mysqli_real_escape_string($conn ,$id) ." ' ; ");

    if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
     
     
?>
<section class="py-5">

    <div class="container partner">
        <div class="row ">
            <div class="col-md-12 heading">
            <h1 class="text-white">  <a class="navbar-brand font-weight-bold" href="#" style="font-size: 30px;color:white">
                    <i class="fa fa-home pr-3 " style="font-size: 50px; color:white;" aria-hidden="true"></i>Happy Home</a>
                </h1>
                <!-- <hr style="height: 2px; background-color:black"> -->
            </div>
            <div class="col-md-12 pt-3 text-center">
                <h4 class="font-weight-bold text-success"><i class="fa fa-user-circle pr-2" aria-hidden="true"></i>CLIENTS INFORMATION</h4>
                <hr>
            </div>
            <div class="col-md-12">
                
                   <form action="book_service.php" method="post" onsubmit = "return validateForm()"> 
                   <div class="row form"> 
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Name:</label>
                            <input type="text" name="name" placeholder="Name"  value="<?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];}?>" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Mobile Number:</label>
                            <input type="tel" name="mobileno" placeholder="Mobile No" class="form-control" value="<?php if(isset($_SESSION['firstname'])){ echo $_SESSION['mobileno']; }?>"  required>
                            <span id="mobilenoerror" style="color: red; font-size : 13px;"></span>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Email:</label>
                            <input type="email" name="email" placeholder="Email Address" class="form-control" value="<?php if(isset($_SESSION['firstname'])){ echo $_SESSION['email'];} ?>"  required>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Service Name:</label>
                            <input type="text" name="servicename" placeholder="Your Service" value="<?php echo  $row['subservice_name']; }} ?>" class="form-control" >
                        </div>
                        <div class="col-md-6 form-group ">
                        
                            <label for="" class="pr-4">City Name:</label>
                            <input type="text" name="city" placeholder="City Name" class="form-control">
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Address:</label>
                            <input type="text" name="address" placeholder="Your Address" class="form-control">
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Enter your Pincode:</label>
                            <input type="text" name="pincode" placeholder="Enter Pincode" class="form-control" >
                            <span id="pincodeerror" style="color: red; font-size : 13px;"></span>
                        </div>
                       
                       
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Select Date:</label>
                            <input type="date" name="date" placeholder="Select Date" class="form-control">
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="" class="pr-4">Select Time:</label>
                            <input type="time" name="time" placeholder="Select Time" class="form-control">
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