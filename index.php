<?php
// set cookies
if (isset($_POST['submit'])) {

    if(empty($_POST['username']) || empty($_POST['password'])) 
     echo 'Please enter a valid username and password';
     else {
        $username = htmlentities($_POST['username']);
        setcookie('auth', 'ok', time() + 3600);
        setcookie('username', $username, time() + 3600);
        header('Location: loggedin.php');
   
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" name="submit" value="Log Me In">
    </form>
</body>
</html>