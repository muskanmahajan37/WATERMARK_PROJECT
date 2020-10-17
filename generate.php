<?php
header('Content-Type: image/jpeg');
	
if(isset($_GET['$source'])){
	$source=$_GET['$source'];
$watermark=imagecreatefrompng('php-logo.png');
$wat_height=imagesy($watermark);
$wat_width=imagesx($watermark);

$image=imagecreatetruecolor($wat_width, $wat_height);
$image=imagecreatefromjpeg($source);
$image_size=getimagesize($source);
$x=$image_size[0]-$wat_width-10;
$y=$image_size[1]-$wat_height-10;
imagecopymerge($source, $watermark, 0, 0, $x,$y,$wat_width, $wat_height, 30);
imagejpeg($image,$source.'_watermarked.jpeg')
}

?>