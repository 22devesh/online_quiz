<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/auth.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-4" href="#">Online Quiz System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./quiz.php">Quiz</a>
                </li>
            </ul>
        </div>



        <?php if (isset($_SESSION['name'])): ?>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</span>
            <a class="nav-link" href="./logout.php" class="auth-login">Log out</a>
        <?php else: ?>
            <a href="signup.php" class="auth-button">Sign Up</a>
            <a href="login.php" class="auth-button">Log In</a>
        <?php endif; ?>

    </nav>
    <div class="loginPage">
        <div class="loginBox">
            <h2>Login</h2>
            <form action="./endpoint/login_process.php" method="POST" class="loginForm">
                <span>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required>
                </span>
                <span>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                </span>
                <p>New here ? <a href="./signup.php">Create a new account</a>
                    <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </div>
</body>

</html>