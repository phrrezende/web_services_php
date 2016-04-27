<?php 
	if(empty($_GET)){
		?>

	<form method="get" name="search">
		Category:
		<select name="category">
			<option value="entertainment">Entertainment</option>
			<option value="sport">Sport</option>
		</select> <br />
		Rows per page:
		<select name="rows">
			<option value="10">10</option>
			<option value="20">20</option>
		</select> <br />

		<input type="submit" value="search" />
	</form>
<?php 
}else{
	echo "wonderfully filtred search results";
}

 