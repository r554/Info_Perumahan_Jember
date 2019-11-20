<?php
/* $host = "localhost";
$user = "root";
$pass = "";
$db = new;
$konek = mysqli_connect($host,$user,$pass,$db);
*/

$konek = mysqli_connect("localhost","root","","ipj");
if(!$konek){
echo "gagal konek ke db!!!";
} else{
    echo "berhasil";
}
?>