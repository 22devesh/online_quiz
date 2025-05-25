<?php
session_start();  // Start the session
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the session contains the necessary data and the rating is set
    if (isset($_SESSION['name'], $_SESSION['registration_number'], $_SESSION['section_name'], $_POST['total_score'], $_POST['rating'])) {

        // Sanitize and assign session data
        $quizTaker = htmlspecialchars($_SESSION['name']);  // Student's full name from session
        $registrationNumber = htmlspecialchars($_SESSION['registration_number']);  // Student's registration number from session
        $sectionName = htmlspecialchars($_SESSION['section_name']);  // Student's section name from session
        $totalScore = (int) $_POST['total_score'];  // The total score from the form
        $rating = (int) $_POST['rating'];  // The rating from the form (1-5)
        $dateTaken = date("Y-m-d H:i:s");  // Current date and time

        try {
            // Insert the data into the `tbl_result` table with separate registration number and section name
            $stmt = $conn->prepare("INSERT INTO tbl_result (quiz_taker, registration_number, section_name, total_score, rating, date_taken) 
                                    VALUES (:quiz_taker, :registration_number, :section_name, :total_score, :rating, :date_taken)");

            // Bind parameters to the SQL query
            $stmt->bindParam(':quiz_taker', $quizTaker);
            $stmt->bindParam(':registration_number', $registrationNumber);
            $stmt->bindParam(':section_name', $sectionName);
            $stmt->bindParam(':total_score', $totalScore);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':date_taken', $dateTaken);

            // Execute the query
            $stmt->execute();

            // Success message
            echo "
            <script>
                alert('Submitted Successfully!');
                window.location.href = 'http://localhost/online-quiz-system/student.php';
            </script>
            ";
            exit();
        } catch (PDOException $e) {
            // Catch any database errors
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        // If session data or form data is missing
        echo "
        <script>
            alert('Please make sure all required fields are filled.');
            window.location.href = 'http://localhost/online-quiz-system/take-quiz.php';
        </script>
        ";
    }
}
