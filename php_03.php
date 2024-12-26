<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $multiplier = isset($_POST['multiplier']) ? (int)$_POST['multiplier'] : 1;
    
    for ($i = 1; $i <= 12; $i++) {
        echo "$multiplier x $i = " . ($multiplier * $i) . "<br>";
    }
} else {

    echo '<form method="POST" action="">
            <input type="number" name="multiplier" id="multiplier" required>
            <button type="submit">แสดงตาราง</button>
          </form>';
}
?>
