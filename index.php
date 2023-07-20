<?php 
  include 'db.php';
  include 'config.php';

  session_start();

  // if(!isset($_SESSION["user_id"])) {
  //   header('Location:'. URL .'index.php'); 
  // }

  if(!empty($_POST["loginMail"])) { 
    $query = "SELECT * FROM tbl_201_person WHERE email='"
    .$_POST["loginMail"]
    ."' and password = '"
    .$_POST["loginPass"]
    ."'";
  

    // echo $query;

    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result);

    if(is_array($row)) {
      
      $_SESSION["user_id"] = $row['id'];
      $_SESSION["user_type"] = $row['type'];
      $_SESSION["user_name"] = $row['name'];

      if($row['type'] == "admin") {
        header('Location:'. URL .'home.php');
      } else if ($row['type'] == "manager") {
        header('Location:'. URL .'manager.php');
      }

   } else {
    $message = "Invalid email or password";
   }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="display:flex; align-items:center; justify-content:center; width:100vw; height:100vh;">
<main>
  <img src="images/logo.png" alt="">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="#" method="post">
        <div class="form-group">
          <label for="username">Email:</label>
          <input type="text" class="form-control" id="username" name="loginMail" placeholder="Enter your Email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="loginPass" placeholder="Enter your password" required>
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Login</button>
          <a class="icon-link" href="sign_up.php">
            Sign Up
            <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
          </a>
        </div>
        <div class="errormessage"><?php if(isset($message)) { echo $message; }  ?></div>
      </form>
    </div>
  </div>
</div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php 
mysqli_close($connection)
?>
