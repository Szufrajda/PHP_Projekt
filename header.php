<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">

    <!--BOOSTRAP CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Szuflix | Streetwear</title>
    <link rel="stylesheet" href="style.css">


    <?php
    // require functions.php file
    require ('functions.php');

    if(empty($_SESSION['id'])) {
        $_SESSION['id'] = 0;
    }

    $id=$_SESSION['id'];
    $nazwa = "SELECT name from users_new where id='$id'";
    $select2 = mysqli_query($login,$nazwa);
    $nazwa = mysqli_fetch_assoc($select2);



    if(empty($_SESSION['id'])) {
        $_SESSION['id'] = 0;
    }
    ?>

</head>
<body>
<!--start header-->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 color-primary-bg">
        <p class="font-joan font-size-12 text-black-50 m-O">SZUFLIX STRORE ADDRESS</p>

        <div class="font-joan font-size-14">
            <?php
            if(!empty($_SESSION['id'])){
                echo'<h2 class="font-size-14 font-joan">Zalogowano jako: '.$nazwa['name'].'</h2><a href="log_out.php" class="px-3 border-right border-left text-light">Wyloguj</a>';
            }
            else
            {
                echo'<a href="login.php" class="px-3 border-right border-left text-light">Login</a>';
            }
            ?>
        </div>
    </div>

    <!--primary naviagtion-->
    <nav class="navbar navbar-expand-lg navbar-light color-second-bg">
        <a href="index.php"><img src="./assets/a2.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-titillium_web">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kategorie <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sorting_page.php">Produkty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O Nas</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-oswald">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!--end navigation-->

</header>
<!--end header-->


<!--start main site-->
<main id="main-site">
