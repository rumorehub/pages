<?php
if ($_GET['randomId'] != "4HBVVXPLvbX1ufP5GD5bIkK3DhKGpRWgXyLDzBQNLJCqWXXIA35rBtvuhhk3MPZ4") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
