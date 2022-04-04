<?php 
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/header.php');
if(!isset($_SESSION['isAdminLoggedIn'])) { 
header("Location: /lightbox/admin/adminlogin.php");
}
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/mysqlconnection.php');

if(isset($_POST['delete']))
{
mysqli_query($con,"Delete from users where username='".$_POST['user']."'");
}

?>
	
<form action="manageusers.php" method="POST">		

<?php		
$result=mysqli_query($con,"select * from users where privilege='user'");
$row=mysqli_num_rows($result);
if($row>=1)
{
echo "</br></br>List of Registered users: </br>";
while($row=mysqli_fetch_array($result))
{

echo "<input type='radio' name='user' value='{$row['username']}'/> ".$row['username']."<br/>";
}
}
else
{
echo $lang['No'] ;
}
?>
<br/>
<input type="submit" value="Delete" name="delete"/>

</form>
<br/>
<a href="admincontrol.php"><?php echo $lang['Back'] ?></a>
<?php include($_SERVER['DOCUMENT_ROOT'].'/lightbox/footer.php');  ?>
