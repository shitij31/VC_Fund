<?

$username = "<username of hosting server>";
$password = "password of hosting server";
$database = "VC_Fund";
$con = mysql_connect('<hostname>', $username, $password);
if (!$con)
{
	die("Could not connect:".mysql_error());
}

mysql_select_db($database);

?>