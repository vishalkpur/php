<?php
if(isset($_POST['submit']))
{
	$conn=mysqli_connect("localhost","root","","pickedvegetable");
	$email = $_POST['t1'];
	$psw = $_POST['t2'];
	$query = "insert into vendor values ('' ,'$email' ,'$psw')";
	mysqli_query($conn , $query);
	header('location:vendorlogin.php');
	
}



?>



<form action="vendorsignup.php" method="post">
email <input type="text" name="t1" />
password <input type="text" name="t2" />
<input type="submit" name="submit" />

</form>

