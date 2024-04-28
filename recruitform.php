<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "divya";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Form data
$company_name = $_POST['company_name'];
$job_title = $_POST['job_title'];
$skills = $_POST['skills'];
$location = $_POST['location'];
$stipend = $_POST['stipend'];



    // Insert data into database
    
    $sql = "INSERT INTO recruiter(company_name, job_title, skills, location, stipend)
            VALUES ('$company_name', '$job_title', '$skills', '$location', '$stipend')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location: index.html");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

$conn->close();
?>
