

<!DOCTYPE html>
<html>
<head>
<title>Sign Up </title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <center>
     <h1>Please enter your details</h1>
     
     <form action="signin_query.php" method="post">
      <label>Patient name &nbsp: </label>
      <input type="text" id="Name" name="Name" required=""><Br><Br>
      <label>Age  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
      <input type="text" id="Age" name="Age" required=""><Br><Br>
      <label>Address  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   :</label>
      <input type="text" id="Address" name="Address" required=""><Br><Br>
      <label>Gender   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   : </label>
      <input type="radio" name="gender" id="Male"   value="m">Male&nbsp
      <input type="radio" name="gender" id="Female" value="f">Female<Br><Br>
      <label>Phone number &nbsp&nbsp : </label>
      <input type="text" id="Phone" name="Phone" required=""><Br><Br>
      <label>Email  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  : </label>
      <input type="text" id="email" name="email" required=""><Br><Br>
      <label>Create password &nbsp:</label>
      <input type="password" id="password" name="password" required=""><Br><Br>

      <button type="submit" class="btn btn-primary"  >Register</button>&nbsp
      <button type="reset" class="btn btn-primary"  >Reset</button>&nbsp
      <button type="button" onclick="window.location.href='http://localhost:8080/WebApp/Home.php'" class="btn btn-primary" >Cancel</button>
     </form>
  </center>
     

</body>

</html>