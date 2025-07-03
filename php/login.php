<?php
session_start();
include '../db.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user   = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: ../index.php");
        exit();
    } else {
        $message = "الإيميل أو كلمة المرور غير صحيحة";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../src/assets/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>تسجيل الدخول</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>تسجيل الدخول</h2>
        <input type="email" name="email" placeholder="الإيميل" required />
        <input type="password" name="password" placeholder="كلمة المرور" required />
        <button type="submit">دخول</button>
    </form>

    <?php if ($message != ""): ?>
        <p style="color: red; text-align: center; margin-top: 15px;"><?php echo $message; ?></p>
    <?php endif; ?>

</body>
</html>
