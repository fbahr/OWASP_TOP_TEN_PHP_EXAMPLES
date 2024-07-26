<?php

// exploit: name == "/index.php"

if(isset($_POST['Upload'])) {
    $target_path .= basename($_FILES['uploaded']['name']);
    
    // fix:
    // $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    // $file_name = basename($_FILES['uploaded']['name']);
    // $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    // if (!in_array($file_ext, $allowed_types)) {
    //    $html .= '<pre>Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.</pre>';
    //    exit();
    // }
    //
    // + file_exists()
    // + $_FILES['uploaded']['size'] check

    if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path))
	$html .= '<pre>Your image was not uploaded.</pre>';
    else
	$html .= "<pre>{$target_path} succesfully uploaded!</pre>";
}

