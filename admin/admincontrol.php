<?php 
if(!isset($_SESSION))
{
session_start();
}
if(!isset($_SESSION['isAdminLoggedIn'])) { 
header("Location: /lightbox/admin/adminlogin.php");
}
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/header.php'); 

?>

<?php echo $lang['Welcome'] ?><br/><br/>
<ul>
<li><b><a href='manageusers.php'><?php echo $lang['Manage'] ?> </a></b></li>
</ul>
<ul>
<li><b><a href='/lightbox/logout.php'><?php echo $lang['LogOut'] ?></a></b></li>
</ul>
<?php include($_SERVER['DOCUMENT_ROOT'].'/lightbox/footer.php');  ?>
