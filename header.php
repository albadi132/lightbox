<?php 
if(!isset($_SESSION))
{
 session_start();
 }
 include('lang.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="En">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>lightbox Lab</title>
	<link rel="stylesheet" href="/lightbox/a.css" type="text/css" charset="utf-8" />
</head>

<body>
<div id="container" >

     <div id="Menu">
		<ul id="menu-bar" style="margin-left: auto ;  margin-right: auto ;" >
			<li class="current"><a href="/lightbox"><?php echo $lang['Home'] ?></a></li>
			
			<li><a href="#"><?php echo $lang['Vulnerability'] ?></a>
				<ul>
			   	       <li><a href="#">XSS</a>
				             <ul>
					       <li><a href="#">Reflected(GET)</a>
					 	 <ul>
							<li> <a href="/lightbox/vulnerability/xss/xss1.php"><?php echo $lang['Challenge1'] ?></a></li>
							<li> <a href="/lightbox/vulnerability/xss/xss2.php"><?php echo $lang['Challenge2'] ?></a></li>
							<li> <a href="/lightbox/vulnerability/xss/xss3.php"><?php echo $lang['Challenge3'] ?></a></li>
							<li> <a href="/lightbox/vulnerability/xss/xss4.php"><?php echo $lang['Challenge4'] ?></a></li>
					       	 </ul>
					       </li>
						<li><a href="/lightbox/vulnerability/xss/postxss.php">POST Based</a></li>
						 <li><a href="/lightbox/vulnerability/xss/dom.php">DOM based</a></li>
						<li><a href="#">HTTP Referer</a>
							<ul>
							<li><a href="/lightbox/vulnerability/xss/xss-referer2.php"><?php echo $lang['Challenge1'] ?></a></li>
							<li><a href="/lightbox/vulnerability/xss/xss-referer2.php"><?php echo $lang['Challenge2'] ?></a></li>
							</ul>

						</li>
						<li><a href="/lightbox/vulnerability/xss/xss-user-agent.php">User Agent Header</a></li>
					      
						<li><a href="/lightbox/vulnerability/forum.php">Stored XSS(Persistent)</a></li>
				  	    </ul>
						
					</li>
					<li><a href="#">CSRF</a>
						<ul>
							<li><a href="/lightbox/vulnerability/csrf/changeinfo.php">CSRF 1: Change Info</a></li>
							<li><a href="/lightbox/vulnerability/csrf/change-email.php">CSRF 2: Change Email</a></li>
						</ul>
					</li>
					<li><a href="#">SQL Injection</a>
						<ul>
						  <li><a href="/lightbox/vulnerability/ForumPosts.php?id=1">Sql Injection 1</a></li>
						  <li><a href="/lightbox/login.php">Authentication Bypass</a></li>
						  <li><a href="/lightbox/vulnerability/sqli/UserInfo.php?id=1">Blind SQLi</a></li>
						</ul>
					</li>
					<li><a href="#">File Inclusion</a>
						<ul>
						<li><a href="/lightbox/vulnerability/lfi/LFI.php?file=news.php">Local File Inclusion</a></li>
						<li><a href="/lightbox/vulnerability/rfi/RFI.php?file=news.php">Remote File Inclusion</a></li>
						</ul>
					</li>
					<li>
						<a href="/lightbox/vulnerability/ssrf/ssrf.php">SSRF</a>
					</li>
					<li>
						<a href="/lightbox/vulnerability/clickjacking/cj.php">Clickjacking</a>
					</li>
					<li><a href="#">Code Execution</a>
						<ul>
						<li><a href="/lightbox/vulnerability/rce/phpcodeex.php?data=Hello">PHP Code Execution</a>
						</li>
						<li>
						<a href="/lightbox/vulnerability/cmd/cmd.php">Command Execution </a>
						</li>
						</ul>
					</li>
					<li>
						<a href="/lightbox/myprofile.php?id=<?php if(isset($_SESSION['userid'])){ echo $_SESSION['userid'];} ?>" title="Make sure you have logged in ">Insecure Direct Object References</a>
					</li>
				
					<li><a href="#"><?php echo $lang['More..'] ?></a>
						<ul>
							<li><a href="/lightbox/vulnerability/open.php?u=forum.php">Open Redirect</a>
							</li>
							<li>
						<a href="/lightbox/vulnerability/upload.php">Unrestricted File Upload</a>
					</li>
						<li>
						<a href="/lightbox/vulnerability/ssi/ssi.php">Server Side Includes(SSI) Injection</a>
					</li>
						</ul>
					</li>
				
				</ul>
			<li><a href="/lightbox/vulnerability/forum.php"><?php echo $lang['Forum'] ?></a></li>
				
			<?php if(!isset($_SESSION['isLoggedIn'])) { 
				echo "<li><a href='/lightbox/login.php'>".$lang['LogIn']."</a></li><li><a href='/lightbox/register.php'>".$lang['Register']."</a></li>";
				}
				else
				{
					echo "<li><a href='/lightbox/logout.php'>".$lang['LogOut']."</a></li>";
			    } 
			?>
			<li><a href="#"><?php echo $lang['Language'] ?></a>
			<ul>
			
						<li><a href="?lang=en">English</a></li>
						<li><a href="?lang=ar">عربي</a></li>
						
			</ul></li>
		</ul>
	</div>

	<div id="Main-Container">
	
	<div id="logo">
<img src="LightBox.png" alt="LightBox" style="width:300px;height:200px;">
</div>
	
		
		<div id="Main">
		
