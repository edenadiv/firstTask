document.querySelectorAll('.manager-nav-row')[1].classList.add('manager-nav-row-hover');

const meals = document.querySelectorAll('.manager-list-item');

meals.forEach(meal=>{
    meal.addEventListener('click',()=>{
        window.location.href =`manager_product.php?id=${meal.querySelector('.meal_id_manager').innerHTML}`;
    })
})