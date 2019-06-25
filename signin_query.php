 <?php

  $name = $_POST['Name'];
  $age = $_POST['Age'];
  $address = $_POST['Address'];
  $gender = $_POST['gender'];
  $phone = $_POST['Phone'];
  $email = $_POST['email'];
  $pword = $_POST['password'];

  //Database connection
  $con = mysqli_connect('localhost', 'root', '', 'insertdata');      
  if(!$con) {
    echo "Error: failed to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  // query to add user to db
  $query = "INSERT INTO users(Name, Age, Address, gender, Phone, email, password) VALUES('$name', '$age', '$address', '$gender', '$phone', '$email', '$pword')";

  // execute query to db
  $result = mysqli_query($con, $query);

  if( !$result ) {
    exit("Error: failed to execute query. " . mysqli_error($con));
  }

  // close connection to db
  mysqli_close($con);
  echo "<script>alert('Congratulations $name, your account has been created successfully!')</script>" . PHP_EOL;
  header('refresh:3; URL=http://localhost:8080/WebApp/login.php');
?>