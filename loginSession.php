<?php
session_start();

$expiry_time = 300;

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $expiry_time) {
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(), '', time() - 3600);
    header('Location: session.php');
    exit();
}
$_SESSION['last_activity'] = time();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'shweta' && $password === 'shweta') {
        $_SESSION['user_id'] = $username;
        $_SESSION['logged_in'] = true;
        $_SESSION['expiry_time'] = time() + (5*60);
        echo "Login Success! Welcome $username";
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
