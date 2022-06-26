<?php
session_start();
$con = mysqli_connect("localhost","root", "", "szuflix_shop");

if(isset($_POST['product'])) {

    $product_id = $_POST['item_id'];
    $product_brand = $_POST['item_brand'];
    $product_name = $_POST['item_name'];
    $product_price = $_POST['item_price'];
    $product_image = $_FILES['item_image'];
    $product_date = $_FILES['item_register'];
    $product_image_folder = './assets/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = 'Wypełnij wszystko';
    } else {
        $insert = "INSERT INTO product(item_id, item_brand, item_name, item_price, item_image, item_register) VALUES('$product_id', '$product_brand', '$product_name', '$product_price', '$product_image', '$product_date')";
        $upload = mysqli_query($con, $insert);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style_admin.css">

</head>
<body>

<?php

if(isset($message)){
    foreach($message as $message){
        echo '<span class="message">'.$message.'</span>';
    }
}

?>

<div class="container">

    <div class="admin-product-form-container">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Dodaj nowy produkt</h3>
            <input type="text" placeholder="Wpisz id produktu" name="id" class="box">
            <input type="text" placeholder="Wpisz markę produktu" name="product_brand" class="box">
            <input type="text" placeholder="Wpisz nazwę produktu" name="product_name" class="box">
            <input type="number" placeholder="Wpisz cenę produktu" name="product_price" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="data" placeholder="Wpisz datę dodania produktu" name="product_date" class="box">
            <input type="submit" class="btn" name="add_product" value="Dodaj produkt">
        </form>

    </div>
</div>


</body>
</html>
