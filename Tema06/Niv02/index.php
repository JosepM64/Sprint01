<?php 

include 'getfiledir.php';

$filePath = new GetFileDir(__FILE__);

echo $getfiledir -> getFile();
echo $getfiledir -> getDir();


?>