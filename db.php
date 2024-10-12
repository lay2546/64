
<?php
$servername = "localhost"; // ที่อยู่เซิร์ฟเวอร์ฐานข้อมูล
$username = "64"; // ชื่อผู้ใช้สำหรับ MySQL (ค่าเริ่มต้นใน XAMPP)
$password = ""; // รหัสผ่าน (ปกติจะไม่มีรหัสผ่านสำหรับผู้ใช้ root ใน XAMPP)
$dbname = "user"; // ชื่อฐานข้อมูลที่คุณสร้าง

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // แสดงข้อความผิดพลาดหากการเชื่อมต่อล้มเหลว
}
?>
