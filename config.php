<?php
    /* define credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'demo');

    // Attempt to connect to MySQL database

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // check connection

    if ($link === false) {
        die("ERROR");
    }

?>


