<?php
session_start();
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
   
    $filename="images/".$_SESSION['name'].".jpg";
    if(file_exists($filename))
    {
        
            unlink($filename);
    }
//     echo "dfdf";
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_SESSION['name'].".jpg";
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img src="<?php echo $targetPath; ?>" width="200px" height="200px" class="upload-preview" />
<?php

}
}
}
?>