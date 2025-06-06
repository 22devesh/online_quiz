<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['question'])) {
        $questionID = $_GET['question'];

        try {
            $stmt = $conn->prepare("DELETE FROM programming WHERE quiz_id = :questionID");
            $stmt->bindParam(':questionID', $questionID);
            $stmt->execute();

            // Redirect back to the quiz page
            header("Location: http://localhost/online-quiz-system/teacherProgramming.php");
            exit();
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "Invalid request. Missing question ID.";
    }
} else {
    echo "Invalid request method. Use GET to delete a question.";
}
