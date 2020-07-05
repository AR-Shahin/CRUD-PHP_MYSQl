<?php
$conn = mysqli_connect('localhost','root','','crud');
$id = $_GET['id'];
$sql ="DELETE FROM data WHERE id = $id";
if(mysqli_query($conn,$sql)){
    header("location:index.php");
}
else{
    echo 'Not deleted';
}

?>