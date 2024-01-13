<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submission</title>
    <!-- Include Bootstrap CSS for styling (adjust the path if needed) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        // Check the message parameter in the URL
        if (isset($_GET['message'])) {
            $message = $_GET['message'];

            // Display corresponding message
            switch ($message) {
                case "success":
                    echo '<div class="alert alert-success" role="alert">Feedback submitted successfully!</div>';
                    break;
                case "error":
                    echo '<div class="alert alert-danger" role="alert">Error submitting feedback. Please try again.</div>';
                    break;
                case "email_required":
                    echo '<div class="alert alert-warning" role="alert">Email is required. Please provide a valid email address.</div>';
                    break;
                default:
                    // Handle other cases if needed
                    break;
            }
        }
        ?>
    </div>
    <!-- Include Bootstrap JS for functionality (adjust the path if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
