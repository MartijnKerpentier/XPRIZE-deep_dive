<?php
$url = "$_SERVER[REQUEST_URI]";
$array = explode("/", $url);
var_dump($array);
if (!empty($array[3])) {
    $C_NAME = $array[3];
} else {
    $C_NAME = "Home";
}
$file = "Controllers/{$C_NAME}Controller.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "404 NOT found";
}
?>