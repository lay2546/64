<?php
session_start(); // เริ่มต้นเซสชัน

// ถ้าล็อกอินอยู่แล้ว ให้เปลี่ยนเส้นทางไปยังหน้าอื่น
if (isset($_SESSION['username'])) {
    header("Location: หน้าแรก.html"); 
    exit();
}

// กำหนดข้อความผิดพลาด
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        include 'login.php'; // รวมไฟล์จัดการล็อกอิน
    } elseif (isset($_POST['signup'])) {
        include 'signup.php'; // รวมไฟล์จัดการสมัครสมาชิก
    }
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบล็อกอิน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="วิจัย.css">
</head>

<body>
    <header class="navbar">
        <h1>สันทนาการ</h1>
        <nav>
            <ul>
                <li><a href="หน้าแรก.html">หน้าแรก</a></li>
                <li><a href="ห้องสมุด.html">ห้องสมุด</a></li>
                <li><a href="#">ฟิตเนส</a></li>
                <li><a href="#">สวนสาธารณะ</a></li>
                <li><a href="#">แกลเลอรี่</a></li>
            </ul>
        </nav>
    </header>

    <main class="content-wrapper">
        <section class="intro">
            <!-- ฟอร์มล็อกอิน -->
            <form method="POST" action="">
                <div class="imgcontainer">
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                    <button type="submit" name="login" class="btn btn-primary">Login</button> <!-- เปลี่ยนปุ่มเป็น submit -->

                    <div class="container mt-2" style="background-color:#f1f1f1; padding: 10px;">
                        <span class="psw">Forgot <a href="สมัครสมาชิก.html">password?</a></span>
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
            </form>
        </section>
        <section class="icons1">
            <img src="รูป/สันทนาการ.webp" alt="กิจกรรม 1" class="recreation-image">
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
