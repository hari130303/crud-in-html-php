<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
   <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="../ind.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				     <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>EDIT DETAILS<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="f1.php">ADD NEW BOOK</a>
                            </li>
                            <li>
                                <a href="f2.php">UPDATE DETAILS</a>
                            </li>
                            <li>
                                <a href="delete.php">DELETE DETAILS</a>
                                
                            </li>
                        </ul>
                      </li>  
                     
                   
                     <li>
                        <a  href="bd.php"><i class="fa fa-desktop fa-3x"></i>BOOK DETAILS</a>
                    </li>
                     <li  >
                        <a  href="sd.php"><i class="fa fa-table fa-3x"></i>STUDENT DETAILS</a>
                    </li>

                   <!--  <li>
                        <a  href="mm.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				 -->
					
					                   
                 
                       
                  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-table fa-1x"></i>
                </span>
                <div class="text-box" >
                    <h6 class="main-text"> <?php
                    $server="localhost";
                    $uname="root";
                    $pwd="";
                    $db="library";
                    $con=mysqli_connect($server,$uname,$pwd,$db); 
                    $que="select count(*) from studet where bid='book issued'";
                    $res=mysqli_query($con,$que);
                    while ($row=mysqli_fetch_array($res))
                     {
                       
                       echo "$row[0] books issued";
            }
            ?></h6>
                    <p class="text-muted"></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <h6 class="main-text">
                         <?php
                    $server="localhost";
                    $uname="root";
                    $pwd="";
                    $db="library";
                    $con=mysqli_connect($server,$uname,$pwd,$db); 
                    $que="select count(*) from sturegform";
                    $res=mysqli_query($con,$que);
                    while ($row=mysqli_fetch_array($res))
                     {
                       
                       echo " $row[0] students registered";
            }
            ?>
                    </h6>
                    <p class="text-muted"></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bar-chart-o fa-1x"></i>
                </span>
                <div class="text-box" >
                    <h6 class="main-text"><?php
                    $server="localhost";
                    $uname="root";
                    $pwd="";
                    $db="library";
                    $con=mysqli_connect($server,$uname,$pwd,$db); 
                    $que="select count(*) from libr";
                    $res=mysqli_query($con,$que);
                    while ($row=mysqli_fetch_array($res))
                     {
                       
                       echo " total no of books : $row[0] ";
            }
            ?></h6>
                    <p class="text-muted"></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <h6 class="main-text"><?php
                    $server="localhost";
                    $uname="root";
                    $pwd="";
                    $db="library";
                    $con=mysqli_connect($server,$uname,$pwd,$db); 
                    $que="select count(*) from pt";
                    $res=mysqli_query($con,$que);
                    while ($row=mysqli_fetch_array($res))
                     {
                       
                       echo " total no of admins : $row[0] ";
            }
            ?></h6>
                    <p class="text-muted"></p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <div class="container mt-5">
                <div class="row justify-content-center">
            <form action="#" method="GET">
                <div class="container">
                <div class="row">
                     <input type="text" name="search" placeholder="search..." class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"><br><br><br><br>
                </div>    
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="card">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>AGE</th>
                            <th>E-MAIL</th>
                            <th>BOOK DETAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if(isset($_GET['search']))
                        {
                            $con=mysqli_connect('localhost','root','','library');
                            $filter=$_GET['search'];
                            $filterdata="select id,name,age,email,bid from studet where concat(id,name) like '%$filter%'";
                            $filterdata_run=mysqli_query($con,$filterdata);

                            if(mysqli_num_rows($filterdata_run)>0)
                            {
                                foreach ($filterdata_run as $row) {
                                    ?>
                                      <tr>
                                        <td><?php echo $row['id']?>
                                        <td><?php echo $row['name']?>
                                        <td><?php echo $row['age']?>
                                        <td><?php echo $row['email']?>
                                        <td><?php echo $row['bid']?>
                                      </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>
                                        <td colspan="5">no record found</td>
                                    </tr>
                                <?php
                            }
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
                </div> 
                    
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
