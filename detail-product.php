<?php
ob_start();
?>

<div class="grid-container-2">
    <div class="grid-item-2">
        <img src="img/levis/levis-1.avif" id="image" />
    </div>
    <div class="grid-item-2">
        <div class="text-start">
            <h2 id="name">Levi's® Men's Vad Short</h2>
            <p class="pt-2" id="price">Rp 599.900</p>
            <h3 class="pt-2">Brand : <b id="category">Levi`s</b></h3>
            <h3 class="pt-2">Description : </h3>
            <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
            <h3 class="pt-2">Avaliable Color : <b>White / Black</b></h3>
            <h3 class="pt-2">Specification : </h3>
            <p class="pt-2">Lorem ipsum dolor sit</p>
            <p>Amet, consectetur</p>
            <p>Adipiscing elit,set</p>
            <p>Duis aute irure</p>
            <p>Ut enim ad minim</p>
            <p>Dolore magna aliqua</p>
            <h3 class="pt-2">Size : <b>S / M / L / XL</b></h3>
            <a href="contact.php" class="none">
                <div class="contact-number mt-3 text-center pointer">
                    Contact us to order
                </div>
            </a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>

<script>
    var data = localStorage.getItem('product');
    var product = JSON.parse(data)
    document.getElementById("name").innerHTML = product.name;
    document.getElementById("price").innerHTML = 'Rp ' + (product.price).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&.');
    document.getElementById("category").innerHTML = product.category;
    document.getElementById("image").src  = 'img/' + product.image;
</script>