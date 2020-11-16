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
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!</h1>
    </div>
    <fieldset>
      <legend>Order for Food</legend>
      <form name="frmOrder" method="post" action="order.php">
        <p>
          <label for="Foodtype">Food Type: </label>
          <input type="text" name="Foodtype" id="foodtype">
        </p>
        <p>
          <label for="Foodquantity">Food Quantity: </label>
          <input type="text" name="Foodquantity" id="Foodquantity">
        </p>
        <p>
          <input type="submit" name="Submit" id="Submit" value="Submit">
        </form>

    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
