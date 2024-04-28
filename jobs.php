<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empowering Opportunities for Disabled Individuals</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            font-weight: bold;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 60px;
            width: 300px;
            float: left;
            background-color: #f8f9fa;
        }

        .card p {
            margin: 5px 0;
        }

        .apply-button {
            background-color: #28a745; /* Green color */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .apply-button:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .color-blind {
      background-color: #10759e;
      color: #d13806;
}
     

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Divya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <!-- <button id="colorToggleBtn" class="btn btn-outline-light">Toggle Color Scheme</button> -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs.php">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blogs</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.html">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="display-3">Job Opportunities for Disabled People</h1>
</div>

<?php
// Step 1: Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "divya";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve data from the recruiters table
$sql = "SELECT * FROM recruiter";
$result = $conn->query($sql);

?>
<?php
// Step 3: Loop through the retrieved data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <!-- Step 4: Display each record on a small rectangular card -->
        <div class="card">
            <p><strong>Company Name:</strong> <?php echo $row["company_name"]; ?></p>
            <p><strong>Job Title:</strong> <?php echo $row["job_title"]; ?></p>
            <p><strong>Skills:</strong> <?php echo $row["skills"]; ?></p>
            <p><strong>Location:</strong> <?php echo $row["location"]; ?></p>
            <p><strong>Stipend:</strong> <?php echo $row["stipend"]; ?></p>
            <button class="apply-button" onclick="apply(this)">Apply</button>
        </div>
        <?php
    }
} else {
    echo "No recruiters found.";
}
$conn->close();
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function apply(button) {
        button.innerText = 'Applied';
        button.disabled = true;
    }
</script>
<script>
    document.getElementById('colorToggleBtn').addEventListener('click', function() {
      document.body.classList.toggle('color-blind');
    });
</script>
</body>
