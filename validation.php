<?php



$con = mysqli_connect('localhost','root','rootroot','portfolio');


if ($con) {
    echo "connection successful";
    

}
else{
	echo "no connection";
}

mysqli_select_db($con,'portfolio');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$q = "select * from information where name = '$name' && email = '$email' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	# code...
	echo "<script>alert('User already exist')</script>";
	

}
else{
$qy = "insert into information (email , name , detail) values ('$email', '$name' , '$message')";
	mysqli_query($con,$qy);
header('location:index.php');

}
header('location:index.php');
	
?>



