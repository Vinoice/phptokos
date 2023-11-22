<?php 
$username = "admin";
$password = "12345";
$isadmin = false;

if($username == "admin" && $password == "12345"){
    if($isadmin){
        echo "selamat datang administlator";
    } else {
        echo "selamat datang user";
    }
} else {
    echo "maaf username dan password salah";
}
?>