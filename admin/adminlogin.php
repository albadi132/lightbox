<?php  

include($_SERVER['DOCUMENT_ROOT'].'/lightbox/mysqlconnection.php');
$em="";
if(isset($_POST['Login']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];

 if($username=='' || $password == '')
 {
	$em="Please Fill all fields";
 }
 else
 {
	$password=sha1($password);
	$result=mysqli_query($con,"select * from users where username='$username' and password='$password' and privilege='admin' ");
	if(mysqli_num_rows($result)==1)
	{
	$data=mysqli_fetch_array($result);
	session_start();
	$_SESSION['isAdminLoggedIn']=1;
	$_SESSION['userid']=$data["ID"];
	$_SESSION['username']=$username;
	$_SESSION['privilege']=$data['privilege'];
	header("Location: admincontrol.php");
	}
	else
	{
	$em="Username/Password is wrong";
	}
  }
  mysqli_close($con);
}
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/header.php');
?>

<b><?php echo $lang['Panel'] ?>:</b><br/>
<form action="adminlogin.php" method="post">
<table> 
<tr><td><?php echo $lang['username'] ?> : </td><td><input type="text" name="username" /></td></tr>
<tr><td><?php echo $lang['password'] ?> :</td><td><input type="password" name="password"/></td></tr>
<tr><td><input type="submit" name="Login" value="Login"/></td></tr>
</table>  
</form>

<?php

echo "<span style='color:red'>".$em."</span>";
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/footer.php'); ?>
