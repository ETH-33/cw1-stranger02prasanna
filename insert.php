<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
   // Retrieve form data

  $name = $_POST['name'];

  $password = $_POST['password'];
  
  $email = $_POST['email'];
  
  $contact = $_POST['contact'];
  
  // Perform any necessary data validation here...
  
  // Prepare the SQL statement
  
  $sql = "INSERT INTO contacts (name, password, email, contact) VALUES (?, ?, ?, ?)"
  
  // Create a prepared statement
  
  $stmt = mysqli_prepare($conn, $sql);
  

  
  // Bind the parameters to the statement mysqli_stmt_bind_param($stmt, "sss", Sname, Semail, Smessage);
  
  // Execute the statement
  
  if (mysqli_stmt_execute($stmt)) {
  
  echo "Data inserted successfully.";
  
  } else {
  
  echo "Error: " mysqli_stmt_error($stmt);
  
  }
  
  // Close the statement mysqli_stmt_close($stmt);
  
  // Close the database connection mysqli_close($conn);)

?>
