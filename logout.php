<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

</head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

<h1>You are now logged out. </h1>
<a href="login.php" type="btn">Log in</a>
    
</body>
</html>
