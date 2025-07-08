<?php
require_once '../db_connect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $sub = $_POST['subject'];
    $theory = $_POST['theory'];
    $practical = $_POST['practical'];
    $sql = "INSERT INTO results (roll_no, name, subject, theory, practical)
            VALUES ('$roll', '$name', '$sub', $theory, $practical)";
    if ($conn->query($sql)) {
        echo "<p>Result added successfully</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
<h2>Add Student Result</h2>
<form method="POST">
    Roll No: <input type="text" name="roll" required><br>
    Name: <input type="text" name="name" required><br>
    Subject: <input type="text" name="subject" required><br>
    Theory Marks: <input type="number" name="theory" required><br>
    Practical Marks: <input type="number" name="practical" required><br>
    <input type="submit" value="Add Result">
</form>