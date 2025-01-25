<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: portfolio.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Username dan password untuk login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    if ($username == 'kai' && $password == 'kei') {
        $_SESSION['user'] = $username;
        header('Location: portfolio.php');
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portofolio Saya</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>