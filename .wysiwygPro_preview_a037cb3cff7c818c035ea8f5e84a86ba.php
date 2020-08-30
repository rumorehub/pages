<?php
if ($_GET['randomId'] != "aKDYpWeX4lGdEahfX2Z5Vl6gTmBjpFdQLxmiE7zoNHGUNlLn3DihnVm6D5qTk4RG") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
