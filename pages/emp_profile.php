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

<div class=" bg-blue-400 vh-100 vw-100 d-flex justify-content-center align-items-center pt-5">
    <div class=" card w-100 h-100 rounded-0 border-0 rounded-top-5">
        <div class=" card-body">
            <form method="post">
                
                <div class=" d-flex justify-content-center">
                <img src="./public/img/user.jpg" id="uploaded_image" class=" bg-200 rounded-circle"
                            style=" width: 130px; height: 130px;" />
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">คำนำหน้า</p>
                    <!-- <select class="form-select shadow-none" name="prefix" >
                        
                    </select> -->
                </div>
                <div class="hstack gap-3 my-2">
                    <p class="fw-medium m-0 text-nowrap">ชื่อ-นามสกุล</p>
                    <input type="text" name="emp_name"
                        value="<?php echo isset($emp_data['emp_name']) ? $emp_data['emp_name'] : ''; ?>" disabled
                        class="form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark">
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">เบอร์โทร</p>
                    <input type="text" name="phone" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" >
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">แผนกวิชา</p>
                      
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">สถานะ</p>
                    <!-- <select class="form-select shadow-none" name="statuslevel">
                     
                    </select> -->
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">ตรางเรียน/สอน</p>
                    <input type="file" name="img_table" id="" class=" form-control" >
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">ธนาคาร</p>
                    <input type="text" name="bank_name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" >
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">เลขบัญชี</p>
                    <input type="text" name="bank_number" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" >
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">Username</p>
                    <input type="text" name="username" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" >
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">Password</p>
                    <input type="text" name="password" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" >
                </div>
                <div class=" d-flex justify-content-between mt-4">
                    <a href="?page=emp_dasbord" class="btn btn-red-500 rounded-pill px-5">Back</a>
                    <a   href="?page=emp_profile_edit" class=" btn btn-yellow-500 rounded-pill px-5" >แก้ไขข้อมูลส่วนตัว</a>
                </div>
            </form>
        </div>
    </div>
</div>