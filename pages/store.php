<div class=" d-flex flex-column  vh-100">
    <?php include('./components/nav_top.php') ?>
    <div class=" flex-shrink-1 h-100 overflow-hidden d-flex flex-column">
        <p class=" text-center fs-2 my-3">ร้านค้าวิทยาลัยเทคนิคสัตหีบ</p>
        <div class=" h-100 overflow-scroll ">
            <?php
            $sql_store = "SELECT * FROM shop";
            $sql_store_q = mysqli_query($conn, $sql_store);
            while ($data = mysqli_fetch_assoc($sql_store_q)) { ?>
                <div class=" card mx-4 bg-200 border-0 hstack overflow-hidden mb-2">
                    <img src="./public/img/store/<?= $data['image'] ?>" alt="" style="width: 150px;">
                    <div class=" d-flex justify-content-center align-items-center w-100 vstack">
                        <p class=" fs-5 m-0 text-center"><?= $data['shop_name'] ?></p>
                        <a href="?page=store_product&id=<?= $data['shop_id'] ?>" class=" btn btn-yellow-500 rounded-3">ดูร้านค้า</a>
                    </div>
                </div>
            <?php } ?>



        </div>
    </div>
    <?php include('./components/nav_buttom.php') ?>
</div>