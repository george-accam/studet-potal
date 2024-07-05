<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $issue_type = isset($_POST['issuetype']) ? $_POST['issuetype'] : '';
    $issue = isset($_POST['issue']) ? $_POST['issue'] : '';

    $conn = new mysqli('localhost', 'root', '', 'agent_table');
    if ($conn) {
        $sql = "INSERT INTO `agents` (Name, Contact, Email, Issue_Type, Issue) 
                VALUES ('$name', '$contact', '$email', '$issue_type', '$issue')";
        $result = mysqli_query($conn, $sql);
        echo "Data inserted successfully";
        if ($result) {
            echo "Data inserted successfully";
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
?>
