<!-- Shopping cart section  -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

//    // save for later
//    if (isset($_POST['wishlist-submit'])){
//        $Cart->saveForLater($_POST['item_id']);
//    }
}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-titillium_web font-size-20">Koszyk</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('cart') as $item) :
                $cart = $product->getProduct($item['item_id']);
                $subTotal[] = array_map(function ($item){
                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ?? "./assets/shirt5.jpg"?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-joan font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small><?php echo $item['item_brand'] ?? "Marka"; ?></small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-oswald font-size-14">999+ ocen</a>
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-oswald w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-oswald text-danger px-3 border-right">Usuń</button>
                            </form>

<!--                            <form method="post">-->
<!--                                <input type="hidden" value="--><?php //echo $item['item_id'] ?? 0; ?><!--" name="item_id">-->
<!--                                <button type="submit" name="wishlist-submit" class="btn font-oswald text-danger">Zapisz na Liście życzeń</button>-->
<!--                            </form>-->
                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-oswald">
                            <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span><span> zł</span>
                        </div>
                    </div>
                </div>
                <!-- end cart item -->
                    <?php
                    return $item['item_price'];
                }, $cart); // closing array_map function
                endforeach;
                ?>

            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-titillium_web text-success py-3"><i class="fas fa-check"></i> DARMOWA DOSTAWA przy zamówieniu powyżej 200 zł. <br>Dostawa: <strike>10.00 zł</strike> -> 0 zł</h6>
                    <div class="border-top py-4">
                        <h5 class="font-titillium_web font-size-20">Razem z dostawą <br>( Liczba produktów: <?php echo isset($subTotal) ? count($subTotal) : 0; ?> )&nbsp; <br><span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?> </span> zł</span> </h5>
                        <a href="payment.php"> <button type="submit" class="btn btn-warning mt-3">Kup teraz</button></a>
                    </div>
                </div>
            </div>
            <!-- end subtotal section-->
        </div>
        <!--  end shopping cart items   -->
    </div>
</section>
<!-- end Shopping cart section  -->


<!--<div class="col-sm-12 border text-center mt-2">-->
<!---->
<!--    <form action="" method="post">-->
<!--        <h3 class="font-titillium_web font-size-20 py-4">Formularz dostawy</h3>-->
<!--        <input type="email" name="email" required placeholder="Podaj e-mail" class="box">-->
<!--        <input type="text" name="miasto" required placeholder="Podaj miasto" class="box">-->
<!--        <input type="text" name="adres" required placeholder="Podaj adres zamieszkania" class="box">-->
<!--        <input type="text" name="imienazwisko" required placeholder="Podaj imie i nazwisko" class="box">-->
<!--        <br><br>-->
<!---->
<!--        <p class="font-joan font-size-20">Metoda Płatności</p>-->
<!---->
<!--        <input type="radio"  name="metoda" value="Kurier">-->
<!--        <label>Płatność przy odbiorze <img src="./assets/cash.png"></label><br>-->
<!--        <input type="radio"  name="metoda" value="Karta">-->
<!--        <label>Karta <img src="./assets/credit_cart.png"></label><br>-->
<!--        <input type="radio"  name="metoda" value="Blik">-->
<!--        <label>Blik <img src="./assets/blik.png"></label>-->
<!---->
<!--        <br><br>-->
<!--        <p class="font-joan font-size-20">Metoda Dostawy</p>-->
<!---->
<!--        <input type="radio"  name="metoda1" value="Paczkomat">-->
<!--        <label>Paczkomat <img src="./assets/pickup-point.png"></label><br>-->
<!--        <input type="radio"  name="metoda1" value="Kurier">-->
<!--        <label>Kurier <img src="./assets/DPD.png"></label><br>-->
<!---->
<!--        <br>-->
<!---->
<!--        <h5 class="font-titillium_web font-size-20">Razem:  <span class="text-danger"> <span class="text-danger" id="deal-price">--><?php //echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?><!--</span> zł</span> </h5>-->
<!--        <button type="submit" class="btn btn-warning mt-3">Kup teraz</button></a>-->
<!--        <br><br>-->
<!--        <p class="font-joan font-size-14">Wróć do Strony Głównej <a href="index.php">Tutaj</a></p>-->
<!--    </form>-->
<!--</div>-->