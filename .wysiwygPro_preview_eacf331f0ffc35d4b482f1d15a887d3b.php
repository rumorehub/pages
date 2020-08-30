<?php
if ($_GET['randomId'] != "f5fDPn7E4kut7DeRGbED0vmYhZJAwdQHQoSmpfOMSoOHexA1Jsd6P7scZXKwlrmo") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
