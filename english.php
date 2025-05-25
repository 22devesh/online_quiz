<?php
include('./partials/header.php');
include('./conn/conn.php');
include('./partials/modal.php');
?>

<body>
    <div class="main">
        <!-- Navbar and other HTML content -->

        <div class="take-quiz-area">
            <div class="headerBox">
                <h3 class="mt-4">Multiple Choicee!</h3>
                <small>Put the letter of the correct answer in the blank input provided.</small>
                <br>
                <small>Time left before the test is auto-submitted :
                    <span id="countdown"></span>
                </small>
            </div>
            <div class="questions">
                <?php
                $stmt = $conn->prepare('SELECT * FROM `english`');
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $quizID = $row['quiz_id'];
                    $quizQuestion = $row['quiz_question'];
                    $optionA = $row['option_a'];
                    $optionB = $row['option_b'];
                    $optionC = $row['option_c'];
                    $optionD = $row['option_d'];
                ?>
                    <div class="question">
                        <p><?= $quizID ?>. <?= $quizQuestion ?></p>
                        <ol class="choices">
                            <li><input type="radio" name="quiz<?= $quizID ?>" value="A"> <?= $optionA ?></li>
                            <li><input type="radio" name="quiz<?= $quizID ?>" value="B"> <?= $optionB ?></li>
                            <li><input type="radio" name="quiz<?= $quizID ?>" value="C"> <?= $optionC ?></li>
                            <li><input type="radio" name="quiz<?= $quizID ?>" value="D"> <?= $optionD ?></li>
                        </ol>
                    </div>
                <?php
                }
                ?>
            </div>
            <button type="button" class="btn btn-secondary" id="submitAnswer">Submit <i class="fa-sharp fa-solid fa-share"></i></button>
        </div>

    </div>

    <script>
        var tabSwitches = 0;
        var quizData = <?php echo json_encode($result); ?>;
        console.log("quizData:", quizData);

        document.getElementById("submitAnswer").addEventListener("click", function() {
            var correctAnswers = 0;

            quizData.forEach((quiz, index) => {
                var selectedAnswer = document.querySelector(`input[name="quiz${quiz.quiz_id}"]:checked`);
                var correctAnswer = quiz.correct_answer;

                if (selectedAnswer) {
                    var userAnswer = selectedAnswer.value.toUpperCase();
                    console.log("Question " + quiz.quiz_id + " - User Answer:", userAnswer, "Correct Answer:", correctAnswer);

                    if (userAnswer === correctAnswer) {
                        correctAnswers++;
                        selectedAnswer.closest('.question').classList.add("correct");
                    } else {
                        selectedAnswer.closest('.question').classList.add("incorrect");
                    }
                }
            });

            $("#resultModal").modal("show");
            $("#totalScore").val(correctAnswers);
        });

        document.addEventListener('visibilitychange', function() {
            if (tabSwitches > 1) {
                document.getElementById('submitAnswer').click();
                return;
            }
            if (document.visibilityState === 'hidden') {
                tabSwitches++;
                alert(`You switched to another tab! Test will be auto-submitted next time! Number of tab switches:` + tabSwitches);
            }
            if (tabSwitches > 1) {
                document.getElementById('submitAnswer').click();
            }
        });

        document.addEventListener('copy', (event) => {
            event.preventDefault(); // Prevent the default copy behavior
            alert("Copying text is disabled on this webpage.");
        });
        // Disable text selection
        document.addEventListener('selectstart', (event) => {
            event.preventDefault();
        });

        // Disable right-click context menu
        document.addEventListener('contextmenu', (event) => {
            event.preventDefault();
        });


        const totalTime = 60;
        let remainingTime = totalTime;

        const countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;
            countdownElement.textContent = `${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
            if (remainingTime <= 10) {
                countdownElement.style.color = "red";
            }
            if (remainingTime <= 0) {
                clearInterval(timerInterval);
                document.getElementById('submitAnswer').click();
            }
            remainingTime--;
        }

        const timerInterval = setInterval(updateCountdown, 1000);
        updateCountdown();

        ///
    </script>

    <?php include('./partials/footer.php') ?>
</body>