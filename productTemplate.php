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
    <title>Add Meal</title>
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
    <main id="product-template-container">
        <div id="product-template-wrapper">
            <form>
                <div id="product-template-div1">
                    <div>
                        <div class="mb-3">
                            <input placeholder="Meal Name" type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                id="flexRadioDisabled1">
                            <label class="form-check-label" for="flexRadioDisabled1">
                                Appetizer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                id="flexRadioCheckedDisabled2" checked>
                            <label class="form-check-label" for="flexRadioCheckedDisabled2">
                                Main Course
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                id="flexRadioCheckedDisabled3">
                            <label class="form-check-label" for="flexRadioCheckedDisabled3">
                                Dessert
                            </label>
                        </div>
                    </div>
                    <div id="template-image"><br><br>Image</div>
                    <!-- <div id="img-form">
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" color="#a5a6a5" fill="currentColor"
                            class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                        </svg>
                    </div> -->
                </div>
                <div class="input-group">
                    <textarea placeholder="Description" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group">
                    <textarea placeholder="Ingredients" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Succeed</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    Meal Added To The List Succeesfully
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div>
    </main>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="js/productPage.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/script.js"></script>
</body>

</html>