<?php include('./controllers/admin_auth.php') ?>
<div class=" d-flex flex-column  vh-100">
    <?php include('./components/nav_topAD.php') ?>
    <div class=" flex-shrink-1 h-100 overflow-hidden d-flex flex-column">

        <div class="px-3 vstack gap-3">
            <div class="card mt-3 border-0">
                <div class="card-body d-flex justify-content: space-between">
                    <h6 class="card-title">แสดง</h6>
                    <input type="text" value="10" class="mx-2 text-center" style="width: 100px;">
                    <h6 class="card-title mx-2">รายการ</h6>
                </div>
                <div class="card mt-2 border-0">
                    <div class="card-body d-flex justify-content: space-between">
                        <h6 class="card-title">ค้นหา</h6>
                        <input type="text" class="mx-2" style="width: 100px;" readonly>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-green-300 mx-3 mt-10" style="width: 100px; height: 40px;  font-size: 100%; ">เพิ่มข้อมูล</button>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                <table class="table-responsive">
        <thead class="bg-600 text-white" >
          <tr>
            <th>รหัสร้านค้า</th>
            <th>ชื่อร้านค้า</th>
            <th>ที่อยู่ร้านค้า</th>
            <th>รูปร้านค้า</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>ร้านค้าตัวอย่าง</td>
            <td>123 ถนนสุขุมวิท กรุงเทพฯ</td>
            <td>456 ถนนเพชรบุรี กรุงเทพฯ</td>
          </tr>
          <tr>
            <td>2</td>
            <td>ร้านค้าตัวอย่าง 2</td>
            <td>456 ถนนเพชรบุรี กรุงเทพฯ</td>
            <td>456 ถนนเพชรบุรี กรุงเทพฯ</td>
          </tr>
        </tbody>
      </table>
                </div>
            </div>

        </div>




    </div>
    <?php include('./components/nva_ad_buttom.php') ?>
</div>