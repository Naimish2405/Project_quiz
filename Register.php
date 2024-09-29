<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://bootswatch.com/5/pulse/bootstrap.min.css" rel="stylesheet">
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
<div class="container mt-5">
<h2>QUIZ_WEBSITE</h2>
    <div class="container mt-5">
        <h2>Create Account</h2>
        <form method="POST" action="process.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="tel" class="form-control" name="contact" placeholder="Enter your contact number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <center>
        <h5><a href="login.php">Login</a></h5>
    </center>
</body>
</html>