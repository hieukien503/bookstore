<?php
    // Input: book title or author from user
    $userInput = $_POST['userInput'];

    // Connect to database (replace with your connection details)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "books";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query to find similar books based on user input (modify based on your database schema)
    $sql = "SELECT * FROM books WHERE title LIKE '%$userInput%' OR author LIKE '%$userInput%'";

    $result = $conn->query($sql);

    // Process results and generate JSON response
    $response = array();

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $response[] = array(
        "title" => $row["title"],
        "author" => $row["author"],
        // Include other relevant fields from your database
        );
    }
    } else {
    $response = array("message" => "No matching books found");
    }

    // Encode data as JSON and echo response
    echo json_encode($response);

    $conn->close();
?>
