<?php
error_reporting(1);
$server="remotemysql.com";
$user="pBc1y4gdCU";
$dbname="pBc1y4gdCU";
$password="enO5z5EJpi";
$con=mysqli_connect($server,$user,$password,$dbname);
if($con)
{
	  // echo"connected";
}
else
{
	die(mysqli_connect_error());
}     

?>
<!DOCTYPE html>
<!--
bootstrapped stylesheets from https://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Modif</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1><a href="index.html">Modif</a></h1>
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li><?php
                      echo"<a href='index.php?uid=$_GET[uid]'>Home</a>";
                ?>   	</li>
        <li><?php
                      echo"<a href='module_list.php?uid=$_GET[uid]'>Modules</a>";
                ?>   	</li>
        <li><a href="#">Discuss Chat</a></li>
        <li><?php
                      echo"<a href='contact.php?uid=$_GET[uid]'>Contact Us</a>";
                ?></li>
        <li><?php
                      echo"<a href='logout.php?uid=$_GET[uid]'>Logout</a>";
                ?></li>				
      </ul
    </nav>
  </header>
</div>
</head>
<body id="top">

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div>
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace linklist contact btmspace-30">
        <li><i class="fas fa-map-marker-alt"></i>
          <address>
          26<sup>th</sup> Cair Paravel, 9 Narnia Street, Nowhere
          </address>
        </li>
        <li><i class="fas fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope"></i> modiforbital@gmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" ><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" ><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" ><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" ><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" ><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - Modif</p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>