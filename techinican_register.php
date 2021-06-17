<?php
   include 'config.php';
if(isset($_POST['submit'])){
 
    $technician_name = $_POST['name'];
    $technician_email = $_POST['email'];
    $technician_mobilno = $_POST['mobileno'];
    $technician_state = $_POST['state'];
    $technician_city = $_POST['city'];
    $technician_address = $_POST['address'];
    $technician_pincode = $_POST['pincode'];
    $file = $_FILES['file'];
    $technician_service = $_POST['service'];

    // for image
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = 'uploadImage/'.$filename;
        move_uploaded_file($filepath, $destfile);
    }
    // // $sql = "SELECT technician_email FROM technician_details WHERE technician_email = '$technician_email'";
    // // $num = mysqli_num_rows($conn->query($sql));
    // // if($num>0){
    // //     echo "<script>alert(Already registered emailid)</script>";  
    // // }else{
    $sql = "INSERT INTO techniciandetails(technician_name,technician_email,technician_phonenumber,technician_address,technician_city, technician_state,technician_pincode,technician_service,id_proof) 
                VALUES('$technician_name', '$technician_email','$technician_mobilno','$technician_address','$technician_city','$technician_state', '$technician_pincode','$technician_service', '$destfile')";
    if(mysqli_query($conn, $sql)){
        header("Location:index.php");
    }else{
        echo 'rocord id not added' . mysqli_error($conn);
    }

  
}else{
    echo "No click";
}

?>