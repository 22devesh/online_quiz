<?php
session_start();
if (!isset($_SESSION['name'])) {
    // Redirect to login.php if not logged in
    header("Location: login.php");
    exit(); // Stop further script execution
}
include('./partials/header.php');
include('./conn/conn.php');
// include('./partials/modal.php');
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
            <a class="nav-link" href="./logout.php">Log out</a>
        <?php else: ?>
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Log In</a>
        <?php endif; ?>

    </nav>

    <div id="pills-home">
        <h2 id="welcome-teacher">Welcome Student!</h2>
        <small>This is a student area where you can take quizzes, and the result will be sent to the teacher <br> area after you have submitted.</small>
        <br>
        <button id="takeQuiz">
            <a class="nav-link" href="./aptitude.php" style="color: inherit">Aptitude<i class="fa-solid fa-arrow-right"></i></a>
        </button>
        <button id="takeQuiz">
            <a class="nav-link" href="./programming.php" style="color: inherit">Programming<i class="fa-solid fa-arrow-right"></i></a>
        </button>
        <button id="takeQuiz">
            <a class="nav-link" href="./gk.php" style="color: inherit">General Knowledge<i class="fa-solid fa-arrow-right"></i></a>
        </button>
        <button id="takeQuiz">
            <a class="nav-link" href="./english.php" style="color: inherit">English<i class="fa-solid fa-arrow-right"></i></a>
        </button>
    </div>

</div>
</div>


<?php include('./partials/footer.php') ?>