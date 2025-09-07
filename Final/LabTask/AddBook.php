<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($SERVER['REQUEST_METHOD'] !== 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    if (empty($_POST['title']) || empty($_POST['author']) || empty($_POST['year'])) {
        die("All fields are required.");
    } else {
        $sql = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', $year)";
    }

}

if ($conn->query($sql) === TRUE) {
    echo "New book added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>