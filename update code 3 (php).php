<?php
$server="localhost";
$uname="root";
$pwd="";
$db="library";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
$id=$_POST['id'];
$Category=$_POST['cate'];
$Author=$_POST['auth'];
$Books=$_POST['book'];
$que="update libr set Category='$Category',Author='$Author',Books='$Books' where id=$id";
if($res=mysqli_query($con,$que))
{
	echo "<script>alert('update successful');window.location.href='f2.php';
		</script>";
}
else
{
	echo"<script>alert('update error');
	</script>";
}
?>