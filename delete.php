<?php

session_start();
$id = $_GET['id'];
echo '
<html>
<head>
<link rel="stylesheet" href="style_login.css">
</head>
<body>
<div class="center">
    <h1 class="font-titillium_web font-size-20">Potwierdź usunięcie</h1>
    <form method="post" action="admin_delete.php?id='. $id .'">
            <input type="submit" name="tak" value="TAK">
            <p class="font-joan font-size-16">Jeżeli nie chcesz usunąć przedmiotu kliknij <a href="index.php">Tutaj</a></p>
    </form>
</div>
</body>
</html>
';
?>



