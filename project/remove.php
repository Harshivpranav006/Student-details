<?php
$host='localhost';
$user='root';
$pass='';
$db='student';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$st_ro=isset( $_POST['sro']);

$sql="delete from stud_det where st_roll='$st_ro'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>