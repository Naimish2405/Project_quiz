<?php
    require 'Config.php';
    
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Define correct answers
$correct_answers = [
    1 => "Hyper Text Markup Language",
    2 => "<a>",
    3 => "<script src='script.js'></script>",
    4 => "font-size",
    5 => "POST",
    6 => "both include() and require()",
    7 => "Cascading Style Sheets",
    8 => "style",
    9 => "#header",
    10 => "font-family",
    11 => "background-color:blue;",
    12 => "static",
    13 => "script src='script.js'",
    14 => "function myFunction()",
    15 => "All of the above",
    16 => "// This is a comment",
    17 => "getElementById()",
    18 => "var x = 5;",
    19 => "A CSS framework",
    20 => "btn",
    21 => "Defines a column",
    //22 => "<div class='modal'>",
    23 => "Navbar",
    24 => "To create layouts",
    25 => "PHP: Hypertext Preprocessor",
    26 => "session_start()",
    27 => "var_name",
    28 => "Both include and require",
    29 => "// This is a comment",
    30 => "array = array();"
];

// Calculate the score
$score = 0;
$total_questions = count($correct_answers);
$user_answers = $_POST['answers']; // Get user answers from POST data

// Check each user's answer against the correct answer
foreach ($correct_answers as $q_no => $correct_answer) {
    if (isset($user_answers[$q_no]) && $user_answers[$q_no] == $correct_answer) {
        $score++;
    }
}

// Calculate wrong answers
$wrong_score = $total_questions - $score; // Number of wrong answers
$percentage_score = round(($score / $total_questions) * 100, 2);
$status_message = ($score >= 16) ? "Congratulations! You passed." : "Sorry, you failed. Please try again.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://via.placeholder.com/'); /* Replace with a valid image URL */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating */
            background-color: grey; /* Fallback background color */
            color: white; /* Adjust text color for visibility */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for form */
            padding: 20px;
            border-radius: 8px; /* Optional: rounded corners */
        }
        .form-control {
            background-color: #343a40; /* Dark background for input fields */
            color: white; /* Text color for input fields */
        }
        .form-control::placeholder {
            color: #adb5bd; /* Light color for placeholder text */
        }
        .form-control:focus {
            background-color: #495057; /* Darker background on focus */
            color: white; /* Text color on focus */
            box-shadow: none; /* Remove Bootstrap focus shadow */
            border-color: #80bdff; /* Change border color on focus */
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2>Quiz Results</h2>
        <p>You answered <strong><?php echo $score; ?></strong> questions correctly.</p>
        <p>You answered <strong><?php echo $wrong_score; ?></strong> questions incorrectly.</p>
        <p>Percentage Score: <strong><?php echo $percentage_score; ?>%</strong></p>
        <p><?php echo $status_message; ?></p>
    <b> <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! You have successfully logged in.</p></b>
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>
