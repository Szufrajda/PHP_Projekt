<?php


$con = mysqli_connect("localhost","root", "", "szuflix_shop");

error_reporting(0);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Komentarz został dodany')</script>";
    } else {
        echo "<script>alert('Coś poszło nie tak - komentarz nie został dodany')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style_comments.css">

</head>
<body>
<div class="wrapper">
    <form action="" method="POST" class="form">
        <div class="row">
            <div class="input-group">
                <label for="name">Nick:</label>
                <input type="text" name="name" id="name" placeholder="Wpisz swoją nazwę użytkownika" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Wpisz swój adres e-mail" required>
            </div>
        </div>
        <div class="input-group textarea">
            <label for="comment">Komentarz:</label>
            <textarea id="comment" name="comment" placeholder="Co sądzisz o tym produkcie?" required></textarea>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Udostępnij</button>
        </div>
    </form>
    <div class="prev-comments">
        <?php

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
<!--    <p class="font-joan font-size-16">Jeżeli chcesz wrócić do produktu kliknij<a href="product.php"> Tutaj</a></p>-->
</div>
</body>
</html>
