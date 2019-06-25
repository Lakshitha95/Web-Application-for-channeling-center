<?php 
session_start();
?>

<html>
<head>
<title>Channelling</title>
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<center>
		<H1>Channelling</H1><Br><Br>
	<form>
      <label>Patient name &nbsp: </label>
      <input type="text" name="txtName" required=""><Br><Br>
      <label>Age  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
      <input type="text" name="txtAge" required=""><Br><Br>
      <label>Address  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   :</label>
      <input type="text" name="txtAddress" required=""><Br><Br>
      <label>Gender   &nbsp&nbsp&nbsp&nbsp   : </label>
      <input type="radio" name="gender" value="male">Male&nbsp
      <input type="radio" name="gender" value="female">Female<Br><Br>
      <label>Phone number &nbsp&nbsp : </label>
      <input type="txt" name="txtphone" required=""><Br><Br>
      <label>Date : </label>
      <input type="Date" name="Date" required=""><Br><Br>
      <label>Doctor :</label>
      <select>
         <option value="VP"           >VP</option>
         <option value="VOG"          >VOG</option>
         <option value="Surgen"       >Surgen</option>
         <option value="Cardiologist" >Cardiologist</option>
         <option value="Neurologist"  >Neurologist</option>
         <option value="ENT"          >ENT surgeon</option>
         <option value="Paediatrician" >Paediatrician</option>
      </select><Br><Br>
      <label>Time   &nbsp&nbsp&nbsp&nbsp   : </label>
      <input type="radio" name="Time" value="Morning">Morning&nbsp
      <input type="radio" name="Time" value="Evening">Evening<Br><Br>
      <button type="submit" class="btn btn-light">Confirm</button>&nbsp
      <button type="submit" class="btn btn-light">Download PDF</button>
      <button type="button" class="btn btn-light" onclick="window.location.href='http://localhost:8080/WebApp/Logged.php'" class="btn btn-primary">Cancel</button>
    </form>
    </center>

</body>









</html>