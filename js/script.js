let mealsIndex = 0

const mealsImgs = [
    'images/cream-pasta.jpg',
    'images/hamburger.jpg',
    'images/pancake.jpg',
    'images/pizza.jpg',
    'images/ramen.jpg',
    'images/rice.jpg',
    'images/salad.jpg',
    'images/schnitzel.jpg',
    'images/soup.jpg',
    'images/sushi.jpg',
    'images/toast.jpg',
    'images/tomato-pasta.jpg'
]

const mealsNames = [
    'Cream Pasta',
    'Hamburger',
    'Pancake',
    'Pizza',
    'Ramen',
    'Rissoto',
    'Salad',
    'Schnitzel',
    'Soup',
    'Sushi',
    'Toast',
    'Tomato Pasta'
]



// ------------------- Replace with DB after first task ^^^^^^

// -- hamburger start -- //

var icon = document.getElementById("icon");
var icon1 = document.getElementById("a");
var icon2 = document.getElementById("b");
var icon3 = document.getElementById("c");
var nav = document.getElementById('nav');
var blue = document.getElementById("blue");

icon.addEventListener('click', function () {
    icon1.classList.toggle('a');
    icon2.classList.toggle('c');
    icon3.classList.toggle('b');
    nav.classList.toggle('show');
    blue.classList.toggle('slide');
});

// -- hamburger end -- //
