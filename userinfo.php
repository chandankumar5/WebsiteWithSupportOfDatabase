<?php
$con=mysqli_connect('localhost','root','','ytuserdata');
if($con){
	echo "connected successfully";
}
else{
echo "not connected";
}


$user=$_POST['User'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$comments=$_POST['Comments'];

$query="insert into userinfodata(user,email,mobile,comment) values('$user','$email','$mobile','$comments')";

mysqli_query($con, $query);


?>