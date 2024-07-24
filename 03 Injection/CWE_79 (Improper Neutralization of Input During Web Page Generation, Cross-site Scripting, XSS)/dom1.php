<!DOCTYPE html>
<!-- fix: htmlentities($_GET['name']); -->
<html>
<body>
<form method="get">
	<input type="text" name="name">
	<input type="submit">
	<?php 
		if (isset($_GET['name']))
		{
			$name = $_GET['name'];
			echo '<script>document.write("<p>Hello, ' . $name . '!</p>");</script>';
		}
	?>
</form>
</body>
</html>
