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
<html>
<head>
    <!-- 
    bootstrapped stylesheets from http://www.templatemo.com/preview/templatemo_418_form_pack 
    -->
	<title>Sign In</title>
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
		background: #FF3F4A;
		color: white;
	}
	</style>
</head>
<!-- FORM UI -->
<body class="templatemo-bg-image-2">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-contact-form-1" role="form" action="" method="POST" id="demo">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">Register</h1>
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		          	
		            <label for="name" class="control-label">Name</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	  <input type="text" placeholder="Name" name="first_name" id="first_name">
		            </div>		            		            		            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="email" class="control-label">Email</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-envelope-o"></i>
		            	 <input type="text" placeholder="Email" name="last_name" id="last_name">
		            </div>
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
		                  <p style="color: white;">Already a user? <a href="signin.php" style="color: #FF3F4A;">Sign In</a></p>
		                </label>
		            </div>
		            <input type="submit" name="submit" value="Register" class="btn">
		          </div>
		        </div>		    	
		      </form>		      
		</div>
	</div>
	<!-- FORM POST DETAILS -->
			<?php
		       if($_POST['submit'])
		       {    
					$first_name=$_POST['first_name'];
					$last_name=$_POST['last_name'];
		           	$name=$_POST['name'];				           	
		       		$pass=$_POST['pass'];				       		
		       		if($name!=""&&$pass!="")
		       		{	
		       			$pass=md5($pass);
		       			$sql = "SELECT * FROM users WHERE username='$name'";
                        $result = mysqli_query($con,$sql);
                        $count=mysqli_num_rows($result);
                        if($count>0)
                        {
                        	die("Username already Exits");
                        }
                        else
			       			$query="INSERT INTO users(first_name,last_name,username,password) VALUES('$first_name','$last_name','$name','$pass')";
			       			$data=mysqli_query($con,$query);
			       			$sql1 = "SELECT * FROM users WHERE username='$name'";
                        	$data1 = mysqli_query($con,$sql1);
			       			$result=mysqli_fetch_assoc($data1);
			       			$i=$result['id'];
			       			if($data)
			       			{
			       				header('location:index.php?uid='.$i);
			       			}
			       			else
			       			{
			       				echo"not inserted";
			       			}
		       		}
		       		else
		       		{
		       			echo "Empty Field!";
		       		}
		       	}
			?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>