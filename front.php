<?php
require_once("ava.php"); 

if (isset($_POST['search'])) {
    $year = $_POST['year'];
    $month = $_POST['month'];
}else{
    $year = date('Y');
    $month = date('m');
}

echo "<h2>空き状況状態検索</h2>";

echo "<form method='post' action=''>";
echo '<select name="year">' . PHP_EOL;
for ($i=2024; $i<=2025; $i++){
        echo '<option value="' . $i . '">' . $i.'年</option>' . PHP_EOL;
}
echo '</select>' . PHP_EOL;


echo '<select name="month">' . PHP_EOL;
for ($i=1; $i<=12; $i++){
    if($i == 4 ){
        echo '<option value="' . $i . '"selected>' . $i.'月</option>' . PHP_EOL;
    }else{
        echo '<option value="' . $i . '">' . $i.'月</option>' . PHP_EOL;
    }
}
echo '</select>' . PHP_EOL;

echo "<input type='submit' name='search' value='検索'/>";
echo "</form>";

    
// 結果を表示
echo '<h2>スケジュール</h2>';
echo "{$year}年{$month}月のスケジュール<br>";
$timestamp = mktime(0,0,0, $month, 1, $year);

$days = date('t',$timestamp);
$wday = date('w',$timestamp);
$wdays = array("日", "月", "火", "水", "木", "金", "土");
$w = $wday;

$schedule = getSchedule($year, $month);
$reserve = getReserve($year, $month);

for($i = 1; $i <= $days; $i++){
    if(in_array($i,$schedule)){
        $r = "休業日";
    }else{
        $r = "〇";
    }

    if(in_array($i, $reserve)){
        $r = "予約済み";
    }

    echo $i."日(".$wdays[$w].") ".$r."<br>";
    $w++;
    if($w % 7 == 0){
        $w = 0;
    }
}


