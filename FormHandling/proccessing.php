<?php
    if(isset($_GET['name'])) {
        echo "Your name is : " . $_GET["name"];
    }

    if(isset($_POST['username'])) {
        echo "Your name is:". $_POST['username'];
    }
?>