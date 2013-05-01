<?php
include('lock.php');
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
	              <li><a href="location.html">Location</a></li>
	<li><a href="contact.html">Contact</a></li>
	<li><a href="logout.php">Logout</a></li>
	  
	
	            </ul>
	           
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	
  <div class="container">
	
  <div class="row">
	<h5> Please Upload Your Conference Paper from Here! </h5>
	
  <div class="span8" align="center">
	
      
      <form action="add_file.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file"></br>
        <input type="submit" class="btn btn-success"  value="Upload file">
    </form>
    
	
     <div>
	
	</div>	
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
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
