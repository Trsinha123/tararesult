<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
echo "<h2>Admin Dashboard</h2>";
echo "<a href='add_result.php'>Add Result</a> | <a href='logout.php'>Logout</a>";
?>