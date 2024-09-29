<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://bootswatch.com/5/pulse/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        body {
            background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fphotos%2Fquiz-time&psig=AOvVaw199Y0roxmRHNM7tEZTnIRY&ust=1727697480940000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLCKuOeM6IgDFQAAAAAdAAAAABAK.jpg'); /* Replace with a valid image URL */
            background-size: cover; /* Adjusts image to cover the entire background */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating */
            background-color: grey; /* Fallback background color */
            color: white; /* Adjust text color for visibility */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Darker semi-transparent background for form */
            padding: 20px;
            border-radius: 8px; /* Optional: rounded corners */
            max-width: 600px; /* Set a max width for the container */
            margin: auto; /* Center the container */
            text-align: center; /* Center align text */
        }
        .welcome-header {
            margin: 20px 0;
            font-size: 24px; /* Larger font for the header */
        }
        .start-quiz-button {
            margin-top: 20px;
        }
        .start-quiz-button button {
            background-color: #ff5722; /* Button color */
            color: white; /* Button text color */
            border: none; /* Remove border */
            padding: 10px 20px; /* Padding for button */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer on hover */
            font-size: 16px; /* Button font size */
        }
        .start-quiz-button button:hover {
            background-color: #e64a19; /* Darker shade on hover */
        }
    </style>
</head>
<body>
<div class="container mt-5">
<h2>QUIZ_WEBSITE</h2>
    <div class="container mt-5">
        <div class="text-center welcome-header">
            <h1>Welcome,</h1>
            <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! You have successfully logged in.</p>
            <p class="lead">Ready to test your knowledge? Start the quiz below.</p>
        </div>
        <div class="text-center">
            <a href="quiz.php" class="btn btn-primary btn-lg start-quiz-button">Start the Quiz</a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
