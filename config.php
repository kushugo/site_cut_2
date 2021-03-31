<?php
// Identification informations
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'registration');
 
// Connection to MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
?>

<?php
date_default_timezone_set('Europe/Paris');
class Connect extends PDO
{
    public function __construct()
    {
        parent::__construct("mysql:host=localhost;dbname=url_shortener", 'root', 'root',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
?>

<?php
define('JOURS', [
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi',
    'Dimanche'
]);

define('CRENEAUX', [
    [
        [8, 11],
        [14, 19]    
    ],
    [
        [8, 12],
        [14, 19]    
    ],
    [
        [8, 12]   
    ],
    [
        [8, 12],
        [14, 19]    
    ],
    [
        [8, 12],
        [14, 19]    
    ],
    [],
    []
]);
?>

