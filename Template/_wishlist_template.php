<!--<!-- Shopping cart section  -->-->
<!---->
<?php
//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//    if (isset($_POST['delete-cart-submit'])){
//        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
//    }
//
//    if(isset($_POST['cart-submit'])){
//        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
//    }
//}
//?>
<!---->
<!--<section id="cart" class="py-3">-->
<!--    <div class="container-fluid w-75">-->
<!--        <h5 class="font-titillium_web font-size-20">Lista życzeń</h5>-->
<!---->
<!--        <!--  shopping cart items   -->-->
<!--        <div class="row">-->
<!--            <div class="col-sm-9">-->
<!--                --><?php
//                foreach ($product->getData('wishlist') as $item) :
//                    $cart = $product->getProduct($item['item_id']);
//                    $subTotal[] = array_map(function ($item){
//                        ?>
<!--                        <!-- cart item -->-->
<!--                        <div class="row border-top py-3 mt-3">-->
<!--                            <div class="col-sm-2">-->
<!--                                <img src="--><?php //echo $item['item_image'] ?? "./assets/shirt5.jpg"?><!--" style="height: 120px;" alt="cart1" class="img-fluid">-->
<!--                            </div>-->
<!--                            <div class="col-sm-8">-->
<!--                                <h5 class="font-joan font-size-20">--><?php //echo $item['item_name'] ?? "Unknown"; ?><!--</h5>-->
<!--                                <small>--><?php //echo $item['item_brand'] ?? "Marka"; ?><!--</small>-->
<!--                                <!-- product rating -->-->
<!--                                <div class="d-flex">-->
<!--                                    <div class="rating text-warning font-size-12">-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="far fa-star"></i></span>-->
<!--                                    </div>-->
<!--                                    <a href="#" class="px-2 font-oswald font-size-14">999+ ocen</a>-->
<!--                                </div>-->
<!--                                <!--  !product rating-->-->
<!---->
<!--                                <!-- product qty -->-->
<!--                                <div class="qty d-flex pt-2">-->
<!---->
<!--                                    <form method="post">-->
<!--                                        <input type="hidden" value="--><?php //echo $item['item_id'] ?? 0; ?><!--" name="item_id">-->
<!--                                        <button type="submit" name="delete-cart-submit" class="btn font-oswald text-danger px-3 border-right">Usuń</button>-->
<!--                                    </form>-->
<!---->
<!--                                    <form method="post">-->
<!--                                        <input type="hidden" value="--><?php //echo $item['item_id'] ?? 0; ?><!--" name="item_id">-->
<!--                                        <button type="submit" name="cart-submit" class="btn font-oswald text-danger">Dodaj do koszyka</button>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                                <!-- !product qty -->-->
<!---->
<!--                            </div>-->
<!---->
<!--                            <div class="col-sm-2 text-right">-->
<!--                                <div class="font-size-20 text-danger font-oswald">-->
<!--                                    <span class="product_price" data-id="--><?php //echo $item['item_id'] ?? '0'; ?><!--">--><?php //echo $item['item_price'] ?? 0; ?><!--</span><span> zł</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <!-- end cart item -->-->
<!--                        --><?php
//                        return $item['item_price'];
//                    }, $cart); // closing array_map function
//                endforeach;
//                ?>
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <!--  end shopping cart items   -->-->
<!--    </div>-->
<!--</section>-->
<!--<!-- end Shopping cart section  -->-->
