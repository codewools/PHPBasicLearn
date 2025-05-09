<?php

$server_nmme = 'localhost';
$db_username = 'root';
$db_pass = '';
$conn = new mysqli($server_nmme,$db_username,$db_pass);

if($conn)
{
    echo 'Db Pss';

}
else{
    die(' Fialed  '. mysqli_connect_error());;
}
?>