<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['form_data'] = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'gender' => $_POST['gender'] ?? '',
        'course' => $_POST['course'] ?? '',
        'skills' => $_POST['skills'] ?? ''
    ];
    
    header("Location: /api/response.php");
    exit();
} else {
    header("Location: /");
    exit();
}
?>
