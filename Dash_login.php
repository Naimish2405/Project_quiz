

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://bootswatch.com/5/pulse/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fphotos%2Fquiz-time&psig=AOvVaw3B0BJXsbLWyo-3GgRk0GSZ&ust=1727680702586000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNCVlafO54gDFQAAAAAdAAAAABAO.jpg'); /* Replace with your image URL */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating */
            color: white; /* Adjust text color for visibility */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for form */
            padding: 20px;
            border-radius: 8px; /* Optional: rounded corners */
        }
   
    </style>
</head>
<body>
    <div class="container login-container mt-5">
        <h2 class="text-center p-2">Dashboard Login</h2>
        <form method="POST" action="Dash_login_process.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>

            <div class="text-center mt-2">
                <p>Don't have an account? <a href="Register.html" class="text-decoration-none">Sign up</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
