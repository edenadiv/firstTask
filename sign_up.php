<?php 
  include 'db.php';
  include 'config.php';

  session_start();

  if(!isset($_SESSION["user_id"])) {
    header('Location:'. URL .'index.php'); 
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="display:flex; align-items:center; justify-content:center; width:100vw; height:100vh;">
<main>
  <a href="index.php"><img style="height:18vh;" src="images/logo.png" alt=""></a>
  <div class="container mt-5">
  <h2>User Registration Form</h2>
  <form method="post" action="#.php">
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group">
      <label for="type">Type:</label>
      <select class="form-control" id="type-insert" name="type" required>
        <script>
            let opt1;
            let opt2;

    function fetchTypesData() {
  fetch('js/types.json')
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
        console.log(data)
            opt1 = data[0].type;
            opt2 = data[1].type;
            console.log(opt1," ",opt2);
            document.querySelector('#type-insert').innerHTML = `
            <option value="${opt1}">${opt1}</option>
            <option value="${opt2}">${opt2}</option>
            `
    })
    .catch(error => {
      console.error('Error fetching data:', error);
    });
} fetchTypesData();
        

        </script>
        <!-- <option value="user">User</option>
        <option value="admin">Admin</option> -->
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $age = $_POST["age"];
        $type = $_POST["type"];

        $query = "INSERT INTO tbl_201_person (first_name, last_name, email, password, age, type) 
        VALUES ('$first_name', '$last_name', '$email', '$password', $age, '$type')";

        $result = mysqli_query($connection,$query);
        header('Location:'. URL .'index.php');
    }
?>
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
