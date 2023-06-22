<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Toko Pakaian</title>
</head>

<body>
    <header class="bg-white">
        <nav>
            <div class="logo">
                <img src="img/logo-1.png" alt="" width="50px" height="50px">
            </div>
            <ul class="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div></div>
        </nav>
    </header>

    <!-- Content -->

    <?php echo $content; ?>

    <!-- End Content -->

    <div class="container footer">
        Copyright © 2023 Kelompok 1
    </div>
</body>
</html>