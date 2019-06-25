<?php 
session_start();
?>

<html>
<title>Channel a Doctor</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
<center>
<h1>Channel Your Doctor</h1>
</center>
<div align="right">
<button type="submit" onclick="window.location.href='http://localhost:8080/WebApp/Channeling.php'" class="btn btn-primary">Channel A Doctor</button>
</div>
<div class="container">
  <h2>Our Doctors</h2>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Doctor</th>
        <th>Field</th>
        <th>Hospital</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr.Wilfred Wijesignha</td>
        <td>VP</td>
        <td>National Hospital</td>
      </tr>
      <tr>
      	<td>2</td>
      	<td>Dr.Lakshman Senanayake</td>
      	<td>VOG</td>
      	<td>Castle Street Hospital for women</td>
      </tr>
      <tr>
      	<td>3</td>
      	<td>Dr.Ranjan Dias</td>
      	<td>Surgeon</td>
      	<td>Lady Ridgeway Hospital</td>
      </tr>
      <tr>
      	<td>4</td>
      	<td>Dr.Ruwan Ekanayake</td>
      	<td>Cardiologist</td>
      	<td>National Hospital</td>
      </tr>
      <tr>
      	<td>5</td>
      	<td>Dr.Sunil Perera</td>
      	<td>Neurologist</td>
      	<td>National Hospital</td>
      </tr>
      <tr>
      	<td>6</td>
      	<td>Dr.Premalal De Mel</td>
      	<td>ENT surgeon</td>
      	<td>National Hospital</td>
      </tr>
      <tr>
      	<td>7</td>
      	<td>Dr.Malik Samarasinghe</td>
      	<td>Paediatrician</td>
      	<td>National Hospital</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

</body>

</html>