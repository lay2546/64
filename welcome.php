<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // เปลี่ยนไปยังหน้าล็อกอินถ้าไม่ได้ล็อกอิน
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีต้อนรับ</title>
</head>
<body>
    <h1>ยินดีต้อนรับ, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">ออกจากระบบ</a>
</body>
</html>
