<?php
session_start();

// بيانات المدير (في الواقع يتم جلبها من قاعدة بيانات مشفرة)
$admin_email = "admin@salamtour.com";
$admin_pass  = "salam2024"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    if ($email === $admin_email && $pass === $admin_pass) {
        // إذا البيانات صحيحة، نعطيه "بصمة" الدخول
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = "أحمد المدير";
        header("Location: admin.php"); // دخوله للوحة التحكم
    } else {
        $error = "بيانات الدخول غير صحيحة!";
    }
}
?>