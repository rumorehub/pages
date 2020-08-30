<?php
if ($_GET['randomId'] != "BC7_Ap4m5j3EuCJrXhxyAzIUeXxkPkrOgxLcNZI_fRDugSgDARvtAe4AEHhkOoXm") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
