<?php
session_start(); // بدء الجلسة

// التحقق: إذا لم يكن هناك "بصمة" للمدير في الجلسة، اطرده لصفحة الدخول
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php"); // توجيهه لصفحة الدخول
    exit;
}
?>