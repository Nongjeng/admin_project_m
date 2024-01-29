<?php include('./controllers/employee_auth.php') ?>
<div class=" d-flex flex-column  vh-100">
    <?php include('./components/nav_top.php') ?>
    <div class=" flex-shrink-1 h-100 overflow-hidden d-flex flex-column">
        <p class=" fs-1 mt-3 fw-medium text-center">Dashboard</p>
        <div class=" px-3 vstack gap-3">
            <div class=" p-3 d-flex bg-yellow-500 w-100 align-items-center justify-content-between">
                <img src="./public/img/icon/empds1.png" alt="">
                <div class=" d-flex flex-column lh-1">
                    <p class="m-0 fs-2 text-end">รายได้วันนี้</p>
                    <p class="m-0 fs-2 text-end">00.00 บาท</p>
                </div>
            </div>
            <div class=" p-3 d-flex bg-green-500 w-100 align-items-center justify-content-between">
                <img src="./public/img/icon/empds2.png" alt="">
                <div class=" d-flex flex-column lh-1">
                    <p class="m-0 fs-2 text-end">จำนวนงานที่ได้รับวันนี้</p>
                    <p class="m-0 fs-2 text-end">0 ครั้ง</p>
                </div>
            </div>
            <div class=" p-3 d-flex bg-red-500 w-100 align-items-center justify-content-between">
                <img src="./public/img/icon/empds3.png" alt="">
                <div class=" d-flex flex-column lh-1">
                    <p class="m-0 fs-2">เลือกแบบระบุเอง</p>
                    <button class=" btn btn-yellow-500 btn-sm px-5" data-bs-toggle="modal" data-bs-target="#select">
                        เลือก
                    </button>
                    <div class="modal fade" id="select" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-0 bg-blue-600 text-white">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">กรุณาเลือก</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <a class=" btn btn-yellow-500 rounded-3 text-black text-decoration-none w-100 mb-1">รายได้ </a>
                                    <a class=" btn btn-green-500 rounded-3 text-black text-decoration-none w-100">จำนวนงาน </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('./components/nva_emp_buttom.php') ?>
</div>