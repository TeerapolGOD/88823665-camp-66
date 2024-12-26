<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = isset($_POST['start']) ? (int)$_POST['start'] : 1;
    $end = isset($_POST['end']) ? (int)$_POST['end'] : 100;

    if ($start > $end) {
        echo "Start ($start) ต้องน้อยกว่าหรือเท่ากับ End ($end)";
    } else {
        
        for ($i = $start; $i <= $end; $i++) {
            $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
            echo "$i $type<br>";
        }
    }
} else {

    echo '<form method="POST" action="">
            <label for="start">Start :</label>
            <input type="number" name="start" id="start" required>
            <br>
            <br>
            <label for="end">End :</label>
            <input type="number" name="end" id="end" required>
            <br>
            <br>
            <button type="submit">แสดงข้อมูล</button>
          </form>';
}
?>
