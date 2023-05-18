const products = [
    {
        name: "Pasta Cream",
        src: "images/cream-pasta.jpg",
        dishType: "Main Course",
        description: "Creamy pasta perfection: Silky strands of pasta enrobed in a luscious cream sauce, delivering an irresistible combination of smoothness and flavor.",
        ingredients: "Pasta, cream, butter, garlic, Parmesan cheese, salt, black pepper.",
        icon: null
    },
    {
        name: "Tomato Pasta",
        src: "images/tomato-pasta.jpg",
        dishType: "Main Course",
        description: "A vibrant medley of al dente pasta tossed with a tangy tomato sauce, creating a classic and satisfying combination. The robust flavors of ripe tomatoes and aromatic herbs meld together, providing a comforting and mouthwatering experience.",
        ingredients: "Pasta, tomatoes, olive oil, garlic, onion, basil, salt, black pepper, Parmesan cheese.",
        icon: null
    },
    {
        name: "Hamburger",
        src: "images/hamburger.jpg",
        dishType: "Main Course",
        description: "Juicy grilled patties nestled in soft buns, adorned with fresh toppings for a burger experience that's hard to resist. The perfect balance of flavors and textures, each bite delivers a satisfying blend of savory meat, crisp vegetables, and tangy condiments.",
        ingredients: "Ground beef, hamburger buns, lettuce, tomato, onion, pickles, cheese, ketchup, mustard, mayonnaise, salt, black pepper.",
        icon: null
    },
    {
        name: "Pancake",
        src: "images/pancake.jpg",
        dishType: "Dessert",
        description: "Fluffy and golden, these pancakes are a breakfast delight. With a light and airy texture, they melt in your mouth as you drizzle them with maple syrup. Indulge in a stack of these comforting treats that are sure to start your day with a smile.",
        ingredients: "Flour, milk, eggs, sugar, baking powder, salt, butter.",
        icon: null
    },
    {
        name: "Pizza",
        src: "images/pizza.jpg",
        dishType: "Main Course",
        description: "Savor the perfect harmony of flavors with our mouthwatering pizza.",
        ingredients: "Pizza dough, pizza sauce, mozzarella cheese, toppings (such as pepperoni, mushrooms, bell peppers, onions, olives), olive oil, garlic, salt, dried oregano, crushed red pepper flakes.",
        icon: null
    },
    {
        name: "Ramen",
        src: "images/ramen.jpg",
        dishType: "Main Course",
        description: "Slurp your way to satisfaction with a bowl of piping hot ramen.",
        ingredients: "Ramen noodles, broth (such as chicken, beef, or vegetable), soy sauce, miso paste, green onions, sliced pork or chicken, soft-boiled egg, nori (seaweed), sesame oil, garlic, ginger, salt, pepper.",
        icon: null
    },
    {
        name: "Rice",
        src: "images/rice.jpg",
        dishType: "Main Course",
        description: "Steamed to perfection, our fluffy rice serves as the ideal foundation for any meal.",
        ingredients: "Rice, water, salt",
        icon: null
    },
    {
        name: "Salad",
        src: "images/salad.jpg",
        dishType: "Main Course",
        description: "Fresh, crisp, and bursting with vibrant flavors, our salad is a refreshing culinary masterpiece. A colorful medley of crisp greens, juicy tomatoes, crunchy cucumbers, and zesty dressings creates a harmonious balance of textures and tastes.",
        ingredients: "Lettuce (such as romaine, iceberg, or mixed greens), tomatoes, cucumbers, carrots, bell peppers, red onions, olives, feta cheese, dressing (such as vinaigrette, ranch, or Caesar)",
        icon: null
    },
    {
        name: "Schnitzel",
        src: "images/schnitzel.jpg",
        dishType: "Main Course",
        description: "Crispy on the outside, tender on the inside, our schnitzel dish is a tantalizing treat for the senses. Each succulent cutlet is coated in a golden breadcrumb crust, delivering a satisfying crunch with every bite.",
        ingredients: "Chicken cutlets, flour, eggs, breadcrumbs, salt, black pepper, paprika, vegetable oil ",
        icon: null
    },
    {
        name: "Soup",
        src: "images/soup.jpg",
        dishType: "Appetizer",
        description: "Savor the heartwarming goodness of our soul-soothing soup. A comforting blend of flavorful broth, tender vegetables, and nourishing ingredients come together to create a bowl of pure comfort.",
        ingredients: "Broth, vegetables (carrots, celery, onions), garlic, herbs (such as thyme or parsley), protein (chicken, beef, or tofu), noodles.",
        icon: null
    },
    {
        name: "Sushi",
        src: "images/sushi.jpg",
        dishType: "Main Course",
        description: "Elevate your dining experience with our sushi, a tantalizing fusion of flavors and textures. Expertly rolled and meticulously crafted, each piece showcases the finest ingredients from the sea and land. Indulge in this elegant culinary delight that celebrates the art of Japanese cuisine.",
        ingredients: "Sushi rice, nori (seaweed sheets), raw fish (such as tuna, salmon, or shrimp), vegetables (such as cucumber, avocado, or carrots), soy sauce, wasabi, pickled ginger, rice vinegar, sugar, salt.",
        icon: null
    },
    {
        name: "Toast",
        src: "images/toast.jpg",
        dishType: "Appetizer",
        description: "Start your day with a simple pleasure - perfectly toasted bread that's golden and crispy. Slathered with creamy butter or topped with your favorite spread, each bite brings comfort and warmth. A timeless classic that adds a touch of coziness to any morning routine.",
        ingredients: "Bread, butter or margarine, jam.",
        icon: null
    }
]

function goHome() {
    location.replace('./index.html')
}

function goMeals() {
    location.replace('./meals.html')
}

function goMealsDelivery() {
    const isDelivery = true; // to use later
    location.replace('./index.html')
}

const getProduct = (product) => {
    document.querySelector('#meals-wrapper').remove()
    const productPageSection = document.createElement('div')
    productPageSection.innerHTML =
        `
    
`
    document.querySelector('#meals').append(productPageSection)
}