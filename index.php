<?php
session_start();
if(isset($_SESSION['name'])){
 $_SESSION['msg'] = "You must log in first to view this page";
 header("location : login.html");

}
if(isset($_GET['logout'])){

session_destroy();
unset($_SESSION['name']);
header("location : login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
</head>
<body>
<h1>This is the homepage</h1>
<?php
if(isset($_SESSION['success']))?>
<div>
<h3>

<?php

echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>

//if the user logs in print information about this

<?php if(isset($_SESSION['username'])) : ?>
<h3>Welcome <strong><?php echo $_SESSION['name']

<button><a href="index.php?logout='1'"></a></button>

<?php endif ?>

</body>
</html>
