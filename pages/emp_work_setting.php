<div class=" d-flex flex-column  vh-100">
    <?php include('./components/nav_top.php') ?>
    <div class=" flex-shrink-1 h-100 overflow-hidden d-flex flex-column">
        <div class=" p-3 my-auto">
            <form method="post" action="?page=emp_work_view">
                <div class=" bg-blue-200 p-3">
                    <p class=" fs-5 ">เริ่มวันที่</p>
                    <input type="date" name="datestart" id="" class=" form-control">
                    <p class=" fs-5 ">ถึง</p>
                    <p class=" fs-5 ">สิ้นสุดวันที่</p>
                    <input type="date" name="dateend" id="" class=" form-control">
                    <div class=" d-flex justify-content-end mt-3 ">
                        <button class=" btn btn-yellow-400 " name="viewwork">ดูยอดงาน</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
    <?php include('./components/nva_emp_buttom.php') ?>
</div>