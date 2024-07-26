<?php

// Exploit:
// 1. Bypass Authentication using supplied password: Username: admin (or any valid username), Password: ' or username = 'admin
// 2. Get password length: Username: admin, Password: ' or string-length(password) = 1 and username = 'admin
// 3. Extract password character by character: Username: admin, Password: ' or username = 'admin' and substring(password,1,1) = 'a

function prevent_xpath_injection(string $input){
    $input = trim($input);
    if (preg_match('/[^a-zA-Z0-9]/',$input)){
        http_response_code(403);
        header('Content-Type: application/json'); 
        $message = array("message" => "Request couldn't process for some reasons");
        echo json_encode($message);
        die();
    }
    else {
        return $input;
    }
}
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Fix:
    // The user input should be checked against a whitelist of acceptable characters.
    // The best approach is to reject any input that does not match the whitelist and not sanitize it therefore characters that may be used to
    // interfere with the XPath query should be blocked, including ( ) [ ] ' = : , * / .
    //  
    // $username = prevent_xpath_injection($username);
    // $password = prevent_xpath_injection($password);

    $xml = simplexml_load_file('sensitive-data.xml');
    $result = $xml->xpath("//users/user[username = '$username' and password = '$password']");
    if (!empty($result)){
        http_response_code(200); 
        header('Content-Type: application/json'); 
        echo json_encode($result[0]);
    }
    else {
        http_response_code(401);
        header('Content-Type: application/json'); 
        $message = array("message" => "username or password doesn't correct");
        echo json_encode($message);
    }
}
else {
    $html = <<<HTML
                <form action="xpath.php" method="POST">
                    Username <input type="text" name="username"><br>
                    Password <input type="text" name="password"><br>
                    <input type="submit" value="submit" name="submit">
                </form>
            HTML;
    echo $html;
}
