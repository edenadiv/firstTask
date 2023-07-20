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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Meal Page</title>
</head>

<body>
    <header id="meals-header">
        <div id="header-wrapper">
            <a id="logo" href="index.php"></a>
            <div class="hamburger-icon" id="icon">
                <div class="icon-1" id="a"></div>
                <div class="icon-2" id="b"></div>
                <div class="icon-3" id="c"></div>
                <div class="clear"></div>
            </div>
            <nav id="nav">
                <div id="nav-container">
                    <a href="index.php">Home</a>
                    <a href="meals.php"> Meals</a>
                    <a href="#">Status</a>
                    <a href="#">Profile</a>
                </div>
            </nav>
            <div class="dark-blue" id="blue"></div>
        </div>
    </header>
    <main id="product-page-container">
        <?php
            $query = "SELECT * FROM tbl_201_meal WHERE meal_id=".$_GET['meal_id'] ;
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_array($result);
            if(is_array($row)) {

            echo '
            <section id="product-page-section">
            <div id="product-top">
                <img id="product-img" src="'.$row['photo_src'].'" alt="">
            </div>
            <div id="product-bottom">
                <div>
                    <div id="product-bottom-first">
                        <h2>'.$row['name'].'</h2>
                        <h5 id="course-type">'.$row['dish_type'].'</h5>
                        <p>'.$row['description'].'</p>
                    </div>
                    <h5>Ingredients</h5>
                    <p>'.$row['ingredients'].'</p>
                </div>
                <div>
                    <!-- make this btn in js -->
                    <div id="confirm-btn-product" style="color:#017AFE">Confirm</div>
                    <div style="display: none;" id="product-icon"></div>
                </div>
            </div>
        </section>
            ';
        }
        ?>
        <!-- <section id="product-page-section">
            <div id="product-top">
                <img id="product-img" src="./images/cream-pasta.jpg" alt="">
            </div>
            <div id="product-bottom">
                <div>
                    <div id="product-bottom-first">
                        <h2>Pasta Cream</h2>
                        <h5 id="course-type">Main Course</h5>
                        <p>Creamy pasta perfection: Silky strands of pasta enrobed in a luscious cream sauce, delivering
                            an irresistible combination of smoothness and flavor. Indulge in this comforting dish that
                            will leave you craving for more.</p>
                    </div>
                    <h5>Ingredients</h5>
                    <p>Pasta, cream, butter, garlic, Parmesan cheese, salt, black pepper.</p>
                </div>
                <div>

                    <div id="confirm-btn-product" style="color:#017AFE">Confirm</div>
                    <div style="display: none;" id="product-icon"></div>
                </div>
            </div>
        </section> -->
    </main>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="js/productPage.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/script.js"></script>
</body>

</html>