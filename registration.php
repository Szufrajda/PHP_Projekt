<?php
include ('functions.php');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($login, $_POST['name']);
    $email = mysqli_real_escape_string($login, $_POST['email']);
    $pass = mysqli_real_escape_string($login, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($login, md5($_POST['cpassword']));

    $select = mysqli_query($login, "SELECT * FROM users_new WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'Użytkownik istnieje!';
    }else{
        mysqli_query($login, "INSERT INTO users_new(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
        $message[] = 'Zarejestrowano pomyślnie!';
        header('location:login.php');
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>


</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>

<div class="center">


        <h1 class="font-titillium_web font-size-20">Zarejestruj się</h1>
    <form action="" method="post">
        <div class="txt_field">
        <input type="text" name="name" required class="box">
            <span></span>
            <label>Nazwa użytkownika</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" required class="box">
            <span></span>
            <label>E-mail</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required  class="box">
            <span></span>
            <label>Hasło</label>
        </div>
        <div class="txt_field">
            <input type="password" name="cpassword" required  class="box">
            <span></span>
            <label>Powtórz hasło</label>
        </div>

        <input type="submit" name="submit" class="btn" value="Zarejestruj się teraz!">
        <p>Posiadasz już konto? Zaloguj się <a href="login.php">Tutaj</a></p>
    </form>
</div>

</body>
</html>
