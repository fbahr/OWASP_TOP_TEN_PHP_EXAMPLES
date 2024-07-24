<!DOCTYPE html>
<!-- fix: htmlentities($_GET['name']); -->
<html>
<body>
    <h1>DOM XSS Example</h1>

    <?php
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            echo '<script>\nvar greeting = "<p>Hello, " + ' . $name . ' + "!</p>"; document.getElementById("greeting").innerHTML = greeting;</script>';
        }
    ?>

    <p id="greeting">Enter your name:</p>
    <form>
        <input type="text" name="name">
	<input type="submit" value="Submit">
    </form>
</body>
</html>
