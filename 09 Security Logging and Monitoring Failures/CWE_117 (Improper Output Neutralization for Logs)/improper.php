<?php
// Exploit: $_GET['key'] = "str\n[15-Aug-2024 20:25:11 UTC] Not a key: 1";

if (isset($_GET['key'])) {
        $keys = array(1, 13, 17);

	if (!is_int($_GET['key']))
		error_log("Not an int: {$_GET['key']}");
	else if (!in_array($_GET['key'], $keys))
		error_log("Not key: {$_GET['key']}");
	else
		echo $_GET['key'];
}
