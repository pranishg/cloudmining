<?php 

include_once './dbconfig.php';
if(isset($_POST['username']))
{
//    echo "dfdf";
   $username= trim($_POST['username']);
   $password= base64_encode(trim($_POST['password']));
   $email= trim($_POST['email']);
   $fullname= trim($_POST['fullname']);
    
         $qry = "insert into user_details(username,fullname,password,email) values('$username','$fullname','$password','$email')";
    
        $result = mysqli_query($conn, $qry);
        $result = mysqli_affected_rows($conn);
        echo $result;
}



?>