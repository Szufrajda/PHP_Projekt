<!--product-->

<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :

        // request method post
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['product_submit'])){
                // call method addToCart
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
        $in_cart = $Cart->getCartId($product->getData('cart'));
        ?>


<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/sets.jpg" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-titillium_web">
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Dodano do koszyka</button>';
                        }else{
                            echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-16 form-control">Dodaj do koszyka</button>';
                        }
                        ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h4 class="font-titillium_web font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h4>
                <small><?php echo $item['item_brand'] ?? "Marka"; ?></small>
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
                <hr class="m-0">
                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-oswald font-size-14">
                        <td>Dostawa: </td>
                        <td class="font-size-14 text-danger"><span>10.00 zł</span></td>
                    </tr>
                    <tr class="font-oswald font-size-16">
                        <td>Cena: </td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?? 0; ?> zł</span><small class="text-dark font-size-12">&nbsp;&nbsp;z VAT</small></td>
                    </tr>
                </table>
                <!---end product price-->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <img src="./assets/brand_new.png" class="border rounded-pill">
                                <!--                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>-->
                            </div>
                            <a href="#" class="font-oswald font-size-12">NOWOŚĆ!</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <img src="./assets/bestseller.png" class="border rounded-pill">
                                <!--                                    <span class="fas fa-truck  border p-3 rounded-pill"></span>-->
                            </div>
                            <a href="#" class="font-oswald font-size-12">BESTSELLER!</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <img src="./assets/fast_delivery.png" class="border rounded-pill">
                                <!--                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>-->
                            </div>
                            <a href="#" class="font-oswald font-size-12">SZYBKA DOSTAWA!</a>
                        </div>
                    </div>
                </div>
                <!--end policy-->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-titillium_web d-flex flex-column text-dark">
                    <small>Termin dostawy: 29 Czerwiec - 1 Lipiec</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Dostawa na terenie całego kraju</small>
                </div>
                <!-- end order-details -->

                <div class="row">
                    <div class="col-6">
                        <hr>


                        <!--size-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-oswald"><br>Rozmiar:</h6>
                                <div class="p-2 rounded-circle"><button class="btn font-size-16">S</button></div>
                                <div class="p-2 rounded-circle"><button class="btn font-size-16">M</button></div>
                                <div class="p-2 rounded-circle"><button class="btn font-size-16">L</button></div>
                                <div class="p-2 rounded-circle"><button class="btn font-size-16">XL</button></div>
                            </div>
                        </div>
                        <!--end size-->
                    </div>

                    <!--product qty section-->
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-oswald font-size-16">Ilość:</h6>
                            <div class="px-4 d-flex font-oswald">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!--end product qty section-->

                    <!-- warehouse -->
                    <div class="d-flex justify-content-between">
                        <h6 class="font-oswald px-3">Na magazynie:</h6>
                        <a href="#" class="font-oswald font-size-16">Dostępny</a>
                    </div>
                    <!--end warehouse-->
                </div>



            </div>
            <div class="col-12">
                <br>
                <br>
                <h6 class="font-titillium_web font-size-20">Opis Produktu</h6>
                <hr>
                <p class="font-joan font-size-14">Krój koszulki: regular fit<br>
                    Materiał: 100% bawełna<br>
                    Klasyczny crewneck<br>
                    Elastyczne wykończenie dekoltu zapobiega szybkiemu rozciąganiu materiału<br>
                    Rękawy oraz dół wykończone wygodnym ściągaczem<br>
                    Duży nadruk na przodzie i plecach<br>
                    Kod producenta: EQYZT06694-KVJ0<br>
                    ID 314666</p>
            </div>

        </div>
        <div class="col-12">
            <br>
            <br>
            <h6 class="font-titillium_web font-size-20">Opinie</h6>
            <hr>
            <img src="./assets/comment.png"><p class="font-joan font-size-16">Jeżeli chcesz dodać własną opinie kliknij<a href="comments.php"> Tutaj</a></p>
            <?php
            $con = mysqli_connect("localhost","root", "", "szuflix_shop");
            $sql = "SELECT * FROM comments";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="single-item">
                        <h4><?php echo $row['name']; ?></h4>
                        <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                        <p><?php echo $row['comment']; ?></p>
                    </div>
                    <?php

                }
            }

            ?>
        </div>
    </div>
</section>
<!--end product-->

<?php
endif;
endforeach;
?>