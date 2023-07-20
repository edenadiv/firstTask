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



// const randNum = Math.floor(Math.random() * (10 - 3) + 3)
// let mealsIndex = 0
// for (let i = 0; i < randNum; i++) {
//     const mealsWrapper = document.querySelector('#meals-wrapper')
//     i == 0 ? mealsWrapper.innerHTML = '' : null
//     mealsIndex = i
//     let meal = document.createElement(`div`)
//     meal = `
//     <div class="card" style="width: 75vw;">
//         <img data-index="${mealsIndex}" src=${products[mealsIndex].src} class="card-img-top" alt="">
//         <div class="card-body">
//             <p class="card-text">${products[mealsIndex].name}</p>
//         </div>
//     </div>
//     `
//     mealsWrapper.innerHTML += meal
// }

// const cards = document.querySelectorAll('.card')

// cards.forEach(card => {
//     card.addEventListener('click', ()=>{
//         location.replace(`../productPage.html?mealIndex=${"0"}`)
//         // getProduct(products[card.target.dataset.index])
//     })
// })

const pastaCream = document.querySelector("#cream-pasta-card")
console.log(pastaCream)
pastaCream.addEventListener("click",()=>{
    window.location.href(`./productPage.php?mealIndex=${"0"}`)
})






