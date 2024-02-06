<?php
if (isset($_SESSION['ad'])) {
    $admin_id = $_SESSION['ad'];
    $sql_fetch_admin = "SELECT * FROM admin WHERE admin_id = $admin_id";
    $result = mysqli_query($conn, $sql_fetch_admin);
    if ($result) {
        $admin_data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    } else {
        echo "เกิดข้อผิดพลาดในการดึงข้อมูลพนักงาน";
    }
} 
else {
    echo "กรุณา login เพื่อเข้าถึงหน้านี้";
}
?>