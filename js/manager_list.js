document.querySelectorAll('.manager-nav-row')[1].classList.add('manager-nav-row-hover');

const meals = document.querySelectorAll('.manager-list-item');

meals.forEach(meal=>{
    meal.addEventListener('click',()=>{
        window.location.href =`manager_product.php?id=${meal.querySelector('.meal_id_manager').innerHTML}`;
    })
})

function sortDivsByName() {
    const divs = []; 
  
    const managerItems = document.querySelectorAll('.manager-list-item');
  
    managerItems.forEach(item => {
      const name = item.querySelector('span').innerText; 
      divs.push({ name, element: item }); 
    });
  
    divs.sort((a, b) => a.name.localeCompare(b.name));
  
    const container = document.querySelector('#list-container');
    container.innerHTML = '';

    divs.forEach(item => {
      container.appendChild(item.element);
    });
  }
  
  document.querySelector('#sort-btn').addEventListener('click',()=>{
    sortDivsByName();
  })