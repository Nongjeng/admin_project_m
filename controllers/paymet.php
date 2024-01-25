<?php
if (isset($_POST['transfer_money'])) {
    $orderid = $_POST['transfer_money'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $gpsstatus = $_POST['gpsstatus'];
    if ($gpsstatus == false) {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                timer: 1500,
                text: 'โปรดทำการเปิด GPS เพื่อดำเนินการต่อ',
            })
        </script>
        <?php
    }
}