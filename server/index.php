<?

require_once("config.php");
require_once("php_include/db.php");

$db = new database($db_server, $db_user, $db_pass, $db_name);

$db->query("SELECT * FROM sunray WHERE `hidden` != 1 ORDER BY `token` ASC");

foreach($db->getrows() as $row) {
	echo "token=".$row['token']." host=".$row['host'];
	if($row['username'])
		echo " username=".$row['username'];
	echo " ";
}


?>
