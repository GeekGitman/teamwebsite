<html>
  <head>
  <title>Join us</title>
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
                <li><a href="#">Join us</a></li>
              </ul>
        </div>
	</nav>
	<div class="jumbotron"> 
        <div class="container">
            <h1>Join us!</h1>
            <p>Join our mailist and you will recieve fresh news and infomation about our open activities and seminars. To take an active part of our annual work, just fill in your name and email below!</p>
        </div>
    </div>
    <div class="container">
    <form>
        <div class="form-group">
            <label for="joinus_emai">Email address</label>
            <input type="email" class="form-control" id="joinus_email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="joinus_pwd">Your name</label>
            <input type="text" class="form-control" id="joinus_pwd" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    <?php include_once(__DIR__."/../config/include_js_css.php");?>
    </body>
	
