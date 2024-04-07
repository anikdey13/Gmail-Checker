<?php
session_start(); // Start the session

// Include the database connection file
require_once '../database/connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validate form fields and sanitize input
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Prepare SQL statement to retrieve user data from the database based on username
    $sql = "SELECT * FROM users WHERE username = ?";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if user exists and verify password
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo("login done");
            // // Password is correct, set session variables and redirect to dashboard or home page
            // $_SESSION['username'] = $username;
            // $_SESSION['fullname'] = $row['fullname'];
            // header("Location: dashboard.php"); // Change this to the actual dashboard or home page
            // exit();
        } else {
            // Password is incorrect
            echo "Incorrect password!";
        }
    } else {
        // User does not exist
        echo "User does not exist!";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
