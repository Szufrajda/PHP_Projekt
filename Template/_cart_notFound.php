<!-- Shopping cart section  -->

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-titillium_web font-size-20">Koszyk</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">

                <!-- Empty Cart -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 100px;">
                        <p class="font-titillium_web font-size-16 text-black-50">Koszyk jest pusty</p>
                    </div>
                </div>
                <!-- .Empty Cart -->
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-titillium_web text-success py-3"><i class="fas fa-check"></i> DARMOWA DOSTAWA przy zamówieniu powyżej 200 zł. <br>Dostawa: <strike>10.00 zł</strike> -> 0 zł</h6>
                    <div class="border-top py-4">
                        <h5 class="font-titillium_web font-size-20">Razem z dostawą <br>( Liczba produktów: <?php echo isset($subTotal) ? count($subTotal) : 0; ?> )&nbsp; <br><span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?> </span> zł</span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Kup teraz</button>
                    </div>
                </div>
            </div>
            <!-- end subtotal section-->
        </div>
        <!--  end shopping cart items   -->
    </div>
</section>
<!-- end Shopping cart section  -->