<?php

include("config.php");
session_start();

{
// username and password sent from form 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 


$sql="SELECT id FROM authors WHERE email='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

//session_register("myusername");
$_SESSION['login_user']=$myusername;
if($myusername == 'admin'){
header("location: list_files.php");
}
else
{
header("location: upload.php");
}
}
else 
{
$error="Your Login Name or Password is invalid";
echo $error;
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Women in Science and Engineering Conference | SDMCET Dharwad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
   .face 
   {
	float: left;
	border-right: solid 1px #DEDEDE;
	border-bottom: solid 1px #DEDEDE;
	width: 60px;
	height: 60px;
	padding: 4px;
	background-color: white;
	margin-right: 5px;
	}
	.span7 img
	{
		max-width:550px;
		border: 1px solid #CCC;
		padding: 9px;
		background: white;
	}
	
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    
  </head>

  <body style="background:url(grids.gif)">
	  <div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <a class="brand" href="index.html">WISE</a>
	          <div class="nav-collapse">
	            <ul class="nav">
	              <li class="active"><a href="#">Conference</a></li>
	              <li><a href="register.html">Register</a></li>
	              <li><a href="#">Location</a></li>
	<li><a href="#">Contact</a></li>
	  
	
	            </ul>
	           
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	
  <div class="container">
	
  <div class="row">
	
	
  <div class="span8">
	

	<form class="form-horizontal" id="registerHere" method='post' action='login.php'>
	  <fieldset>
	    <legend>Login</legend>
	    
	
	 <div class="control-group">
		<label class="control-label" for="input01">Email</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_email" name="email" rel="popover" data-content="What�s your email address?" data-original-title="Email">
	       
	      </div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="input01">Password</label>
	      <div class="controls">
	        <input type="password" class="input-xlarge" id="pwd" name="password" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" >
	       
	      </div>
	</div>
	
	
	
	 
	
	
	<div class="control-group">
		<label class="control-label" for="input01"></label>
	      <div class="controls">
	       <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">login</button>
	       
	      </div>
	
	</div>
	
	
	   
	  </fieldset>
	</form>
	</div>
	
		</div>
        
        
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
	 <div class="container">
        <p align="right">Credits :<a href="http://home.ishashisp.com" target="_blank"</a> Shashi Essp</p>
</div>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
