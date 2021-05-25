<?php
require('../vendor/autoload.php');
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
$uid=$_GET['uid'];
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
        <li>        <li><?php
                      echo"<a href='chat.php?uid=$_GET[uid]'>Discuss Chat</a>";
                ?></li></li>
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
<div class="wrapper bgded overlay" style="background-image:url('images/templatemo-bg-2.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">About Modif</h3>
      <p>Browse through our module reviews and sign up to leave your own!</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="signin.php">Sign In</a></li>
          <li><a class="btn inverse" href="signup.php">Register</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
<div class="wrapper row2">
  <section id="introblocks" class="hoc container clear"> 
    <ul class="nospace group">
      <li class="one_third first">
        <article><a href="#"><i class="fas fa-hand-peace"></i></a>
          <h6 class="heading underline">Browse Modules</h6>
          <p>Browse our module listing to look for relevant reviews!</p>
        </article>
      </li>
      <li class="one_third">
        <article class="active"><a href="#"><i class="fas fa-microphone"></i></a>
          <h6 class="heading underline">Rate and Review Modules</h6>
          <p>Leave your own feedback to help others!</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-moon"></i></a>
          <h6 class="heading underline">Support Chat</h6>
          <p>Post your questions to the student community!</p>
        </article>
      </li>
    </ul>
  </section>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Modif</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>