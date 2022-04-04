<?php 
include('header.php'); 
if(isset($_SESSION['isLoggedIn'])) { 
echo "<b>Welcome ".$_SESSION['username']." !</b>";
}
?>

		
			<?php echo $lang['lab'] ?>

<br/>
<?php echo $lang['Currently'] ?>
<ul>
<li>SQL Injection</li>
<li>XSS</li>
<li>CSRF</li>
<li>Clickjacking</li>
<li>SSRF</li>
<li>File Inclusion</li>
<li> Code Execution</li>
<li>Insecure Direct Object Reference</li>
<li>Unrestricted File Upload vulnerability</li>
<li>Open URL Redirection</li>
<li>Server Side Includes(SSI) Injection</li>
</ul>
<br/>


<a href='/lightbox/admin/'><?php echo $lang['go'] ?></a>

<?php include('footer.php'); ?>
