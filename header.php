<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <?php 
    	if(isset($_GET['error'])){

    		if($_GET['error'] == "wrongpwd"){
    			
                    echo '<script type = "text/javascript"> alert("Wrong Password"); </script>';
                }
            else if($_GET['error'] == 'nouser'){
            	echo '<script type = "text/javascript"> alert("Username does not match"); </script>';
            }
           
    	}
    	if(isset($_SESSION['userId'])){
				echo '<form class="form-inline my-2 my-lg-0 logout" action="includes/logout.inc.php" method="post">
        				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
    				</form>';
		}
		else {
				echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
      					<input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/Email">
      					<input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
      					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
    					</form>
    				<div class="form-inline signup">
    					<a href="signup.php">Signup</a>
    				</div>';
		}
    ?>
    
    
  </div>
</nav>
</body>
</html>