<?php
session_start();

// เชื่อมต่อฐานข้อมูล (เปลี่ยนค่าตามการตั้งค่าของคุณ)
$servername = "localhost"; // เซิร์ฟเวอร์ของคุณ
$username = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password = ""; // รหัสผ่านฐานข้อมูล
$dbname = "your_database"; // ชื่อฐานข้อมูล

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$user = $_POST['username'];
$pass = $_POST['password'];

// สืบค้นข้อมูลผู้ใช้จากฐานข้อมูล
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // ตรวจสอบรหัสผ่าน
    if (password_verify($pass, $row['password'])) {
        // ผู้ใช้ล็อกอินสำเร็จ
        $_SESSION['username'] = $user;
        header("Location: welcome.php"); // เปลี่ยนไปยังหน้าที่ต้องการ
        exit();
    } else {
        // รหัสผ่านไม่ถูกต้อง
        echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
} else {
    // ผู้ใช้ไม่พบ
    echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
}

$conn->close();
?>
