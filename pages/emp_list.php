<div class="d-flex flex-column vh-100">
    <?php include('./components/nav_top.php') ?>
    <div class="flex-shrink-1 h-100 overflow-hidden d-flex flex-column">
        <div class="d-flex justify-content-between px-4 pt-3">
            <p class="text-center fs-2 m-0">รายการของฉัน</p>
            <a href="?page=emp_list_history" class="btn btn-500 rounded-pill">ประวัติ</a>
        </div>
        <div class="d-block px-4 mb-2">
            <p class="text-start fs-6 m-0">รายการล่าสุด</p>
        </div>
        <div class="h-100 overflow-scroll">
            <?php
            $sql_order = "SELECT * FROM `order`";
            $result = mysqli_query($conn, $sql_order);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="card mx-4 bg-200 border-0 mb-2">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="vstack text-center">
                                <p class="fs-5 m-0">รหัสคำสั่งซื้อ</p>
                                <span class="fs-4 fw-light"><?= $row['order_id'] ?></span>
                            </div>
                            <div>
                                <button class="btn btn-yellow-500" data-bs-toggle="modal" data-bs-target="#list">ดูสถานะคำสั่งซื้อ</button>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<p>ตอนนี้ยังไม่มีรายการอาหาร</p>';
            }
            ?>
        </div>
    </div>
    <?php include('./components/nva_emp_buttom.php') ?>
</div>