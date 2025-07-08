<?php
require_once 'db_connect.php';
?>
<h2>Student Result</h2>
<form method="GET">
    Roll No: <input type="text" name="roll" required>
    <input type="submit" value="Check Result">
</form>
<?php
if (isset($_GET['roll'])) {
    $roll = $_GET['roll'];
    $sql = "SELECT * FROM results WHERE roll_no = '$roll'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo "<h3>Name: {$row['name']}</h3>";
        echo "<p>Subject: {$row['subject']}</p>";
        echo "<p>Theory: {$row['theory']}</p>";
        echo "<p>Practical: {$row['practical']}</p>";
        echo "<p>Total: " . ($row['theory'] + $row['practical']) . "</p>";
    } else {
        echo "<p>Result not found.</p>";
    }
}
?>