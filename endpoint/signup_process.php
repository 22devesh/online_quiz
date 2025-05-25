<?php
include 'conn.php'; // Database connection
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $registration_number = $_POST['registration_number'];  // New field
    $section_name = $_POST['section_name'];  // New field

    // Check if the username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Username exists, display error
        echo "Username already exists. Please choose a different one.";
    } else {
        // Prepare the SQL query to insert the new user into the database
        $stmt = $conn->prepare("INSERT INTO users (username, password, name, registration_number, section_name) 
                                VALUES (:username, :password, :name, :registration_number, :section_name)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);  // Store plain-text password
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':registration_number', $registration_number);
        $stmt->bindParam(':section_name', $section_name);

        // Execute the query and check if the insertion was successful
        if ($stmt->execute()) {
            // Save the user's details in the session
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['registration_number'] = $registration_number;
            $_SESSION['section_name'] = $section_name;

            // Redirect the user to the home page (or wherever appropriate)
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: Could not sign up. Please try again.";
        }
    }
}
