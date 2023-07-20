<?php
    include 'db.php';
    include 'config.php';

    session_start();

    if(!isset($_SESSION["user_id"])) {
        header('Location:'. URL .'index.php'); 
    }
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Meals List</title>
</head>

<body>
    <header id="meals-header">
        <div id="header-wrapper">
            <a id="logo" href="./index.php"></a>
            <!-- <img onclick="goHome()" id="logo" src="images/logo.png" alt=""> -->
            <div class="hamburger-icon" id="icon">
                <div class="icon-1" id="a"></div>
                <div class="icon-2" id="b"></div>
                <div class="icon-3" id="c"></div>
                <div class="clear"></div>
            </div>
            <nav id="nav">
                <div id="nav-container">
                    <a href="./index.php">Home</a>
                    <a href="./meals.php"> Meals</a>
                    <a href="#">Status</a>
                    <a href="#">Profile</a>
                </div>
            </nav>
            <div class="dark-blue" id="blue"></div>
        </div>
    </header>
    <div id="meals">
        <div id="meals-wrapper">
            <!-- <div id="no-meal" class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="6rem" height="6rem" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <div class="card-body">
                    <p class="card-text">There is no meals <br> available currently</p>
                </div>
            </div> -->
            <?php

$query = "SELECT * FROM tbl_201_meal";
$result = mysqli_query($connection,$query);
// $row = mysqli_fetch_array($result);
while($row=mysqli_fetch_assoc($result)) {
    if(is_array($row)) {
        echo '
        <a href="productPage.php?meal_id='.$row['meal_id'].'">
        <div id="cream-pasta-card" class="card">
        <img src="'.$row['photo_src'].'" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">'.$row['name'].'</p></div></div>
        </a>';
    }
}

            ?>
        </div>
    </div>
    <script src="js/functions.js"></script>
    <script src="js/meals.js"></script>
</body>

</html>