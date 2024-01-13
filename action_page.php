<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : "";
    $feedback = isset($_POST['feedback']) ? $conn->real_escape_string($_POST['feedback']) : "";

    if (!empty($email)) {
        $sql = "INSERT INTO feedback (email, feedback) VALUES ('$email', '$feedback')";

        if ($conn->query($sql) === TRUE) {
            echo "Thank you for your valuable Feedback";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Email is required.";
    }
}

$conn->close();
?>
