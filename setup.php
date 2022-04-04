<?php 
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/header.php'); ?>
<?php

include($_SERVER['DOCUMENT_ROOT'].'/lightbox/config.php');
if(isset($_POST['install']))
{
if($_POST['install']==1)
{
	$con=mysqli_connect($db_server,$db_user,$db_password) or die("Connection Failure: ".mysqli_error($con)); //mysql connection

//Database creation
	mysqli_query($con,"DROP DATABASE IF EXISTS $db_name") or die("Can't drop database".mysql_error($con));
	mysqli_query($con,"CREATE DATABASE $db_name") or die("creating database fails".mysql_error($con));
	mysqli_select_db($con,$db_name);
//User Table creation
	$sql="Create table users(ID int NOT NULL AUTO_INCREMENT, username varchar(30),email varchar(60), password varchar(40), about varchar(50),privilege varchar(20),avatar TEXT,primary key (id))";
	mysqli_query($con,$sql) or die("Failed to create Table".mysql_error($con));
$hashedpassword=sha1("admin123");
	mysqli_query($con,"INSERT into users(username, password, email,About,avatar, privilege) values ('admin','$hashedpassword','admin@localhost','I am the admin of this page','default.jpg','admin')") or die("Not able to insert values".mysql_error());;

//Posts table creation
mysqli_query($con,"create table posts(postid int NOT NULL AUTO_INCREMENT, content TEXT,title varchar(100), user varchar(30), primary key (postid))") or die("Failed to create Posts Table".mysql_error());
mysqli_query($con,"INSERT into posts(content,title, user) values ('Feel free to ask any questions about lightbox Lab','First Post', 'admin')") or die("Failed to insert post".mysql_error());

	echo "<script>alert('The webApp has been installed successfully')</script> ";
	mysqli_close($con);
}
}

?>


<p>
<form action="setup.php" method="post">
<input type="hidden" value="1" name="install"/>
<input type="submit" value="Setup" name="setup"/>
</form>
</p>

<br/>
Note:<br/><b style="color:red">If a database already exits, it will be dropped </b>

<?php include($_SERVER['DOCUMENT_ROOT'].'/lightbox/footer.php'); ?>
