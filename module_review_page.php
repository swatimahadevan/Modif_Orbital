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
$modulename=$_GET['mid'];
$query2="SELECT * FROM review WHERE modulename='$modulename'";
$query3="SELECT rating FROM review WHERE modulename='$modulename' ";
$query="SELECT * FROM modules WHERE id='$modulename'";
$data=mysqli_query($con,$query);
$data2=mysqli_query($con,$query2);
$data3=mysqli_query($con,$query3);
session_start();
    if ($_SESSION['loggedin'] == false)
        {
                 header('Location: signin.php');
            }   
?>
<!DOCTYPE html>
<html>
<head>
<title>Rate and Review</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<head>
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
    <head>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/1.css" >
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    	<meta charset="utf-8">
    	<meta lang="en-US">     
		</head>
		<head>
    	<title>Module Review</title>
    	<style>
    	*{
       box-sizing: border-box;
      }
      body{
      	background-color: #333;
      	margin: 0;
      	padding: 0;
      }
      .col-feedback{
          width:33.33333333333333%;
      }
      .col-8{
          width:66.66666666666666%;
	  }
	  .row.center{
	 justify-content: center;
 }
      .col-12{
          width:100%;
      }
      .header,.aside,.nav,.section,.footer{
          float:left;
      }
      .header{
        overflow: hidden;
        background-color: #333;
        height:60px;
      }
      .aside{
        background-color: #333;
      }
      .section{
      	background-color: #333;
      	color: white;
      }
      ul{
          list-style:none;
          margin:0;
          padding:0;
      }
      li{
          float:left;
          height:60px;
          text-align:center;
          padding-top:17px;
      }
      hr{ 
          display: block;
          margin-top: 1em;
          margin-bottom: 0em;
          width: 87%;
          margin-left:0px;
          border-style: inset;
          border-width: 0.5px;
          float: left;
      }
      .module_titile{
          font-size: 40px;
      }
      .my{
        max-width:100%; 
      }
      .module,.comments{
          float: left;
      }
     .moduleset{
          margin-top:1%;
          margin-left:100px;
          margin-bottom:1%;
      }
      table{
        width: 100%;
      }
      table,th,td{
        margin: 0;
        padding: 0;
        border: 1px solid black;
        border-collapse: collapse;
      }
      th,td{
        padding: 5px;
      }
      th{
        width: 25%;
      }
     /*start phone responsive*/    
      @media only screen and (max-width:600px)
      {
      .header,.nav,.section,.footer{
          margin:0;
      }
      .col-2{
      	width: 100%;
      }
      .col-1{
      	width: 100%;
      	background-color: #333;
      	border-bottom: 1px solid green;
      }
      .col-6{
      	background-color: #333;
      	margin-left: 15px;
      	width: 100%;
      }
      hr{ 
      display: block;
      margin-top: 0.5em;
      margin-bottom: 0.5em;
      width: 100%;
      margin: 0 auto;
      border-style: inset;
      border-width: 0.5px;
      }
      input[type="text"]{
                 width: 96%;
      }
      .len button{
      	display: none;
      }
      .header {
      	  width: 100%;
  		    overflow: visible;
  		    background-color: #333;
  		    height:60px;
      } 
      .section{
      	margin-top:266px;
      }
      .section{
        float:left;
      }
      .module_titile{
      	margin-left: 40%;
      } 
      .my{
        margin:2px;
        margin-top:10px; 
      }
      .module{
        width: 100%;
      }
      .moduleset{
        width: 100%;
        margin: 0;
        margin-top:1%;
      }
      .module_titile{
        margin-left: 20px;
        font-size: 20px;
        margin-top: 10%;
      }
      .my{
        max-width: 100%;
        margin-top: 0;
      }
      .comments{
        width: 97%;
        margin-left: 3%;
      }
	  

	  
      </style>
    </head>
    <body onload="display()">
        <div class="row" >
          <div class=" col-12 section">
              <div class="col-8 module">
                <div class="moduleset">
                   <?php
                      $result=mysqli_fetch_assoc($data);
                      $i=$result['title'];
                      echo"<span class='module_titile'>".$i."</span><hr>";
					  $j=$result['modulename'];
                   ?>
                </div>
				<br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>Reviews by other users for this module:</span>
				  <div>
				  	<?php
					while($result=mysqli_fetch_assoc($data2))
					{
						$p=$result['comments'];
						$q=$result['rating'];
						echo"<br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>".$p."</span>"; 
						echo"&emsp;&emsp;&emsp;&emsp;<span>".$q."</span>"; 						
					} 
				   
				   
                   ?>

				   </div>
				   
              </div>
            <form method="POST" id="demo">
                <div class="col-feedback comments">
				
                      <h3><p>Leave a review here:</p></h3>  
					  <p>Please fill out the rating and give a brief comment.</p>
					  <p>Your inputs will be appreciated by others.</p>
					  <p>To make any edits, fill out the review form once more and reload to see updates.</p>
                      <tr> 
                        <td>RATINGS</td>  
						<div >
                        <table>
                        <tbody>
                        <tr>
                         <td><input type="radio" name="rating1" value="5"></td>
						 <td style= "color: black;">5</td>
						 <td><input type="radio" name="rating1" value="4"></td>
						 <td style= "color: black;">4</td>
						 <td><input type="radio" name="rating1" value="3"></td>
						 <td style= "color: black;">3</td>
						 <td><input type="radio" name="rating1" value="2"></td>
						 <td style= "color: black;">2</td>
						 <td><input type="radio" name="rating1" value="1"></td>
						 <td style= "color: black;">1</td>
					    </tr>
                        </tbody>
                        </table>
                        </div>
                      </tr>
                 <br>
                  <input type="text" name="comment" id="comment" placeholder="comments..." style="width:100%;color:black;"><br><br>
                  <input type="submit" name="submit" value="submit" style="color: #FF3F4A;">
                  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><p>
				  Disclaimer: Modif Inc. takes no responsibility for the opinions expressed in this review forum; we are unable to check any facts,so cannot attest to the accuracy of information contained in any of the reviews. We urge you not to use language that may be offensive to others, or to give out personal information. 
				  </p>
                  <?php
				  session_start();
  if($_POST['submit'])
                     {    
                          // echo "<script>console.log('hello')</script>";
                          $cm=$_POST['comment'];
                          $rt=$_POST['rating1'];             
                          if($cm!=""||$rt!="")
                          { 
                              $sql = "SELECT * FROM users WHERE id='$uid'";
                              $data= mysqli_query($con,$sql) ;
                              $result=mysqli_fetch_assoc($data);
                              $name=$result['username'];
                              $uuid=$result['id'];
                              $sql1 = "SELECT * FROM review WHERE id='$uuid' AND modulename='$j'";
                              $data1= mysqli_query($con,$sql1) ;
                              $count1=mysqli_num_rows($data1);
                              if($count1>0)
                              {
                                  $query="UPDATE review SET comments='$cm',rating='$rt' WHERE id='$uuid' AND modulename='$j'";
                                  $data=mysqli_query($con,$query);
                                  if($data)
                                  {
                                    // echo"data updated successfully";
                                  }
                                  else
                                  {
                                    // echo"not updated";
                                  }
                              }
                              else
                              {
                                $query="INSERT INTO review(modulename,username,comments,rating,id) VALUES('$j','$name','$cm','$rt','$uuid')";
                                $data=mysqli_query($con,$query);
                                if($data)
                                {
                                  // echo"data inserted successfully";
                                }
                                else
                                {
                                  // echo"not inserted";
                                }
                              }
                          }
                          else
                          {
                            // echo "there is no comments";
                          }
                     }
                 ?>

            </form>
          </div> <br>
        </div> 
  	    <script>
         function display()
         {
          document.getElementById("display").innerHTML = '<table> <tr> <th>username</th> <th>comments</th> <th>rating</th> </tr><br><?php  
                  $sql='SELECT * FROM follow WHERE user='.$uid.'';
                  $data = mysqli_query($con,$sql);
                  while($result=mysqli_fetch_assoc($data))
                  {
                  $following[]=$result['following'];
                  $n++;
                  } 
                  for($i = 0; $i <= $n; $i++)
                  {
                      $sql1='SELECT * FROM review WHERE id='.$following[$i].' AND moviename='.$j.'';
                      $data1 = mysqli_query($con,$sql1);
                      while($result=mysqli_fetch_assoc($data1))
                      {
                          echo '<tr><td>'.$result['username'].'</td><td>'.$result['comments'].'</td><td>'.$result['rating'].'</td></tr><br>';
                      }
                  }
                  ?></table>';
          document.getElementById("userslist").innerHTML = '<?php  
                  $sql='SELECT * FROM users';
                  $data = mysqli_query($con,$sql);
                  while($result=mysqli_fetch_assoc($data))
                  {                 
                          echo '<tr><td>'.$result['id'].'</td></tr><br>';
                  }
                  ?>';
         }
        </script>
  </body>

</html>