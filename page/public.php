<html>
  <head>
  <title>Our Website</title>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">FUTURE SAFETY</a>
        </div>
		<div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="public.php">Home</a></li>
                <li class="active"><a href="logincheck.php">Login</a></li>
                <li><a href="joinus.php">Join us</a></li>
              </ul>
        </div>
	</nav>
	<div>
	    <br></br>
	    <br>
	    <img src="../public/images/website_public1.gif" style="width:100%;">
	    <div class="container" style="width:90%;position:relative;top:80%;">
	        <form class="form-inline">
	            <input type="text" class="form-control" id="publicsearchcontent" placeholder="search something" style="width:80%">
	            <buton type="submit" class="btn btn-success">GO!</button>>
	        </form>
	    </div>
	</div>
	<br>
	<footer>
	    <div style="background:#e0e0e0;height:110px;">
	      <div class="row footer-bottom" style="position:relative;top:35%">
			<center>&copy Student Group of Future Safety, Tsinghua University. 2015-2016</center>
			<center class="help-block">Designed and maintained by Y.C. Shi</center>
		  </div>
		</div>
  </footer>
	<?php include_once(__DIR__."/../config/include_js_css.php");?>
	</body>
