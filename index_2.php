<?php
require_once('urlclass.php');
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
        echo $URLShortener -> mainForm()
    ?>
</body>
</html>

