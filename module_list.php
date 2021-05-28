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
$uid=$_GET['uid'];
$query="SELECT * FROM modules";
$data=mysqli_query($con,$query);
session_start();
    if ($_SESSION['loggedin'] == false)
        {
                 header('Location: signin.php');
            }   
?>
<!DOCTYPE html>
<head>
<title>Modif</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1><a href="index.html">Modif</a></h1>
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li> <?php
                      echo"<a href='index.php?uid=$_GET[uid]'>Home</a>";
                ?>   	</li>
        <li> <?php
                      echo"<a href='module_list.php?uid=$_GET[uid]'>Modules</a>";
                ?>   	</li>
        <li><a href="#">Discuss Chat</a></li>
        <li><?php
                      echo"<a href='contact.php?uid=$_GET[uid]'>Contact Us</a>";
                ?> </li>
        <li><?php
                      echo"<a href='logout.php?uid=$_GET[uid]'>Logout</a>";
                ?></li>				
      </ul
    </nav>
  </header>
</div>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Browse Modules</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
	* {
  box-sizing: border-box;
}
.imageColumn {
   float: left;
   padding: 0px;
}
.row {
  display: flex;
}


/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}
	a.button3{display:inline-block;
padding:0.3em 1.2em;
margin:0 0.3em 0.3em 0;
border-radius:2em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#FFFFFF;
background-color:#f4623a;
text-align:center;
transition: all 0.2s;
}
a.button3:hover{
background-color:#4095c6;
}
@media all and (max-width:30em){
a.button3{
display:block;
margin:0.2em auto;
}
}
.nav3 {
    background-color: #f4623a;
    height: auto;
    width: 200px;
    float: left;
    padding-left: 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #f4623a;
    padding-top: 20px;
    padding-right: 20px;
}

.icons{
    display:inline-block;
    width: 64px; 
    height: 64px; 
   }

 a.icons:hover {
     background:   #C93;
 }
 .row{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;

}
 .row.center{
	 justify-content: center;
 }
 .row.space
 {
	 justify-content: center;
	 
 }
 img{
	 border-radius: 2rem;
	 height: 100rem;
	 color: #00ffff;
 }
 img.medium
 {
	 max-width: 30rem;
	 width: 100;
	 height: 30rem;
	padding: 1rem;
 }
 


</style>
</head>
<body>
<div class="container-fluid body">
 <div class="sbox" style= "color: #FFFFFF;">
			 <div>
							<form class="fm1" method="POST" action="search.php<?php echo'?uid='.$uid ?>">
			          <form class="col-6 fm2" method="POST" action="search.php<?php echo'?uid='.$uid ?>">
             <input style= "color: #FFFFFF;" type="text" class="searchBox" placeholder="Look for a module by code..." name="searchname">
			</div>

</div>
          <div class="row center">
              <h3  style="color:white;">MODULE LIST</h3>
           </div>
	       <div class="row center">
                <?php
                    while($result=mysqli_fetch_assoc($data))
                    {  
                        $k=$result['title'];
                     echo"<div><a href='module_review_page.php?mid=$result[id]&uid=$_GET[uid]'><p class='row center' align=justify style='background-color:#343a40;
border-radius:4px;
font-size:30px;
color: #FF3F4A;
width: 1200px;
margin:5px;
margin-bottom: 25px;
padding: 10px 14px 10px 44px;
position: relative;
box-shadow: 0px 1px 5px #999;'>$k</p ></a>";
                      
                    }
                ?>   			
</div>
    </body>
</html>