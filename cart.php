<?php

ob_start();
/*header of the page */
include("header.php");

?>

<?php

/*include the cart template section */
include("template/cart-template.php");
/*include the cart template section */

/*include the new phone area */
include("template/new-phones.php");
/*include the new phone area */

?>

<?php
/* footer of the page */
include("footer.php");

?>
