<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Student List<br>';

$sql="select * from stud_det";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['st_roll'].'</td>';
      echo '<td>'.$row['st_name'].'</td>';
      echo '<td>'.$row['st_num'].'</td>';
      echo '<td>'.$row['st_add'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>