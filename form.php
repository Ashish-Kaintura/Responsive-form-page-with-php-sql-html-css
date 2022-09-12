<?php
//making connection 
$con =mysqli_connect('localhost','root');
         //checking connection 
if($con){
    echo"connection succesful";
}else{
    echo"no connection" ;
}
mysqli_select_db($con,'tripepage');


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$txtMessage=$_POST['txtMessage'];

$query="INSERT INTO trip (name, email, phone, txtMessage) VALUES ('$name','$email','$phone','$txtMessage')";
mysqli_query($con,$query);
echo "$query";

header('location:home.html')
//mysqli_query($con,$query);
mysqli_close($con);

?>