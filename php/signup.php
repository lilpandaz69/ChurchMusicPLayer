<?php
include '../db.php';

$message = "";  // رسالة الخطأ أو النجاح

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $message = "هذا الإيميل مسجل بالفعل، جرب إيميل تاني.";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            // تسجيل ناجح - ممكن تعمل redirect لل login أو تعرض رسالة نجاح
            // header("Location: ../login.html");
            // exit();

            $message = "تم التسجيل بنجاح، يمكنك الآن تسجيل الدخول.";
        } else {
            $message = "حدث خطأ أثناء التسجيل.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>تسجيل حساب جديد</title>
  <link rel="stylesheet" href="../html/signup.css" />
</head>
<body>
  <form action="signup.php" method="POST">
    <h2>إنشاء حساب جديد</h2>
    <input type="text" name="username" placeholder="اسم المستخدم" required />
    <input type="email" name="email" placeholder="الإيميل" required />
    <input type="password" name="password" placeholder="كلمة المرور" required />
    <button type="submit">تسجيل</button>
  </form>

  <?php if ($message != ""): ?>
    <p style="color: red; text-align: center; margin-top: 15px;"><?php echo $message; ?></p>
  <?php endif; ?>

</body>
</html>
