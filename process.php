<?php
    $conn = mysqli_connect("localhost", "root", "", "quiz");
    if (!$conn) {
        echo "Not Connected to Database!";
    }

    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Contact = $_POST['contact'];
        $Password = $_POST['password'];
        $dob = $_POST['dob'];

        $sql = "SELECT * FROM students WHERE Email='$Email'";
        $run = mysqli_query($conn, $sql);

        if (mysqli_num_rows($run) > 0) {
            echo "Email already exists. Please use a different email.";
        } else {
            $sql = "INSERT INTO `students` (`name`, `email`, `password`, `contact`, `dob`) VALUES ('$Name', '$Email', '$Contact', '$Password', '$dob')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header('Location: login.php');
                exit();
            } else {
                echo "Data Not Inserted! 😞";
            }
        }
    }
    ?>

