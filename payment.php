<!DOCTYPE html>
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
    <link rel="stylesheet" href="style_payment.css">
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Formularz dostawy</title>-->
<!--</head>-->
<!--<body>-->
<section id="payment" class="py-3">
<div class="center">

            <h1 class="font-titillium_web font-size-16">Formularz dostawy</h1>
            <form action="" method="post">
                <div class="txt_field">
                    <input type="email" name="email" required class="box">
                    <span></span>
                    <label>Podaj e-mail</label>
                </div>
                <div class="txt_field">
                    <input type="miasto" name="miasto" required class="box">
                    <span></span>
                    <label>Podaj miasto</label>
                </div>
                <div class="txt_field">
                    <input type="adres" name="adres" required class="box">
                    <span></span>
                    <label>Podaj adres zamieszkania</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="imienazwisko required class="box">
                    <span></span>
                    <label>Podaj imie i nazwisko</label>
                </div>
                <legend>Sposób dostawy</legend>
                <div class="row">
                    <div class="column">
                        <img src="./assets/DPD.png">
                        <br>
                        <label> Kurier </label><input type="radio" name="radio1" value="Przycisk nie zaznaczony">
                    </div>
                    <div class="column">
                        <img src="./assets/pickup-point.png">
                        <br>
                        <label> Paczkomat </label><input type="radio" name="radio1" checked value="Przycisk zaznaczony">
                    </div>
                </div>
                <hr>
                <legend>Płatność</legend>
                <div class="row">
                    <div class="column">
                        <img src="./assets/credit_cart.png">
                        <br>
                        <label> Karta </label><input type="radio" name="radio2" value="Przycisk nie zaznaczony">
                    </div>
                    <div class="column">
                        <img src="./assets/cash.png">
                        <br>
                        <label> Gotówka </label><input type="radio" name="radio2" checked value="Przycisk zaznaczony">
                    </div>
                </div>

<!--            <h1 class="font-titillium_web font-size-20">Razem:  <span class="text-danger"> <span class="text-danger" id="deal-price">--><?php //echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?><!--</span> zł</span> </h1>-->
<br>

            <input type="submit" name="submit" class="btn" value="Zamawiam!">
            <p>Wróć do Koszyka <a href="cart.php">Tutaj</a></p>
        </form>

    </div>
</section>
<!--</body>-->
<!--</html>-->