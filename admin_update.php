<form method="post">
    <?php
    $con = mysqli_connect("localhost","root", "", "szuflix_shop");
    echo'
    Dodaj produkt: 
    <input name="item_name" required placeholder="Wpisz nazwę produktu">
    <input name="item_brand" required placeholder="Wpisz markę produktu">
    <input name="item_price" required placeholder="Wpisz cenę produktu">
    <input name="item_image" required placeholder="Załącz zdjęcie produktu">
    <input type="submit" name="dodaj" value="Dodaj produkt">
    ';

    if(!empty($_POST['dodaj'])){
        $t = $_POST['item_name'];
        $db = mysqli_select_db($con, 'szuflix_shop');
        $query = "SELECT * FROM product WHERE item_name = '$t' ";
        $wynik= mysqli_query($con, $query);
        $liczba = mysqli_num_rows($wynik);

        if($liczba >0){

        } else {
            $p = new Product($_POST['item_name'], $_POST['item_brand'], $_POST['item_price'], $_POST['item_image'] );
            $p ->Dodaj();
            header("Location: index.php");
        }
    }

    ?>
</form>

<link rel="stylesheet" type="text/css" href="style_comments.css">