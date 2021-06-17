<?php 
session_start();
if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost","root","","mydb");
    if (!$conn){
        echo "Connection not created..";
    }else{
        echo "Connection successfully..";
    }
    $customer_id = $_SESSION['id'];
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $servicename = $_POST['servicename'];
    // echo $serviceName;
    $date = date('y-m-d', strtotime($_POST['date']));
    $time = $_POST['time'];
    $currentDate = date('y-m-d');

    $sql = "INSERT INTO orders(customer_id, customer_name, customer_email, customer_mobileno,customer_city, customer_address, 
    customer_pincode, service_name, creation_date, date, time ) VALUES( '$customer_id','$name','$email','$mobileno',
    '$city','$address','$pincode','$servicename' ,'$currentDate', '$date', '$time')";

    if(mysqli_query($conn, $sql)){
        header("Location:index.php");
    
    }else{
        echo "Not added" . mysqli_error($conn);
    }
}
?>