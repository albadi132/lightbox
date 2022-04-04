<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/lib/loginverify.php');
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/header.php'); 

if(isset($_GET['id']))
{
$id=$_GET['id'];
include('mysqlconnection.php');
echo "<br/><br/>";
echo "----------------------</br>";
echo "My Profile:</br>";
echo "----------------------</br>";
$result=mysqli_query($con,"select * from users where id='$id'") or die(mysqli_error($con));
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_array($result);
echo "UserName : ".$row['username']."<br>";
echo "Email : ".$row['email']."<br>";
echo "About : ".$row['about']."<br>";
}
mysqli_close($con);
}
echo "<img src='/lightbox/vulnerability/avatar/".$_SESSION['avatar']."' alt='[No Profile Avatar]'/> - <a href='/lightbox/vulnerability/Change-Profile-Picture.php'>Change Avatar</a><br/>";
?>
</br></br>
<a href="/lightbox/vulnerability/csrf/changeinfo.php"> Change Description about you</a></br></br>
<a href="/lightbox/vulnerability/csrf/change-email.php">Change Email ID</a>

<?php include($_SERVER['DOCUMENT_ROOT'].'/lightbox/footer.php');  ?>
