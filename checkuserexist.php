<?php 

include_once './dbconfig.php';
if(isset($_POST['username']))
{
//    echo "dfdf";
       $username= trim($_POST['username']);
       $sql = "SELECT * FROM user_details WHERE username = '$username'";
       $query = mysqli_query($conn, $sql);
       $result = mysqli_num_rows($query);
       echo $result;
}



?>