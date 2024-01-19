<div class=" d-flex flex-column  vh-100">
    <?php include('./components/nav_top.php') ?>
    <div class=" flex-shrink-1 h-100 overflow-hidden d-flex flex-column">
        <div class=" d-flex justify-content-between px-4 pt-3">
            <p class=" text-center fs-2 m-0">รายการของฉัน</p>
        </div>
        <div class=" h-100 overflow-scroll ">
            <div class=" card mx-4 bg-200 border-0 hstack overflow-hidden mb-2">
                <img src="./public/img/food/f1.png" alt="" style="width: 150px;">
                <div class=" d-flex flex-column px-2 w-100">
                    <div class="">
                        <p class=" fs-5 m-0 ">ขนมจีนแกงเขียวหวาน</p>
                        <p class=" fs-6 m-0">ราคา 35 บาท</p>
                    </div>
                    <div class=" d-flex justify-content-end">
                        <button class=" btn btn-red-500 rounded-3  px-3 btn-sm">ลบ</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" bg-200 rounded-top-5 border-1 border-dark shadow p-4">
            <div class=" d-flex justify-content-between">
                <div class=" fs-4 fw-light vstack lh-1"> ราคารวม<span class=" small"
                        style=" font-size: 12px;">ยังไม่รวมค่าจัดส่ง</span> </div>
                <div class=" fs-4">฿ 3000</div>
            </div>
            <button class=" btn btn-green-500 rounded-3 mt-2 w-100" data-bs-toggle="modal" data-bs-target="#distan">
                ถัดไป
            </button>
            <div class="modal fade" id="distan" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class=" fs-5 m-0 ">แผนกที่ต้องการจัดส่ง</p>
                            <select class="form-select">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class=" btn btn-green-500 rounded-3 mt-2 w-100" >
                                ยืนยันที่อยู่จัดส่ง
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./components/nav_buttom.php') ?>
</div>