<?php
error_reporting(E_ALL ^ E_DEPRECATED);
 include($_SERVER['DOCUMENT_ROOT'].'/lightbox/header.php'); ?>
<form action="regprocess.php" method="post">
<table> 
<tr><td><?php echo $lang['username'] ?>: </td><td><input type="text" name="username" /></td></tr>
<tr><td><?php echo $lang['Email'] ?>:</td><td><input type="text" name="email" /></td></tr>
<tr><td><?php echo $lang['Describer'] ?>:</td><td><input type="text" name="About" /></td></tr>
<tr><td><?php echo $lang['password'] ?>:</td><td><input type="password" name="password"/></td></tr>
<tr><td><input type="submit" name="Register" value="Register"/></td></tr>
</table>  
</form>
<?php
if(isset($_GET['em']))
{
echo "<span style='color:red'>".$_GET['em']."</span>";
}
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/lightbox/footer.php'); ?>
