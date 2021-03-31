<?php
require_once(realpath(dirname(__FILE__) . 'config.php'));
//Use to check if there is anything in our get methode and if yes, it's assign to our url variable.
$url = isset($_GET['url']) ? $_GET['url'] : '';
$db = new Connect;
//Use to get the long url from the short url and redirect the short url to the long url.
$getLongURL = $db -> prepare('SELECT long_url FROM shortened_urls WHERE short_url = :short_url');
$getLongURL -> execute([
    'short_url' => $url
]);
$num = $getLongURL->fetchAll(PDO::FETCH_COLUMN);
if(count($num) != 0){
    header("Location: " . $num[0]);
}else{
    echo "This URL doesn't exist!";
}
?>

