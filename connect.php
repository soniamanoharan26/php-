<?php

$n=$_POST['stuname'];
$c=$_POST['stuclass'];

$con=mysqli_connect("local");
$sql="INSERT INTO studetails(Studentname,studentclass) values('$n',$c)";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"user data enter successfully";

}else{
    echo"not entered";
}
?>
