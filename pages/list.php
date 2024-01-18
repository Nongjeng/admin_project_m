<div class=" d-flex flex-column  vh-100">
    <?php include('./components/nav_top.php') ?>
    <div class=" flex-shrink-1 h-100 overflow-hidden d-flex flex-column">
        <div class=" d-flex justify-content-between px-4 pt-3">
            <p class=" text-center fs-2 m-0">รายการของฉัน</p>
            <a href="?page=list_history" class=" btn btn-500 rounded-pill">ประวัติ</a>

        </div>
        <div class=" d-block px-4 mb-2">
            <p class=" text-start fs-6 m-0">รายการล่าสุด</p>
        </div>
        <div class=" h-100 overflow-scroll ">
            <div class=" card mx-4 bg-200 border-0 mb-2">
                <div class=" card-body d-flex justify-content-between align-items-center">
                    <div class=" vstack text-center">
                        <p class=" fs-5 m-0">รหัสการสั่งซื้อ</p>
                        <span class=" fs-4 fw-light">001</span>
                    </div>
                    <div>
                        <button class=" btn btn-yellow-500" data-bs-toggle="modal"
                            data-bs-target="#list">ดูสถานะคำสั่งซื้อ</button>
                        <div class="modal fade " id="list" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered rounded-0">
                                <div class="modal-content rounded-0">
                                    <div class="modal-header bg-700 rounded-0 p-0 p-2">
                                        <p class="modal-title m-0 fs-5 text-white">รหัสการสั่งซื้อ 001 </p>
                                    </div>
                                    <div class="">
                                        <div class=" shadow-sm p-3 d-flex justify-content-center ">
                                            <div class=" d-flex flex-column justify-content-center">
                                                <div class="mx-auto bg-yellow-500 fs-4 rounded-circle d-flex justify-content-center align-items-center"
                                                    style=" width: 50px; height: 50px;">
                                                    1
                                                </div>
                                                <span class=" text-nowrap">รอรับออเดอร์</span>
                                            </div>
                                            <hr class=" border-2 w-100 mt-4">
                                            <div class=" d-flex flex-column justify-content-center">
                                                <div class="mx-auto bg-500 fs-4 rounded-circle d-flex justify-content-center align-items-center"
                                                    style=" width: 50px; height: 50px;">
                                                    2
                                                </div>
                                                <span class=" text-nowrap">กำลังจัดส่ง</span>
                                            </div>
                                            <hr class=" border-2 w-100 mt-4">
                                            <div class=" d-flex flex-column justify-content-center">
                                                <div class="mx-auto bg-500 fs-4 rounded-circle d-flex justify-content-center align-items-center"
                                                    style=" width: 50px; height: 50px;">
                                                    3
                                                </div>
                                                <span class=" text-nowrap">จัดส่งสำเร็จ</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <table class=" table">
                                                <thead>
                                                    <tr>
                                                        <td>ชื่อเมนู</td>
                                                        <td>รายละเอียด</td>
                                                        <td>จำนวน</td>
                                                        <td>ราคา</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>แกงเขียวหวานไก่</td>
                                                        <td>หิว</td>
                                                        <td>1</td>
                                                        <td>30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>แกงเขียวหวานไก่</td>
                                                        <td>หิว</td>
                                                        <td>1</td>
                                                        <td>30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class=" d-flex justify-content-between">
                                                <button class=" btn btn-500 rounded-0" data-bs-dismiss="modal">
                                                    Back</button>
                                                <button class=" btn btn-red-500 rounded-0" data-bs-toggle="modal"
                                                    data-bs-target="#calorder"> ยกเลิก</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="calorder" aria-hidden="true" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">รายละเอียดการยกเลิก
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        กรุณาใส่เหตุผลการยกเลิก (อย่ายกเลิกกรณีไม่จำเป็น)
                                        <input type="text" class=" form-control shadow-none">
                                        <div class=" d-flex justify-content-between mt-2">
                                            <button class=" btn btn-500 rounded-0" data-bs-dismiss="modal">
                                                Back</button>
                                            <button class=" btn btn-red-500 rounded-0" > ยืนยันการยกเลิก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include('./components/nav_buttom.php') ?>
</div>