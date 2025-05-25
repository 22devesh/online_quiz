<?php
session_start();  // Start the session
include 'conn.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query using PDO
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Check if user exists
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if ($password === $user['password']) {
            // Store session data
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name']; // Store user's name in session
            $_SESSION['registration_number'] = $user['registration_number']; // Store registration number
            $_SESSION['section_name'] = $user['section_name']; // Store section name

            header("Location: ../index.php"); // Redirect to the home page/dashboard
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}
