<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['quiz_question'], $_POST['option_a'], $_POST['option_b'], $_POST['option_c'], $_POST['option_d'], $_POST['correct_answer'])) {
        $quizID = $_POST['quiz_id'];
        $quizQuestion = $_POST['quiz_question'];
        $optionA = $_POST['option_a'];
        $optionB = $_POST['option_b'];
        $optionC = $_POST['option_c'];
        $optionD = $_POST['option_d'];
        $correctAnswer = $_POST['correct_answer'];

        try {
            $stmt = $conn->prepare("UPDATE programming SET 
                quiz_question = :quiz_question,
                option_a = :option_a,
                option_b = :option_b,
                option_c = :option_c,
                option_d = :option_d,
                correct_answer = :correct_answer
                WHERE quiz_id = :quiz_id");

            $stmt->bindParam(':quiz_id', $quizID);
            $stmt->bindParam(':quiz_question', $quizQuestion);
            $stmt->bindParam(':option_a', $optionA);
            $stmt->bindParam(':option_b', $optionB);
            $stmt->bindParam(':option_c', $optionC);
            $stmt->bindParam(':option_d', $optionD);
            $stmt->bindParam(':correct_answer', $correctAnswer);

            $stmt->execute();

            echo "
            <script>
                alert('Updated Successfully!');
                window.location.href = 'http://localhost/online-quiz-system/teacherProgramming.php';
            </script>
            ";
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
        <script>
            alert('Please fill in all the required fields.');
            window.location.href = 'http://localhost/online-quiz-system/teacherProgramming.php';
        </script>
        ";
    }
}
