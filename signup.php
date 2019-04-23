<?php
	require "header.php";
    require 'csrf.php';
?>

<div class="signup-form">
    <?php 
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p> Please fill the blank fields. </p>';
                }
                else if($_GET['error'] == "invaliduidemail"){
                    echo '<p> Invalid username and e-mail. </p>';
                }
                if($_GET['error'] == "invaliduid"){
                    echo '<p> Invalid Username. </p>';
                }
                else if($_GET['error'] == "invalidemail"){
                    echo '<p> Invalid e-mail. </p>';
                }
                if($_GET['error'] == "passwordcheck"){
                    echo '<p> Passwords do not match. </p>';
                }
                else if($_GET['error'] == "usertaken"){
                    echo '<p> Username already exist. </p>';
                }
                
            }
            // else if($_GET['signup'] == "success"){
            //     echo '<p> Signup successful </p>';
            // }
            
        ?>
    <form action="includes/signup.inc.php" method="post">
		<h2>Register</h2>
        
        <div class="form-group">
			<input type="text" class="form-control" name="uid" placeholder="Username" >      	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="email" placeholder="Email" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm-pwd" placeholder="Confirm Password">
        </div>        
        <input type="hidden" name="token" value="<?php echo $token; ?>" >
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="signup-submit">Signup</button>
        </div>
    </form>
	
</div>

<?php
	require "footer.php";

?>