<!DOCTYPE html>
<!-- fix: htmlentities($_GET['search']) -->
<html>
<body>
	<form id="form">
		<input type="text" name="search">
		<input type="submit">
	</form>
	<?php
		session_start();
		if (array_key_exists('search', $_GET) && $_GET['search'] != NULL) {
			echo '<pre>No result for : ' . $_GET['search'] . '</pre>';
		}
	?>
</body>
</html>

