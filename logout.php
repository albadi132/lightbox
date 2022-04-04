<?php
session_start();
session_destroy();
header("Location: /lightbox/index.php");
?>
