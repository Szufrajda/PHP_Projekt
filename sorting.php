<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
if (isset($_POST['promotion_submit'])){
// call method addToCart
$Cart->addToCart($_POST['user_id'], $_POST['item_id']);
}
}
?>

<section id="promotion">
<!--    <div class="container">-->
<!--        <h4 class="font-titillium_web font-size-20">Produkty</h4>-->
<!--        <hr>-->
<!--        <div id="filters" class="button-group text-right font-joan font-size-16">-->
<!--<select name="sort_numeric" class="form-control">-->
<!--<option value=""--><?php ////if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "") { echo "Wybrane"; } ?><!--Domyślnie</option>-->
<!--<option value="low-high">Cena z dostawą rosnąca</option>-->
<?php ////if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "Wybrane"; } ?>
<!--<option value="high-low">Cena z dostawą malejąca</option>-->
<?php ////if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "Wybrane"; } ?>
<!--     </select>-->
<!--            <input type="submit" name="submit" class="btn" value="Filtruj">-->
<!--            --><?php
//                        $con = mysqli_connect("localhost","root", "", "szuflix_shop");

//                        if ($_POST['item_price']=='low-high'){
//                                $query = 'SELECT * FROM product ORDER BY item_price ASC';
//                                $select = mysqli_query($con, $query);
//                            } else if ($_POST['item_price']=='high-low'){
//                                $query = 'SELECT * FROM product ORDER BY item_price DESC';
//                                $select = mysqli_query($con, $query);
//                            } else {
//                                $query = 'SELECT * FROM product';
//                                $select = mysqli_query($con, $query);
//                        }


//            $con = mysqli_connect("localhost","root", "", "szuflix_shop");
//            $sort_option = "";
//
//                if (isset($_GET['sort_numeric'])) {
//                    if ($_GET['sort_numeric'] == "low-high") {
//                        $sort_option = "ASC";
//                    } elseif ($_GET['sort_numeric'] == "high-low") {
//                        $sort_option = "DESC";
//                    }
//                }
//
//                $query = "SELECT * FROM product ORDER BY item_price  $sort_option";
//                $query_run = mysqli_query($con, $query);
//
//       ?>
<!---->
<!--      </div>-->
<!--    </div>-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">

                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <select name="sort_numeric" class="form-control">
                                            <option value="deafult" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?>>Wybierz sposób sortowania</option>
                                            <option value="low-high" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?> > Cena z dostawą rosnąca</option>
                                            <option value="high-low" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "selected"; } ?> > Cena z dostawą malejąca</option>
                                        </select>
                                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">Filtruj</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Zdjęcie</th>
                                <th>Nazwa</th>
                                <th>Marka</th>
                                <th>Cena</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $con = mysqli_connect("localhost","root","","szuflix_shop");

                            $sort_option = "";
                            if(isset($_GET['sort_numeric']))
                            {
                                if($_GET['sort_numeric'] == "low-high"){
                                    $sort_option = "ASC";
                                }elseif($_GET['sort_numeric'] == "high-low"){
                                    $sort_option = "DESC";
                                }
                            }

                            $query = "SELECT * FROM product ORDER BY item_price $sort_option";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $item)
                                {
                                    ?>

                                        <tr>
                                            <td class="item py-2 bg-light" style="width: 150px"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></td>
                                            <td class="font-titillium_web font-size-20 text-center py-5"><?php echo  $item['item_name'] ?? "Unknown";  ?></td>
                                            <td class="font-titillium_web font-size-20 text-center py-5"><?php echo $item['item_brand'] ?? "Marka"; ?></td>
                                            <td class="font-titillium_web font-size-20 text-center py-5"><?php echo $item['item_price'] ?? '0' ; ?> zł</td>
                                        </tr>

<!--                                    <tr>-->
<!--                                        <td><img src="--><?php //echo $row['item_image'] ?? "./assets/products/1.png"; ?><!--" alt="product1" class="img-fluid"></td>-->
<!--                                        <td>--><?//= $row['item_name']; ?><!--</td>-->
<!--                                        <td>--><?//= $row['item_brand']; ?><!--</td>-->
<!--                                        <td>--><?//= $row['item_price']; ?><!--</td>-->
<!--                                    </tr>-->
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="3">Nie wykryto produktów</td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>