<?php
session_start();
session_unset();  // حذف بيانات الـ session
session_destroy(); // إنهاء الجلسة

header("Location: ../index.php");
exit();
?>
