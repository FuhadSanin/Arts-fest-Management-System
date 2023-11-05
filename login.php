<!-- <?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'participants');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO hey (firstname, email, phone, dob) VALUES (?, ?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("ssss", $firstname, $email, $phone, $dob);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration Successful";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?> -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $usn = $_POST['usn'];
    $firstname = $_POST['firstname'];
    $dob = $_POST['dob'];
    $district = $_POST['district'];
    $email = $_POST['email'];

    // Add proper validation and sanitization here for each field

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'fest');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO student (usn, firstname, dob, district, email) VALUES (?, ?, ?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sssss", $usn, $firstname, $dob, $district, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration Successful";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>

