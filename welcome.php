<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .section-nav {
            padding-bottom: 0;
            border-radius: none;
            box-shadow: none;
            background-color: #37456b;
            flex 0 0 50px;
        }
    </style>
</head>
<body>
    <div class="section-nav">
    
    </div>
    <div class="page-header">
        <h1>Hi, <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>. Welcome to Split-Money.</h1>
    </div>
    <p>
        <a href="/add/index.html" class="btn btn-primary">Add a group</a>
        <a href="/add/addindiv.html" class="btn btn-primary">Add indivisual expense</a>
        <a href="/add/viewgrp.html" class="btn btn-primary">View/Edit a group</a>
        <a href="/add/viewpass.html" class="btn btn-primary">View passbook</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>