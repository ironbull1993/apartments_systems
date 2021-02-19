<?php


// Common Code Starts
session_start();

if( ! isset($_SESSION["user_id"])) {
	header('Location: index.html');
    exit;
}

$userid = $_SESSION["user_id"];
$firstname = $_SESSION["first_name"];
$lastname = $_SESSION["last_name"];


include("dbconnect.php");

// Common Code End


try
{
  $sql = "SELECT * FROM requests where UserId=$userid";
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching data: ' . $e->getMessage();

  exit();
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html><head>
              <title>River Plaza</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/morris.css" type="text/css">
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- //jQuery -->
        <!-- tables -->
        <link rel="stylesheet" type="text/css" href="css/table-style.css">
        <link rel="stylesheet" type="text/css" href="css/basictable.css">
        <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $('#table').basictable();
        
              $('#table-breakpoint').basictable({
                breakpoint: 768
              });
        
              $('#table-swap-axis').basictable({
                swapAxis: true
              });
        
              $('#table-force-off').basictable({
                forceResponsive: false
              });
        
              $('#table-no-resize').basictable({
                noResize: true
              });
        
              $('#table-two-axis').basictable();
        
              $('#table-max-height').basictable({
                tableWrapper: true
              });
            });
        </script>
        <!-- //tables -->
        <link href="//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type="text/css">
        <!-- //lined-icons -->
    </head><body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <div class="header-main">
                    
						

						<div class="row">
								<div class="col-md-8 mb5">
								<img src="images/logo.png" height="80" width="500" alt="" >
								</div>
								<!-- div class="col-md-4 mb5" -->
									<div class="profile_details w3l">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										
												
												<div class="user-name">
													<p><?php echo $firstname; ?>  (logged in)</p>
													<span>Resident</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											
										</a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li>
                                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
								<!-- /div -->
							</div>

							
							
							
							
					
                        <div class="clearfix"></div>
                    </div>
                    <!--heder end here-->
                    <ol class="breadcrumb text-info">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>REQUESTS</li>
                    </ol>

 	<div class="grid-form">

  <div class="grid-form1">
  	       <h3>New Request</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action= "User_Request.php" method="post">
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Request Type: </label>
									<div class="col-sm-8"><select name="RequestType" id="selector1" class="form-control1">
										<option>Kitchen</option>
										<option>Living Room</option>
										<option>Bedroom</option>
										<option>Bathroom</option>
										<option>Patio</option>
										<option>Other</option>
										</select></div>
								</div>

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Priority: </label>
									<div class="col-sm-8"><select name="Priority" id="selector1" class="form-control1">
										<option>Normal</option>
										<option>High</option>
										<option>Low</option>
										</select></div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Contact Number:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="ContactNumber" id="focusedinput">
									</div>
								</div>

								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Description: </label>
									<div class="col-sm-8"><textarea name="Description" id="txtarea1" cols="50" rows="6" class="form-control1"></textarea></div>
								</div>
							<!-- /form -->
						</div>
					</div>
					

      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn">Submit</button>
			</div>
		</div>
	 </div>
	 </form>
    <!-- /form -->
  </div>
 	</div>
 	<!--//grid-->
	
	
	<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
						<div class="w3l-table-info">
					  <h2>Existing Requests</h2>
					    <table id="table-max-height">
						<thead>
						  <tr>
							<th>Request ID</th>
							<th>Date</th>
							<th>Request type</th>
							<th>Description</th>
							<th>Status</th>
							<th>Priority</th>
						  </tr>
						</thead>
						<tbody>
						
						<?php

          while( $row = $result->fetch() ){
            echo
            "<tr>
              <td>{$row['RequestId']}</td>
              <td>{$row['Date']}</td>
              <td>{$row['RequestType']}</td>
              <td>{$row['Description']}</td>
              <td>{$row['Status']}</td>
              <td>{$row['Priority']}</td>
			  </tr>\n";

}

?>
						  
						  
						</tbody>
					  </table>
					</div>
				</div>
			</div>		
	
	
	
	
	
	
	
	
	
	

                    <!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
                    <!-- /script-for sticky-nav -->

                    <!--inner block start here-->
                    <div class="inner-block"></div>
					
					</div>
            </div>
			</div>
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu">
                <header class="logo1">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
                </header>
                <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                <div class="menu">
                    <ul id="menu">
                        <li>
                            <a href="<?php if($_SESSION["Privilege"]=='Resident') {echo 'Resident_Dashboard1.html.php';} else {echo 'Admin_Dash.php';}?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a>
                        </li>
                        <li id="menu-academico">
                            <a href="inbox.php"><i class="fa fa-envelope nav_icon"></i><span>Mails</span><div class="clearfix"></div></a>
                        </li>
                        <li>
                            <a href="<?php if($_SESSION["Privilege"]=='Resident') {echo 'RES_payments_View.php';} else {echo 'Admin_Payment.php';}?>"><i class="fa fa-dollar"></i>  <span>Payments</span><div class="clearfix"></div></a>
                        </li>
                        <li>
                            <a href="<?php if($_SESSION["Privilege"]=='Resident') {echo 'User_Request.html.php';} else {echo 'Admin_Request.html.php';}?>"><i class="fa fa-folder-open"></i>  <span>Requests</span><div class="clearfix"></div></a>
                        </li>
                        <li id="menu-academico">
                            <a href="calendar.php"><i class="fa fa-calendar-o"></i>  <span>Events</span> <div class="clearfix"></div></a>
                        </li>
                        <li>
                            <a href="<?php if($_SESSION["Privilege"]=='Resident') {echo 'RES_View_PersonalDetails.php';} else {echo 'Management.php';}?>"><i class="fa fa-check-square-o nav_icon"></i><span><?php if($_SESSION["Privilege"]=='Resident') {echo 'Personal Info';} else {echo 'Management';}?></span><div class="clearfix"></div></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- /Bootstrap Core JavaScript -->
    


</body></html>
