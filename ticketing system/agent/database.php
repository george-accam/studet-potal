<a href="agent.html"></a>
<?php
$servername = "localhost"; // Change this to your database server name if it's different
$username = "your_username"; // Replace with your database username
$password = "your_password"; // Replace with your database password
$dbname = "your_database_name"; // Replace with your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
