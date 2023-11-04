<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session page</title>
</head>
<body>
    <?php

    // this will display content from previous code
    echo $_SESSION["name"] ;
    // This is to remove all session variables
session_unset();

// This is to destroy the session
session_destroy();
    ?>
</body>
</html>