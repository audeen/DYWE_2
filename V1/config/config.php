// Frontend Zeichensatz festlegen ------------------------
header('content-type:text/html; charset=ISO-8859-1');

<!-- $host= "127.0.0.1";
$user= "root";
$pass= "";
$dbase= "dywe2";

$db_link = mysqli_connect($host, $user, $pass);
$dbase = mysqli_select_db($db_link, $db_name) -->

$host="localhost"; //Hostname
$user="root"; //Benutzername
$pass=""; //Passwort
$dbase="test"; //Datenbankname
$db_link = mysqli_connect($host, $user, $pass);
mysqli_select_db($db_link, $dbase); 