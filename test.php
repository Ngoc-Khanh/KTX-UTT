<?php
$servername = "localhost"; // Tên máy chủ MySQL, mặc định là localhost nếu MySQL đang chạy trên cùng máy
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL
$database = "api_resful_kytucxa"; // Tên cơ sở dữ liệu MySQL bạn muốn kết nối đến

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
}

echo "Kết nối thành công đến MySQL!<br>";

// Viết truy vấn SQL đơn giản để lấy dữ liệu từ bảng
$sql = "SELECT * FROM accounts"; // Thay your_table bằng tên bảng thực tế bạn muốn truy vấn

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // In dữ liệu từ mỗi hàng của kết quả
    while($row = $result->fetch_assoc()) {
        echo "ok";
    }
} else {
    echo "Không có dữ liệu trong bảng.";
}

// Đóng kết nối MySQL
$conn->close();
?>
