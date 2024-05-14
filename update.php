<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$st_ro=isset( $_POST['sro']);
$st_name=isset($_POST['sna']);
$st_num=isset($_POST['snum']);
$st_add=isset($_POST['sadd']);

$sql="update stud_det set st_name='$st_name',st_num='$st_num',st_add='$st_add' where st_roll='$st_ro'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo ' Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>