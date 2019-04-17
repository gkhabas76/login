<?php
	require "header.php";
?>

	<main>
		<?php
			if(isset($_SESSION['userId'])){
				echo '<p> logged in </p>';
			}
			else {
				echo '<p> logged out </p>';
			}
		?>
		
		
	</main>
	

<?php

	require "footer.php";
?>