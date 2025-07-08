<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];
    if ($u === 'admin' && $p === '12345') {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid login";
    }
}
?>
<form method="POST">
    <h2>Admin Login</h2>
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
<?php if (isset($error)) echo "<p>$error</p>"; ?>