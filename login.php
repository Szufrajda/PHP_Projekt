<?php

include ('functions.php');

session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($login, $_POST['email']);
    $pass = mysqli_real_escape_string($login, md5($_POST['password']));

    $select = mysqli_query($login, "SELECT * FROM users_new WHERE email = '$email' AND password = '$pass'") or die('Coś poszło nie tak :(');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['id'] = $row['id'];
        $_SESSION['email']=$row['email'];
        $query="Select isadmin from users_new where email = '$email'";
        $result=mysqli_query($login,$query);
        $record=mysqli_fetch_assoc($result);

        if($record['isadmin']==1)
        {
            $_SESSION['admin']=1;
        }
        else
        {
            $_SESSION['admin']=0;
        }
        header('location:index.php');
    }else{
        $message[] = 'Błędny e-mail lub hasło!';
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
    <title>Zaloguj się</title>


</head>
<body class="">

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>


<div class="center">
    <h1 class="font-titillium_web font-size-20">Zaloguj się</h1>
    <form action="" method="post">
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
        <input type="submit" name="submit" class="btn" value="Zaloguj">
        <p>Nie masz jeszcze konta? Zarejestruj się <a href="registration.php">Tutaj</a></p>
    </form>
</div>
</body>
</html>


