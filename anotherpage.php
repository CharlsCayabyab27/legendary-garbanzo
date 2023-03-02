<?php
if (isset($_COOKIE['auth']) == false || $_COOKIE['auth'] != 'ok') 
    header('Location: index.php');


if (!isset($_COOKIE['username'])) 
    echo 'User is not set';
 else 
    echo 'User ' . $_COOKIE['username'] . ' is set<br>';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Still Logged In</title>
</head>

<body>
    You are still logged in...
</body>

</html>