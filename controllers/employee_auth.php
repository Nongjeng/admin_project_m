<?php
if (isset($_SESSION['emp'])) {
    $emp_id = $_SESSION['emp'];
    $sql_fetch_employee = "SELECT * FROM employee WHERE emp_id = $emp_id";
    $result = mysqli_query($conn, $sql_fetch_employee);
    if ($result) {
        $emp_data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    } else {
        echo "เกิดข้อผิดพลาดในการดึงข้อมูลพนักงาน";
    }
} else {
    echo "กรุณา login เพื่อเข้าถึงหน้านี้";
}
?>