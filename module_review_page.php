<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Modif
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition" data-color="purple>
  <div class="wrapper ">
    <div class="sidebar"  data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | purple | purple | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Modif
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
              		  <?php
                      echo"<a class='nav-link' href='index.php?uid=$_GET[uid]'> <i class='material-icons'>bubble_chart</i><p>About Us</p></a>";
                ?> 
          </li>
		            <li class="nav-item active">
              		  <?php
                      echo"<a class='nav-link' href='module_list.php?uid=$_GET[uid]'> <i class='material-icons'>dashboard</i><p>Modules List</p></a>";
                ?> 
          </li>
          <li class="nav-item ">
              		  <?php
                      echo"<a class='nav-link' href='profile.php?uid=$_GET[uid]'> <i class='material-icons'>person</i><p>User Profile</p></a>";
                ?> 
          </li>
		  				</li>
								</li>
				          <li class="nav-item">
              		  <?php
                      echo"<a class='nav-link' href='create_thread.php?uid=$_GET[uid]'> <i class='material-icons'>comments</i><p>Forum</p></a>";
                ?> 
				</li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Review Module</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" method="POST"  action="search.php<?php echo'?uid='.$uid ?>">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." name="searchname">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="dropdown-item" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
				                   <?php
                      $result=mysqli_fetch_assoc($data);
                      $i=$result['title'];
                      echo"<h3 class='card-title'>".$i."</h3>";
					  $j=$result['modulename'];
                   ?>
                  
                  <p class="card-category">Reviews are listed below.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
					  <th></th>
                        <th>
                          Review
                        </th>
						<th></th>
                        <th>
                          Rating
                        </th>
                      </thead>
                      <tbody>
                        
					<?php
					while($result=mysqli_fetch_assoc($data2))
					{
						$p=$result['comments'];
						$q=$result['rating'];
						echo"<tr>
						<td></td><td>".$p."</td><td></td><td>".$q."</td></tr>"; 			
					} 
				   
				   
                   ?>
                       
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
					  <th></th>
					  <th></th>
					  <th></th>
					  <th></th>
					  <th></th>
					  <th></th>
					  <th></th>
					  <th></th>
                        <th>
                          <h3 class="text-primary">Leave Your Review</h3>
                        </th>
						<th></th>
                      </thead>
                    </table>
					 <form method="POST" id="demo">
                <div class="col-feedback comments">
					  <p>Please fill out the rating and give a brief comment.</p>
					  <p>Your inputs will be appreciated by others.</p>
					  <p>To make any edits, fill out the review form once more and reload to see updates.</p>
                      <tr> 
						<div >
                        <table>
                        <tbody>
                        <tr>
                         <td><input type="radio" name="rating1" value="5"></td>
						 <td style= "color: purple;">5</td>
						 <td><input type="radio" name="rating1" value="4"></td>
						 <td style= "color: purple;">4</td>
						 <td><input type="radio" name="rating1" value="3"></td>
						 <td style= "color: purple;">3</td>
						 <td><input type="radio" name="rating1" value="2"></td>
						 <td style= "color: purple;">2</td>
						 <td><input type="radio" name="rating1" value="1"></td>
						 <td style= "color: purple;">1</td>
					    </tr>
                        </tbody>
                        </table>
                        </div>
                      </tr>
                 <br>
                  <input type="text" name="comment" id="comment" placeholder="comments..." style="width:100%;color:black;"><br><br>
                  <input class="btn btn-primary btn-block" type="submit" name="submit" value="submit" style="color: white;">
                  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><p>
				  Disclaimer: Modif Inc. takes no responsibility for the opinions expressed in this review forum; we are unable to check any facts,so cannot attest to the accuracy of information contained in any of the reviews.  
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>