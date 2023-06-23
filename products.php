<?php
ob_start();
?>

<div class="header">

    <!-- Filter -->
    <div class="filter" id="filter">
        <p class="px-4 ctg" onclick="filterCategory()">All</p>
        <p class="pr-4 ctg" onclick="filterCategory('levis')">Levi`s</p>
        <p class="pr-4 ctg" onclick="filterCategory('adidas')">Adidas</p>
        <p class="pr-4 ctg" onclick="filterCategory('nike')">Nike</p>
        <p class="pr-4 ctg" onclick="filterCategory('hm')">H&M</p>
        <p class="pr-4 ctg" onclick="filterCategory('dior')">Dior</p>
    </div>

    <!-- Search Box -->
    <div>
        <div class='search-box'>
            <input class="search-text" type="text" placeholder="Search product name" id="search">
            <a href="#" class="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="grid-container" id="all"></div>

<?php
$content = ob_get_clean();
require('template.php');
?>

<script>
    // Dummy Product
        
    let products = [
        {id: 1,name: "Levi's® Men's Vad Short",price: 599900,category: 'levis',image: 'levis/levis-1.avif'},
        {id: 2,name: "Levi's® Men’s XX Authentic Short III",price: 549900,category: 'levis',image: 'levis/levis-2.avif'},
        {id: 3,name: "Levi's® Men's XX Chino Standard Taper Shorts",price: 549900,category: 'levis',image: 'levis/levis-3.avif'},
        {id: 4,name: "Superstar Golf Shoes",price: 899900,category: 'adidas',image: 'adidas/adidas-1.webp'},
        {id: 5,name: "Samba Golf Shoes",price: 449900,category: 'adidas',image: 'adidas/adidas-2.webp'},
        {id: 6,name: "Sepatu Pure.1 Firm Ground",price: 1249900,category: 'adidas',image: 'adidas/adidas-3.webp'},
        {id: 7,name: "Nike Blazer Low '77 Vintage",price: 1399900,category: 'nike',image: 'nike/nike-1.webp'},
        {id: 8,name: "Nike Dunk High Retro Premium",price: 1949900,category: 'nike',image: 'nike/nike-2.webp'},
        {id: 9,name: "Nike Dunk Low Retro Premium",price: 1749900,category: 'nike',image: 'nike/nike-3.webp'},
        {id: 10,name: "CD Icon Relaxed-Fit T-Shirt",price: 50599900,category: 'dior',image: 'dior/dior-1.avif'},
        {id: 11,name: "CD Diamond Tailored Top",price: 5549900,category: 'dior',image: 'dior/dior-2.avif'},
        {id: 12,name: "PLEATED PANTS",price: 5149900,category: 'dior',image: 'dior/dior-3.avif'},
    ];

    // Looping data product saat load

    var template = document.getElementById('all');
    var tmp = getResult(products);
    template.innerHTML = tmp;

    // Filter Product

    function filterCategory(param) {
        const result = products.filter(word => word.category.match(param));
        var template = document.getElementById('all');
        var tmp = getResult(result);
        template.innerHTML = tmp;
    }

    // Search Product

    document.getElementById("search").onkeyup = function (e) {
        const result = products.filter(word => word.name.match(e.target.value));
        var template = document.getElementById('all');
        var tmp = getResult(result);
        template.innerHTML = tmp;
    }

    // get Product by id

    function setDetailProduct(id) {
        var data = products.find(x => x.id == id);
        localStorage.setItem('product', JSON.stringify(data));
    }

    function getResult(product){
        var tmp = '';
        for (let i = 0; i < product.length; i++) {
            tmp += `
                <div class="grid-item-shop">
                    <a href="detail-product.php" class="none" onclick="setDetailProduct(${product[i].id})">
                        <div class="card pointer">
                            <img src="img/${product[i].image}" />
                            <h4 class="pt-2">${product[i].name}</h4>
                            <p class="pt-2">Rp ${(product[i].price).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&.')}</p>
                        </div>
                    </a>
                </div>
            `
        }
        return tmp == '' ? tmp = '<div class="container-start" style="height : 46vh;">Product not found</div>' : tmp
    }
</script>