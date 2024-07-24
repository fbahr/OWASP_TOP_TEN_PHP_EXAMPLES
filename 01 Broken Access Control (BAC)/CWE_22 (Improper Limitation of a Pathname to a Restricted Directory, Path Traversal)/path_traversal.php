<?php
// fix: $_GET['dl']=preg_replace('/[^a-z0-9]/i','',$_GET['dl']);

if (!empty($_GET['dl'])) {
    $filename = "/data/".$_GET['dl'];
    if (file_exists($filename))
        echo file_get_contents($filename);
}
