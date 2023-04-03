<?php 
session_start();
$text = rand(10000,99999); 
$_SESSION['vercode'] = $text; 
$height = 25; 
$width = 65; 
   
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 0, 0, 0); 
$white = imagecolorallocate($image_p, 255, 255, 255); 
$font_size = 14; 

imagestring($image_p, $font_size, 5, 5, $text, $white); 
header("Content-type: image/jpeg");
imagejpeg($image_p, null, 80); 

if(($_POST['vercode']) && $_POST['vercode'] == $_SESSION['vercode']) {
	header('Location: http://localhost/Week-07/ems/correctPage.php');
} else {
    // captcha code is incorrect
    header('Location: http://localhost/Week-07/ems/errorPage.php');
    exit();
}

?>