<?php
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
if(empty($q)) {
    echo '沒有廠';
    exit;
}
$DB_NAME = "domo"; // 資料庫名稱
$DB_USER = "root"; // 資料庫管理帳號
$DB_PASS = ""; // 資料庫管理密碼
$DB_HOST = "localhost"; // 資料庫位址


$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);

if (!mysqli_select_db($con, $DB_NAME)) {
    die("選取資料庫失敗！");
} else {
    echo "";
}
mysqli_select_db($con,"demo");
mysqli_set_charset($con, "utf8");
$sql = "SELECT * FROM unit where toy = '".$q."'";
$result = $con->query($sql);

while($row = mysqli_fetch_array($result))
{
    echo "<option>".$row['user']."</option>";

}

$con->close();
?>
