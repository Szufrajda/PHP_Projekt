<?php
session_start();
ob_start();
// include header.php file
include ('header.php');

if(empty($_SESSION['admin']))
{
    $_SESSION['admin']=0;
}

?>

<?php

/*  include banner area  */
include ('Template/_banner-area.php');
/*  include banner area  */

/*  include top sale section */
include ('Template/_top-sale.php');
/*  include top sale section */

/*  include products (special price) section  */
include ('Template/_products.php');
/*  include special price section  */

/*  include banner ads  */
include ('Template/_banner-ads.php');
/*  include banner ads  */

/*  include promotion (new phones) section  */
include ('Template/_promotion.php');
/*  include new phones section  */

/*  include blog area  */
include ('Template/_blogs.php');
/*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>