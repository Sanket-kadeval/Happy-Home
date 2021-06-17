<?php  
if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost","root","","mydb");
    if (!$conn){
        echo "Connection not created..";
    }else{
        echo "Connection successfully..";
    }

    
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_mobileno = $_POST['mobileno'];
        $user_city = $_POST['city'];
        $user_message = $_POST['message'];

        $sql = "INSERT INTO contactus(user_name, user_email, user_mobile_no, user_city, user_message)
                VALUES('{$user_name}', '{$user_email}', '{$user_mobileno}', '{$user_city}', '{$user_message}')";

        if(mysqli_query($conn, $sql)){
            header("Location:contact.php");
        }else{
            echo "Your message not reach the admine" . mysqli_error($conn);
        }
    }
   
?>