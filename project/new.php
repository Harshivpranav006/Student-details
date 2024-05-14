<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Student Added';

$st_ro=$_POST['sro'];
$st_name=$_POST['sna'];
$st_num=$_POST['snum'];
$st_add=$_POST['sadd'];

$sql="insert into stud_det(st_roll,st_name,st_num,st_add) values('$st_ro','$st_name','$st_num','$st_add')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Success <br><br>';
}
else
{
    echo 'Error...';
}

$conn->close();
?>
