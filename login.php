
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <center>
     <h1>Please log in </h1><Br>
  <form  method="POST" action="logged_page.php">
     <label>User Name:</label>
     <input type="text" placeholder="Example@site.com" id="user" name="user"><Br>
     <Br><label>Password:</label>&nbsp&nbsp
     <input type="Password" placeholder="Password" id="pass" autocomplete="off" name="pass"><Br><Br>
     &nbsp&nbsp&nbsp&nbsp&nbsp
     <button type="submit" value ="Login" name="Login" class="btn btn-primary" >Log in</button>&nbsp
     <button type="reset" class="btn btn-primary" >Clear</button>

     
  </form>
     
      <br>
      <label>If not please </label>&nbsp
      <button type="button" class="btn btn-light" onclick="window.location.href='http://localhost:8080/WebApp/sign%20in.php'">Sign Up</button>
     </center>


</body>

</html>

