<?php
//Here we just import our configuration file.
require_once(realpath(dirname(__FILE__) . 'config.php'));
class URLShortener{
    //Use to generate a short url (5 charcaters long) by picking a random char 5 times.
    function generateShortURL($n){
    $db = new Connect;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $shortURL = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $shortURL .= $characters[$index];
    }
    //Check if the charcter string that has been generated already exist in our db.
    $checkURL = $db->prepare('SELECT id FROM shortened_urls WHERE short_url = :new_url');
    $checkURL -> execute(['new_url' => $shortURL]);
    $num = $checkURL->fetchAll(PDO::FETCH_COLUMN);
    $checkExistingURL = count($num);
    if($checkExistingURL != 0){
         $shortURL = $shortURL . count($num);
    }
    //Then we juste return the short url.
    return $shortURL;
}
//This function is call only when we submit the form in the mainForm function.
function validate(){
    //connect to our db
    $db = new Connect;
    //Here we get the long url and generate a short url (thanks to our generateShortURL function) and insert it into our data base.
    $long_url = isset($_POST['long_url']) ? $_POST['long_url'] : '';
    $long_url = trim($long_url);
    if(!empty($long_url)){
        $shortURL = $this->generateShortURL(5);
        $insertData = $db->prepare('INSERT INTO shortened_urls (long_url, short_url) VALUES (:long_url, :short_url)');
        $insertData->execute([
            'long_url' => $long_url,
            'short_url' => $shortURL
        ]);
        //Return the short url that has been generated.
        if($insertData){
            return '<p style="text-align:center;">
            Voici votre URL raccourci :<br />' 
            . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
            "https" : "http") . "://"
             . $_SERVER['SERVER_NAME'] . '/' . $shortURL . '
            </p>';
        }
    }else{
        return '<p style="text-align:center;">Veuillez remplir le formulaire!</p>';
     }
    
}
//This function is use to creat a form, so we can actually write an url and click on a button.
function mainForm(){
        //If there is an data, it is assign to our "a" variable.
        $a = isset($_GET['action']) ? $_GET['action'] : '';
        //this return, return our form 
        return '
            <div class="form_block">
                <div id="title">
                    Réducteur URL
                    </div>
                    <div class="body">'.
                    ($a == 'validate' ? $this->validate() : '')
                    .'<form action="?action=validate" method="POST">
                        <input class="" type="text" name="long_url" placeholder="Entrer votre URL" require />
                        <input class="" type="submit" value="Raccourcir" />
                    </form>
                </div>
            </div>
        ';
    }
}
?>
