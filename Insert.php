<?
include "sql_connect.php";

$request = 'https://api.angel.co/1/search?query=ucla&type=User';
$response = file_get_contents($request);
$result = array();
$userRecord = array();
$result = json_decode($response, true);
$i=0;
foreach ($result as $value) {
	$userId = $value['id'];
	$request2 = 'https://api.angel.co/1/users/' .$userId ;
	$response2 = file_get_contents($request2);
	array_push($userRecord, json_decode($response2, true)); 
	$name = mysql_real_escape_string($userRecord[$i]['name']);
	$bio = mysql_real_escape_string($userRecord[$i]['bio']);
	$what_ive_built = mysql_real_escape_string($userRecord[$i]['what_ive_built']);
	$what_i_do = mysql_real_escape_string($userRecord[$i]['what_i_do']);
	$criteria = mysql_real_escape_string($userRecord[$i]['criteria']);
	$skills = json_encode($userRecord[$i]['skills']);
	$locations = json_encode($userRecord[$i]['locations']);
	$roles = json_encode($userRecord[$i]['roles']);
	$query = "INSERT INTO UCLA VALUES ('$name','{$userRecord[$i]['id']}','$bio','{$userRecord[$i]['follower_count']}',
			'{$userRecord[$i]['angellist_url']}','{$userRecord[$i]['image']}','{$userRecord[$i]['blog_url']}','{$userRecord[$i]['online_bio_url']}',
			'{$userRecord[$i]['twitter_url']}','{$userRecord[$i]['facebook_url']}','{$userRecord[$i]['linkedin_url']}','{$userRecord[$i]['aboutme_url']}',
			'{$userRecord[$i]['github_url']}','{$userRecord[$i]['dribbble_url']}','{$userRecord[$i]['behance_url']}','{$userRecord[$i]['resume_url']}',
			'$what_ive_built','$what_i_do','$criteria','$locations','$roles','$skills','{$userRecord[$i]['investor']}')";
	$insert = mysql_query($query);
	if(!$insert)
	{
		die("Error inserting data!".mysql_error()); 
	}
	else
		echo "Row Inserted Successfully!\n";
	$i++;
}

mysql_close();

?>