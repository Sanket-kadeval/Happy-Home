<?php session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'config.php';
$customer_email_id = $_POST['email'];
$customer_password = $_POST['password'];

$sql = "SELECT * FROM customers WHERE customer_email = '$customer_email_id' AND customers_password = '$customer_password' ";
$result = mysqli_query($conn , $sql) or die("Query fail");
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['id'] = $row['customer_id'];
        $_SESSION['firstname'] = $row['customers_firstname'];
        $_SESSION['lastname'] = $row['customers_lastname'];
        $_SESSION['email'] = $row['customer_email'];
        $_SESSION['mobileno'] = $row['customers_mobile_number'];
       
        header("Location:index.php");	
    
    }
}else{
    header("Location:login.php");
    $_SESSION['error'] = "email and password are not match!!";
    mysqli_close($conn);
}
}
?>