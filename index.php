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

    <title>Meals List</title>
</head>

<body>
    <header id="meals-header">
        <div id="header-wrapper">
            <a id="logo" href="./index.php"></a>
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
    <main id="home-container">
        <div id="home-wrapper">
            <div id="home-animation">
                <lottie-player src="files/lotties/home-animation.json" background="transparent" speed="1"
                    id="index-animation" autoplay></lottie-player>
                <h1 id="index-slogen" class="h1">For the world,<br>For the people.</h1>
            </div>
            <div id="home-icons">
                <svg id="delivery-icon" onclick="goMealsDelivery()" xmlns="http://www.w3.org/2000/svg" width="25vw"
                    height="15vh" fill="#3579F6" class="bi bi-bicycle" viewBox="0 0 16 16">
                    <path
                        d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z" />
                </svg>
                <svg id="meals-icon" onclick="goMeals()" xmlns="http://www.w3.org/2000/svg" width="25vw" height="15vh"
                    fill="#3579F6" class="bi bi-box2-heart" viewBox="0 0 16 16">
                    <path d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982Z" />
                    <path
                        d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5Zm0 1H7.5v3h-6l2.25-3ZM8.5 4V1h3.75l2.25 3h-6ZM15 5v10H1V5h14Z" />
                </svg>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="js/script.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>