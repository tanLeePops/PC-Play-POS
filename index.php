<?php
include 'connect.php';
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
POS
</title>
    <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
      /* body {
        padding-top: 60px;
        padding-bottom: 40px;
      } */
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- <div class="container-fluid">
      <div class="row-fluid">
		<div class="span4">
		</div>
	 -->
	<!-- </div> -->
	


	<div class="content">
		<div class="video-container">
			<video autoplay loop plays-inline muted class="backVid">
			<source src = "main/Animations/raizen_loginbg.mp4" type = "video/mp4"> </video> 
		</div>

	<div id="login" >
	
	
		<?php
		if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
			}
			unset($_SESSION['ERRMSG_ARR']);
		}
		?>
		
		<form action="login.php" method="post">
		
					<font style=" font:bold 22px 'Aleo'; color:#fff; text-shadow: 0 0 10px #99e3c3;"><center> PC Play </center></font>
				<br>
		
				
		<div class="input-prepend">
				<span style="height:40px; width:35px; background-color: rgba( 34, 139, 34, 0.7) ; " class="add-on"><i class="icon-user icon-2x"></i></span>
				<input type="text" style="height:40px;"  name="username" Placeholder="Username" required/><br>
		</div>
		<div class="input-prepend">
			<span style="height:40px; width:35px; background-color: rgba( 34, 139, 34, 0.7)" class="add-on"><i class="icon-lock icon-2x"></i></span>
			<input type="password" style="height:40px;" name="password" Placeholder="Password" required/><br>
				</div>
				<div class="qwe">
				<button class="btn btn-large btn-primary btn-block pull-right" href="dashboard.html" type="submit"><i class="icon-signin icon-large"></i> Login</button>
		</div>
				</form>
	</div>


	
</body>
  
</html>