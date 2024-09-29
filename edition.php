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
<?php
  require "Config.php";
 
  //get data
    if(isset($_REQUEST['update'])){

        //get data
        $id         =   $_REQUEST['id'];
        $name       =   $_REQUEST['name'];
        $email      =   $_REQUEST['email'];
        $password   =   $_REQUEST['password'];
        $contact    = $_REQUEST['contact'];
        $dob        =   $_REQUEST['dob'];
        
        //update
        $qry = "UPDATE `students` SET name='$name',  email='$email', password='$password', contact='$contact', dob='$dob' WHERE id = '$id' ";
        $run = mysqli_query($conn,$qry);

        if($run){
            echo '<script>alert("Record Update Successfully!")</script>';
            echo "<script>window.location.href ='Dash.php?id=$id';</script>";

        }
    }


?>
