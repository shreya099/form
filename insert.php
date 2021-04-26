<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
	</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','','intern');
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$num=$_POST['num'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$sql="INSERT into form(name,email,mob,state,city,address) values('$name','$email',$num,'$state','$city','$address')";
	// Execute query
if(mysqli_query($conn, $sql))
echo "<script>swal( 'Data inserted','inserted!','success' ).then(function() { window. location = 'display.php'; });;</script>";
}
?>