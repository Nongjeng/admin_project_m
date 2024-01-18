<div class=" bg-blue-400 vh-100 vw-100 d-flex justify-content-center align-items-center pt-5">
    <div class=" card w-100 h-100 rounded-0 border-0 rounded-top-5">
        <div class=" card-body">
            <form method="post">
                <p class=" fs-4 fw-medium m-0 text-center">Customer Personal Information </p>
                <div class=" d-flex justify-content-center">
                <img src="./public/img/user.jpg" id="uploaded_image" class=" bg-200 rounded-circle"
                            style=" width: 130px; height: 130px;" />
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">คำนำหน้า</p>
                    <select class="form-select shadow-none " disabled>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="2">นางสาว</option>
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">ชื่อ-นามสกุล</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" disabled>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">เบอร์โทร</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" disabled>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">แผนกวิชา</p>
                    <select class="form-select shadow-none" disabled>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="2">นางสาว</option>
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">สถานะ</p>
                    <select class="form-select shadow-none" disabled>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="2">นางสาว</option>
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">Username</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" disabled>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">Password</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" disabled>
                </div>
                <div class=" d-flex justify-content-end mt-4">
                    <a href="?page=profile_edit" class="btn btn-yellow-500 rounded-pill px-5">แก้ไขข้อมูลส่วนตัว</a>
                    
                </div>
            </form>
        </div>
        <?php include('./components/nav_buttom.php') ?>
    </div>
    
</div>