<?php
// register.php: Handles registration and clear actions
$filename = 'students.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['clear'])) {
        // Clear the file
        file_put_contents($filename, '');
        header('Location: register.html');
        exit();
    }
    // Save registration
    $fields = [
        $_POST['fname'] ?? '',
        $_POST['lname'] ?? '',
        $_POST['id'] ?? '',
        $_POST['email'] ?? '',
        $_POST['password'] ?? '',
        $_POST['section'] ?? '',
        $_POST['course'] ?? ''
    ];
    $line = implode("|", array_map('trim', $fields)) . "\n";
    file_put_contents($filename, $line, FILE_APPEND);
    // Redirect to display page
    header('Location: display.php');
    exit();
}
?>