<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'gender' => $_POST['gender'] ?? '',
        'course' => $_POST['course'] ?? '',
        'skills' => $_POST['skills'] ?? ''
    ];
    
    $encodedData = base64_encode(json_encode($formData));
    header("Location: /api/response.php?data=" . urlencode($encodedData));
    exit();
} else {
    header("Location: /");
    exit();
}
?>
