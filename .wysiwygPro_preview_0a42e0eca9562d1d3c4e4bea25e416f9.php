<?php
if ($_GET['randomId'] != "Oj3QH9nrDwJa2HtLS2XY3w5lVLViG9bAX3i_9NfNPrf2dygFpESX63CwhaATMj4C") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
