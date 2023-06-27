<?php ob_start(); ?>

<div class="banner">
    <img srcset="img/pas.webp" />
    <div class="banner-content">
        <h1>Welcome to Zay Shop</h1>
        <p>Belanja Fashion di Zay Shop.</p>
    </div>
</div>
<div class="container">
    <h1>Our Brands</h1>
    <p class="pt-3">Kami sebagai pusat belanja fashion terbesar di Indonesia dapat menjawab kebutuhan fashion
        pria dan fashion wanita dengan menawarkan brand-brand terbaru dan terkemuka, baik lokal maupun internasional.
    </p>
</div>
<div class="grid-container-4">
    <div class="grid-item-4">
        <img src="img/brand_01.png" class="img-brand" />
    </div>
    <div class="grid-item-4">
        <img src="img/brand_02.png" class="img-brand" />
    </div>
    <div class="grid-item-4">
        <img src="img/brand_03.png" class="img-brand" />
    </div>
    <div class="grid-item-4">
        <img src="img/brand_04.png" class="img-brand" />
    </div>
</div>
<div class="container">
    <h1>Featured Product</h1>
    <p class="pt-3">Nikmati kenyamanan dan gaya dengan koleksi berkualitas tinggi kami.</p>
</div>
<div class="grid-container">
    <div class="grid-item">
        <div class="card">
            <img src="img/product-1.jpg" />
            <h4 class="pt-1">Shoes</h4>
            <p class="pt-2">Sepatu Fashion dengan Kualitas Terbaik.</p>
        </div>
    </div>
    <div class="grid-item">
        <div class="card">
            <img src="img/product-2.jpg" />
            <h4 class="pt-1">Glasses</h4>
            <p class="pt-2">Kacamata Aksesoris dengan Gaya dan Keunikan</p>
        </div>
    </div>
    <div class="grid-item">
        <div class="card">
            <img src="img/dior/dior-2.avif" style="height: 280px;" />
            <h4 class="pt-1">Shirt</h4>
            <p class="pt-2">Kaos Berkualitas Tinggi dengan Desain Unik.</p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>