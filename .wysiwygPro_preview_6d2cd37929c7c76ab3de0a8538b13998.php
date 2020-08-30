<?php
if ($_GET['randomId'] != "VHrEPmLEdMa0tAchdLb8NI_acx_otA5liJxj0AMCMi7cSnQer6fAhLsVBr2HQ6KP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
