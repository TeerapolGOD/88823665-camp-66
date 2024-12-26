<?php
// php_04.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = isset($_POST['start']) ? (int)$_POST['start'] : 1;
    $end = isset($_POST['end']) ? (int)$_POST['end'] : 100;

    if ($start > $end) {
        echo "ค่าจุดเริ่มต้น ($start) ต้องน้อยกว่าหรือเท่ากับค่าจุดสิ้นสุด ($end)";
    } else {
    
        for ($i = $start; $i <= $end; $i++) {
            $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
            echo "$i $type<br>";
        }
    }
} else {
    // FORM เพื่อกรอกค่าช่วงตัวเลข
    echo '<form method="POST" action="">
            <label for="start">Start</label>
            <input type="number" name="start" id="start" required>
            <br>
            <label for="end">End</label>
            <input type="number" name="end" id="end" required>
            <br>
            <button type="submit">แสดงข้อมูล</button>
          </form>';
}
?>
