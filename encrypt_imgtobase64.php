<?php

//get image files with string
$img_file = file_get_contents('image.png');

//encrypt file
$data = base64_encode($img_file);

//display
echo $data;

?>
