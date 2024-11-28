<?php 

require '../func/db.php';

$db = new Database();
function filterData(&$str){
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
//Excel file name for download
$fileName = "members-data_".date('Y-m-d').".xls";

//Column names
$fields = array('id', 'title', 'href_client', 'href_manager', 'price', 'content', 'data_pribit', 'statuses');

//Display column names as first row
$excelData = implode("\t", array_values($fields)). "\n";

//Fetch records from database
$query = $db->query('SELECT * FROM cargo WHERE href_client = \''.$_COOKIE['name'].'\'');
if($query->rowCount() > 0){
    //Output row of the data
    while($row = $query->fetch(PDO::FETCH_ASSOC)){

        $lineData = array($row['id'], $row['title'], $row['href_client'], $row['href_manager'], $row['price'], $row['content'],$row['data_pribit'],$row['statuses']);
        $excelData .= implode("\t", array_values($lineData)). "\n";
    }
}else{
    $excelData .= 'No records found...'."\n";
}
//Header for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

//Render excel data
echo $excelData;

exit();

?>