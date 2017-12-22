<?php
session_start();
if(isset($_POST['password']))
{
    $var="";
include_once './dbconfig.php';
//unset($_SESSION['name']);
//unset($_SESSION['password']);

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    if ($email == '' || $password == '') {
     $var= "2";
       echo $var;
    } else {
       mysqli_select_db($conn, db_name) or die(mysqli_error($conn));
       $password=base64_encode($password);
        $sql = "SELECT * FROM user_details WHERE email = '$email' AND Password ='$password'";
        $query = mysqli_query($conn, $sql);
       $result = mysqli_num_rows($query);
        if ($result!="0") {
            
          while( $row = mysqli_fetch_assoc($query)){
         
//        echo $row['username'];
            $_SESSION['name'] = $row['username'];
            $_SESSION['password'] =$row['password'];
            $var= "1";
              echo $var;
//            header("Location: PANEL/public/dashboard.html");
            }
        } else {
           $var= "0";
           echo $var;
//            echo "dfdf";
//          echo '<script language="javascript">';
//echo 'alert("Email and Password not match")';
//echo '</script>';
//die();
        }
    }
//    echo $var;
}  
    

?>