<?php
// ***FIX***
// Start or resume the session:
// > session_start();
//
// Generate CSRF token and store it in the session
// > if (!isset($_SESSION['csrf_token']))
// >   $_SESSION['csrf_token'] = bin2hex(random_bytes(32));


if(isset($_GET['Change'])) {
// ***FIX*** (cont'd)
// Verify CSRF token
// > if (!isset($_GET['csrf_token']) || $_GET['csrf_token'] !== $_SESSION['csrf_token'])
// >   die("CSRF Token Validation Failed");

        // Get input
        $pass_new  = $_GET['password_new'];
        $pass_conf = $_GET['password_conf'];

        // Do the passwords match?
        if ($pass_new == $pass_conf) {
                $pass_new = ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $pass_new ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
                $pass_new = md5($pass_new);

                // Update the database
                $current_user = dvwaCurrentUser();
                $insert = "UPDATE `users` SET password = '$pass_new' WHERE user = '" . $current_user . "';";
                $result = mysqli_query($GLOBALS["___mysqli_ston"],  $insert ) or die( '<pre>' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );

                // Feedback for the user
                $html .= "<pre>Password Changed.</pre>";
        } else {
                // Issue with passwords matching
		$html .= "<pre>Passwords did not match.</pre>";
	}

	((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
}
