<!--products-->

<?php
$brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);




// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['special_price_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
$in_cart = $Cart->getCartId($product->getData('cart'));

?>

<section id="special-price">
    <div class="container">
        <h4 class="font-titillium_web font-size-20">Produkty</h4>
        <hr>
        <div id="filters" class="button-group text-right font-joan font-size-16">
            <button class="btn" data-filter="*">Wszystkie przedmioty</button>
            <?php
            array_map(function ($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            }, $unique);
            ?>
        </div>



        <div class="grid">
            <?php array_map(function ($item) use($in_cart){ ?>
            <div class="grid-item border <?php echo $item['item_brand'] ?? "Marka"; ?>">
                <div class="item py-2" style="width: 200px">
                    <div class="product font-oswald">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/full_cap.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <?php
                            if ($_SESSION['admin']==1){
                                echo '<a href="delete.php?id='.$item['item_id'].'" class="btn  font-size-12">Usuń</a>';
                            }
                            ?>
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?php echo $item['item_price'] ?? 0 ?> zł</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">Dodano do koszyka</button>';
                                }else{
                                    echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Dodaj do koszyka</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
<!--end products-->

