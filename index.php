<?php
include('./partials/header.php');
include('./conn/conn.php');
session_start();
?>

<div class="main">
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
            <a class="nav-link" href="./logout.php" class="logout-button">Log out</a>
        <?php else: ?>
            <a href="signup.php" class="auth-button">Sign Up</a>
            <a href="login.php" class="auth-button">Log In</a>
        <?php endif; ?>

    </nav>
    <div class="main-container">
        <h1>Online Quiz App</h1>
        <div class="border-line"></div>

        <div class="selection-container">
            <h3>Select user type</h3>
            <div class="user-selection-button">
                <a href="student.php">
                    <button>Student</button>
                </a>

                <a href="teacher.php">
                    <button>Teacher</button>
                </a>

            </div>

        </div>
    </div>

</div>

<?php include('./partials/footer.php') ?>