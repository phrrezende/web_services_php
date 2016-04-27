<?php 
	
	if (empty($_POST)) {
?>
	<form name="user" method="post">
		Email:
		<input type="text" name="email" /> <br />
		Display nome:
		<input type="text" name="display_name" /> <br />
		<input type="submit" value="go" />
	</form>
	<?php 
	}else{
		echo "New user email: ".filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	}

 