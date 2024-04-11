<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $conn = new mysqli('localhost', 'root', '', 'database1');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO signin (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password); // Corrected method call
        
        if ($stmt->execute()) {
            echo "<script>alert('Data Inserted successfully');</script>";
        } else {
            echo "Error: " ;
        }
        
        $stmt->close();
        $conn->close();
    }
}

?>