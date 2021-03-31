<?php
require_once('urlclass.php');
//Our php variable.
$URLShortener = new URLShortener;
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
    
<body>
    <?php
    //we call the mainForm function, and used echo cuz we used "return" in this function.
        echo $URLShortener -> mainForm()
    ?>
</body>
</html>

