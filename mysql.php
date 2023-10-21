<!doctype html>
<html lang="en">

<head>
  <title>mysql.php file</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
<?php
$server = 'localhost';
$DbUsername = 'root';
$Dbpassword = '';
$database = 'LOGINAPP';

// Create a connection to the MySQL server
// $connection = mysqli_connect($server, $DbUsername, $Dbpassword);

// // Check if the connection to the MySQL server was successful
// if (!$connection) {
//   //die() terminate script , use for error handling and debugging
//   die("Connection to MySQL failed: " . mysqli_connect_error());
// } else {
//   echo ('Connected to MySQL server');
// }

//you can connect to an existing database
 $connection = mysqli_connect($server,$DbUsername,$Dbpassword,$database);
 if (!$connection) {
  //die() terminate script , use for error handling and debugging
  die('Mysql DB Connection failed: '. mysqli_connect_error() );
 }else {
  echo('Mysql DB connected sucessfully');
 };

//you can also connect to specific 
// Create a connection to the MySQL server with a custom port
//$connection = mysqli_connect($server, $DbUsername, $Dbpassword, $database, $port);


if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

// Create database
// $query = 'CREATE DATABASE CustomerDB';
// if (!mysqli_query($connection, $query)){
//   die('CustomerDB creation failed: '.mysqli_connect_error() );
// };
// echo 'CustomerDb created successfully';

//create table
// NOT NULL - Each row must contain a value for that column, null values are not allowed
// DEFAULT value - Set a default value that is added when no other value is passed
// UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
// AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
// PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
// $query = 'CREATE TABLE myGuest(
//   customerID int(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   username varchar(12) NOT NULL,
//   password varchar(12) NOT NULL
// )';
 
//  if (!mysqli_query($connection,$query)) {
//   //mysqli_connect_error() function is used to obtain errors related to database connection issues
//  // mysqli_error($connection) function returns the error message specific to the last MySQL operation performed using the given database connection
//   die('cannot create customer table: '. mysqli_error($connection));
//  }
//  echo 'Customer table created succesfully';

$insertQuery ="INSERT INTO myGuest(username,password)
VALUES('$username','$password')";
 
 if (!mysqli_query($connection,$insertQuery)) {
  die('Table data not inserted: '.mysqli_error($connection));
 }
 echo '<br/>table data inserted sucessfully';

};

// Close the MySQL connection
mysqli_close($connection);
?>


  <main>
    <div class="container">
    <form action="mysql.php" method="post" class="col-6">
<div class=" form-floating ">
  <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <label for="" class="form-label ">Name</label>
  <small id="helpId" class="text-muted">Help text</small>
</div>
<div class="mb-3 form-floating">
  <input type="password" class="form-control" name="password" id="" placeholder="">
  <label for="" class="form-label">Password</label>
</div>
 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>




  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>