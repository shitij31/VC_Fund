<?

include "sql_connect.php";


$fetch = "SELECT * FROM UCLA";
$records = mysql_query($fetch);
if (!$records){
    die("Error fetching data".mysql_error());
}
$n_rows = mysql_num_rows($records);

$return_arr = array();


for($j=0; $j < $n_rows; $j++)
{
    $row['Name'] = mysql_result($records, $j, "Name");
    $row['ID'] = mysql_result($records, $j, "ID");
    $row['Bio']= mysql_result($records, $j, "Bio");
    $row['Followers'] = mysql_result($records, $j, "Followers");
    $row['AngelList_URL'] = mysql_result($records, $j, "AngelList_URL");
    $row['UserImage'] = mysql_result($records, $j, "Image"); 
    $row['Blog_URL']= mysql_result($records, $j, "Blog_URL");
    $row['Online_Bio_URL']= mysql_result($records, $j, "Online_Bio_URL"); 
    $row['Twitter_URL']= mysql_result($records, $j, "Twitter_URL");
    $row['Facebook_URL']= mysql_result($records, $j, "Facebook_URL");
    $row['LinkedIn_URL']= mysql_result($records, $j, "LinkedIn_URL");
    $row['AboutMe_URL']= mysql_result($records, $j, "AboutMe_URL");
    $row['GitHub_URL']= mysql_result($records, $j, "GitHub_URL");
    $row['Dribbble_URL']= mysql_result($records, $j, "Dribbble_URL");
    $row['Behance_URL']= mysql_result($records, $j, "Behance_URL");
    $row['Resume_URL']= mysql_result($records, $j, "Resume_URL");
    $row['What_Ive_built']= mysql_result($records, $j, "What_Ive_built");
    $row['What_I_do']= mysql_result($records, $j, "What_I_do");
    $row['Criteria']= mysql_result($records, $j, "Criteria");
    $row['Locations']= json_decode(mysql_result($records, $j, "Locations"));
    $row['Roles']= json_decode(mysql_result($records, $j, "Roles"));
    $row['Skills']= json_decode(mysql_result($records, $j, "Skills"));
    $row['Investor']= mysql_result($records, $j, "Investor");

    array_push($return_arr,$row);
}

mysql_close();
echo json_encode($return_arr,JSON_UNESCAPED_SLASHES); 
?>
