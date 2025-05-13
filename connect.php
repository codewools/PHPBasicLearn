<?php

$server_nmme = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name = "php_test";
$conn = new mysqli($server_nmme,$db_username,$db_pass, $db_name);

if($conn)
{
    echo 'Db Pss';

}
else{
    die(' Fialed  '. mysqli_connect_error());;
}


?>