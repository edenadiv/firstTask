document.querySelectorAll('.manager-nav-row')[0].classList.add('manager-nav-row-hover')

document.querySelectorAll('.manager-prefences-icon')[3].classList.add('hover')

const meals = document.querySelectorAll('.manager-card');

meals.forEach(meal=>{
    meal.addEventListener('click',()=>{
        window.location.href =`manager_product.php?id=${meal.querySelector('.meal_id_manager_card').innerHTML}`;
    })
})