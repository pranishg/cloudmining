<?php 

include_once './dbconfig.php';
if(isset($_POST['email']))
{
//    echo "dfdf";
       $email= trim($_POST['email']);
       $sql = "SELECT * FROM user_details WHERE email = '$email'";
       $query = mysqli_query($conn, $sql);
       $result = mysqli_num_rows($query);
       echo $result;
}



?>