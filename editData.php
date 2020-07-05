<?php

$id = $_GET['id'];
 function dataFilter($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }
$name = $_POST['userName'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$city = $_POST['district'];

$name = datafilter($name);
$email =datafilter($email);

$connect = mysqli_connect('localhost', 'root','','crud');

$sql = "UPDATE data SET name = '$name',email = '$email',dob = '$dob',phone = '$phone',city = '$city' WHERE id = $id";
if(mysqli_query($connect,$sql))
{
    header("location:index.php");
}else{
    echo 'Not edited';
}
?>