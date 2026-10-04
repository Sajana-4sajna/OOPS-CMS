<?php

// Database connection
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "test"
);

if (!$conn) {
    die("Database connection failed");
}


// Get username from AJAX
$username = $_GET["username"];


// Search username in database
$sql = "SELECT * FROM users WHERE username = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "s",
    $username
);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);


// Check username
if (mysqli_num_rows($result) > 0) {

    echo "Username available";

} else {

    echo "Username not available";

}

?>