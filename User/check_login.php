<?php
// Replace these values with your own database credentials
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "weblogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Password is correct, start a session and redirect to a protected page
        session_start();
        $_SESSION['user_id'] = $row['id'];
        header("location: protected.php");
    } else {
        // Incorrect password, show an error message
        $error = "Incorrect password";
    }
} else {
    // User not found, show an error message
    $error = "User not found";
}

// Close the statement and the connection
$stmt->close();
$conn->close();

// Display error message (if any)
if (isset($error)) {
    echo "<p>$error</p>";
    include 'index.html';
    exit;
}
?>