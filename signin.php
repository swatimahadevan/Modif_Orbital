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
<html>
<head>
    <!-- 
    bootstrapped stylesheets from http://www.templatemo.com/preview/templatemo_418_form_pack 
    -->
	<title>Sign In Form</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	<style>
	input{
		text-align: center;
		width: 100%;
		height:40px;
		color: #000000;
	}
	.btn
	{
		background-color: #FF3F4A;
		color: white;
	}
	</style>
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-contact-form-1" role="form" action="" method="POST" id="demo">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">Sign In</h1>
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="website" class="control-label">Username</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-toggle-right"></i>
		            	<input type="text" placeholder="Username" name="name" id="name">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="subject" class="control-label">Password</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="password" name="pass" placeholder="Password" id="pass">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
				  	<div class="checkbox pull-left">
		                <label>
		                  <p style="color: white;">Do not have an account?<a href="signup.php" style="color: #FF3F4A;">Sign Up</a></p>
		                </label>
		            </div>
		            <input type="submit" name="submit" value="Sign In" class="btn">
		          </div>
		        </div>		    	
		      </form>		      
		</div>
	</div>
		
		<?php
		session_start();
	       if(isset($_POST['submit']))
	       {    
	           	$name=$_POST['name'];
	       		$pass=$_POST['pass'];
	       		if($name!=""&&$pass!="")
	       		{	
	       			$password=md5($pass);
	       			$query= "SELECT * FROM users WHERE username='$name' AND password='$password'";		       			
                    $data = mysqli_query($con,$query);	                   
                    $result=mysqli_fetch_assoc($data);	                    
                    $count=mysqli_num_rows($data);	                    	                    
                    $i=$result['id'];
                    $j=$result['username']; 			
                    if($count>0)
                    {
						 $_SESSION['loggedin'] = True;
                         header('location:index.php?uid='.$i);
                    }
                    else
                    {	
                    	echo"Username does not exist!";
                    }	                  
	       		}
	       		else
	       		{
	       			echo "Empty field!";
	       		}
	       }
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				$(document).ready(function(){ 
			    				$("#name").val(''); 
				});

		</script>
	</body>
</html>
