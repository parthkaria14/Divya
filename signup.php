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
$name = $_POST['name'];
$pass = $_POST['pass'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$disability= $_POST['disability'];

// File upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["Certificate"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
//}

// Check file size
// if ($_FILES["Certificate"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow only PDF files
if($fileType != "pdf") {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["Certificate"]["tmp_name"], $target_file)) {
    // Insert data into database
    $sql = "INSERT INTO users(name, pass, mobile, gender, age, disability, certificate)
            VALUES ('$name', '$pass', '$mobile', '$gender', '$age', '$disability', '$certificate')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      $_SESSION["name"] = $name;
        header("Location: blog.html");

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$conn->close();
?>
