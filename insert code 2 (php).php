<?php
$server="localhost";
$uname="root";
$pwd="";
$db="library";
$con=mysqli_connect($server,$uname,$pwd,$db); 
$Category=$_POST['cate'];
$Author=$_POST['auth'];
$Books=$_POST['book'];


$query="insert into libr values(default,'$Category','$Author','$Books')";
if($res=mysqli_query($con,$query))
{
	echo "<script>alert('insert success');window.location.href='f1.php';
	</script>";
}
else
{
	echo "error";
}
?>