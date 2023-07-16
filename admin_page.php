<?php
define('access',true);
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login.php');
   exit;
}

// Add user
if (isset($_POST['add_user'])) {
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $user_type = $_POST['user_type'];

   $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name','$email','$pass','$user_type')";
   mysqli_query($conn, $insert);
   header('location:admin_page.php');
   exit;
}

// Delete user
if (isset($_GET['delete_user'])) {
   $user_id = $_GET['delete_user'];
   $delete = "DELETE FROM user_form WHERE id = $user_id";
   mysqli_query($conn, $delete);
   header('location:admin_page.php');
   exit;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>

   <link rel="stylesheet" href="css\login.css">
   
</head>
<body>
   <div class="container">
      <div class="content">
         <h3>hi, <span>admin</span></h3>
         <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>This is an admin page</p>
         <button class="gradient-button"><a href="./logout.php">Log Out</a></button>
      </div>
     
      <div class="user-list">
         <h2>User List</h2>
         <table>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>User Type</th>
               <th>Action</th>
            </tr>
            <?php
            $select_users = "SELECT * FROM user_form";
            $result_users = mysqli_query($conn, $select_users);
            while ($row = mysqli_fetch_assoc($result_users)) {
               $user_id = $row['id'];
               $user_name = $row['name'];
               $user_email = $row['email'];
               $user_type = $row['user_type'];
               echo "<tr>";
               echo "<td>$user_name</td>";
               echo "<td>$user_email</td>";
               echo "<td>$user_type</td>";
               echo "<td><a href='admin_page.php?delete_user=$user_id'>Delete</a></td>";
               echo "</tr>";
            }
            ?>
         </table>
      </div>
      <div class="add-user-form">
         <h2>Add User</h2>
         <form action="" method="post">
            <input type="text" name="name" required placeholder="Enter name">
            <input type="email" name="email" required placeholder="Enter email">
            <input type="password" name="password" required placeholder="Enter password">
            <select name="user_type">
               <option value="user">User</option>
               <option value="admin">Admin</option>
            </select>
            <input type="submit" name="add_user" value="Add User" class="form-btn">
         </form>
      </div>
   </div>
</body>
</html>
