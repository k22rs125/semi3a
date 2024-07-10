<?php

require_once("ava.php"); 

    echo "<select name='year'>";
    echo "<option value='2024'>2024年</option>";
    echo "<option value='2025'>2025年</option>";
    echo "</select>";

    echo "<select name='month'>";
    echo "<option value='1'>1月</option>";
    echo "<option value='2'>2月</option>";
    echo "<option value='3'>3月</option>";
    echo "<option value='4'>4月</option>";
    echo "<option value='5'>5月</option>";
    echo "<option value='6'>6月</option>";
    echo "<option value='7'>7月</option>";
    echo "<option value='8'>8月</option>";
    echo "<option value='9'>9月</option>";
    echo "<option value='10'>10月</option>";
    echo "<option value='11'>11月</option>";
    echo "<option value='12'>12月</option>";
    echo "</select>";

    echo "<input type='submit' name='search' value='検索'/>";

    if (isset($_POST['search'])) {
        $year = $_POST['year'];
        $month = $_POST['month'];
        
        // スケジュールを取得
        $schedule = getSchedule($year, $month);
        
        // 結果を表示
        echo '<h2>スケジュール</h2>';
        
        echo '<h3>通常のスケジュール:</h3>';
        if (!empty($schedule['regular'])) {
            echo '<ul>';
            foreach ($schedule['regular'] as $day) {
                echo "<li>{$day}日</li>";
            }
            echo '</ul>';
        } else {
            echo '<p>スケジュールはありません。</p>';
        }
        
        echo '<h3>特別なスケジュール:</h3>';
        if (!empty($schedule['making'])) {
            echo '<ul>';
            foreach ($schedule['making'] as $day) {
                echo "<li>{$day}日</li>";
            }
            echo '</ul>';
        } else {
            echo '<p>スケジュールはありません。</p>';
        }
    }

?>
