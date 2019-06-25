<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<center>
      <H1>ABC CHANNELING </H1>
      <H2>Health Is Wealth</h2>
    </center>

    <div align="right">
      <form action="logout.php">
      <button type="submit" class="btn btn-light" name="logout" >Log Out</button><Br>
      </form>
      <Br>
      <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost:8080/WebApp/Channel%20a%20doctor.php'">Channel a Doctor</button>
    </div>



</body>
</html>