<div class=" bg-blue-400 vh-100 vw-100 d-flex justify-content-center align-items-center pt-5">
    <div class=" card w-100 h-100 rounded-0 border-0 rounded-top-5">
        <div class=" card-body">
            <form method="post">
                <p class=" fs-4 fw-medium m-0 text-center">Customer Personal Information </p>
                <div class=" d-flex justify-content-center">
                    <label for="upload_image" class=" position-relative">
                        <div style=" width: 130px; height: 130px;"
                            class="rounded-circle position-absolute d-flex justify-content-center align-items-center overlay-img-upload">
                            <i class="bi bi-camera-fill fs-1"></i>
                        </div>
                        <img src="./public/img/user.jpg" id="uploaded_image" class=" bg-200 rounded-circle"
                            style=" width: 130px; height: 130px;" />
                        <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                    </label>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">คำนำหน้า</p>
                    <select class="form-select shadow-none">
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="2">นางสาว</option>
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">ชื่อ-นามสกุล</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark">
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">เบอร์โทร</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark">
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">แผนกวิชา</p>
                    <select class="form-select shadow-none">
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="2">นางสาว</option>
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">สถานะ</p>
                    <select class="form-select shadow-none">
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="2">นางสาว</option>
                    </select>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">Username</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark">
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">Password</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark">
                </div>
                <div class=" d-flex justify-content-between mt-4">
                    <a href="?page=profile" class="btn btn-red-500 rounded-pill px-5">ยกเลิก</a>
                    <button class=" btn btn-green-500 rounded-pill px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>