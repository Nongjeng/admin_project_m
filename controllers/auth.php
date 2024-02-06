<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqluser = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $sqlemp = "SELECT * FROM employee WHERE username='$username' AND password='$password'";
    $sqlad = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $sql_user = mysqli_query($conn, $sqluser);
    $sql_emp = mysqli_query($conn, $sqlemp);
    $sql_ad = mysqli_query($conn, $sqlad);
    $user_data = mysqli_fetch_assoc($sql_user);
    $emp_data = mysqli_fetch_assoc($sql_emp);
    $ad_data = mysqli_fetch_assoc($sql_ad);

    if ($user_data) {
        $_SESSION['user'] = $user_data['cus_id'];
        header("Location:?page=home&id=" . $user_data['cus_id']);
    } elseif ($emp_data) {
        $_SESSION['emp'] = $emp_data['emp_id'];
        header("Location:?page=emp_dasbord&id=" . $emp_data['emp_id']);
    } elseif ($ad_data) {
        $_SESSION['ad'] = $ad_data['admin_id'];
        header("Location:?page=ad_customer&id=" . $ad_data['admin_id']);
    } else {
?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                timer: 1500,
                text: 'ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง',
            })
        </script>
    <?php
    }
}
if (isset($_POST['register_customer'])) {
    $perfix = $_POST['perfix'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $statuslevel = $_POST['statuslevel'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_chack_user = "SELECT username FROM customer WHERE username='$username'";
    if (mysqli_num_rows(mysqli_query($conn, $sql_chack_user)) > 0) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                timer: 1500,
                text: 'มีผู้ใช้งานนี้ในระบบแล้ว',
            })
        </script>
        <?php
    } else {
        if ($_FILES['img_user']['name']) {
            $userimg = uniqid('userimg_') . '.' . pathinfo($_FILES['img_user']['name'], PATHINFO_EXTENSION);
            $fileisupload = move_uploaded_file($_FILES['img_user']['tmp_name'], "./public/img/user/" . $userimg);
            $filename = $userimg;
            $sql_user_insert = "INSERT INTO customer VALUE 
                (null,'$name','$perfix','$statuslevel','$phone','$department','$username','$password','$userimg')";
            if (mysqli_query($conn, $sql_user_insert)) {
        ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'ลงทะเบียนสำเร็จ',
                        timer: 1500,
                        text: 'ระบบกำลังนำไปยัง หน้า Login',
                    })
                </script>
            <?php
                header("Location:?page=login");
            } else {
            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        timer: 1500,
                        text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    })
                </script>
            <?php
            }
        } else {
            $sql_user_insert = "INSERT INTO customer VALUE 
                (null,'$name','$perfix','$statuslevel','$phone','$department','$username','$password','user.jpg')";
            if (mysqli_query($conn, $sql_user_insert)) {
            ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'ลงทะเบียนสำเร็จ',
                        timer: 1500,
                        text: 'ระบบกำลังนำไปยัง หน้า Login',
                    })
                </script>
            <?php
                header("Location:?page=login");
            } else {
            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        timer: 1500,
                        text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    })
                </script>
        <?php
            }
        }
    }
}
if (isset($_POST['register_employee'])) {
    $perfix = $_POST['perfix'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $statuslevel = $_POST['statuslevel'];
    $bank_name = $_POST['bank_name'];
    $bank_number = $_POST['bank_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($_FILES['img_table'])) {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                timer: 1500,
                text: 'โปรดทำการอัพโหลดตรางเรียน / ตรางสอน',
            })
        </script>
    <?php
    }
    $sql_chack_user = "SELECT username FROM employee WHERE username='$username'";
    if (mysqli_num_rows(mysqli_query($conn, $sql_chack_user)) > 0) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                timer: 1500,
                text: 'มีผู้ใช้งานนี้ในระบบแล้ว',
            })
        </script>
        <?php
    } else {
        if ($_FILES['img_user']['name']) {
            $userimg = uniqid('userimg_') . '.' . pathinfo($_FILES['img_user']['name'], PATHINFO_EXTENSION);
            $fileisupload = move_uploaded_file($_FILES['img_user']['tmp_name'], "./public/img/user/" . $userimg);
            $userimg_table = uniqid('usertable_') . '.' . pathinfo($_FILES['img_table']['name'], PATHINFO_EXTENSION);
            $fileisupload_table = move_uploaded_file($_FILES['img_table']['tmp_name'], "./public/img/table/" . $userimg_table);
            $sql_emp_insert = "INSERT INTO employee VALUE 
            (null,'$name','$perfix','$statuslevel','$phone','$department','$username','$password','$fileisupload_table','$fileisupload');";
            if (mysqli_query($conn, $sql_emp_insert)) {
        ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'ลงทะเบียนสำเร็จ',
                        timer: 1500,
                        text: 'ระบบกำลังนำไปยัง หน้า Login',
                    })
                </script>
            <?php
                header("Location:?page=login");
            } else {
            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        timer: 1500,
                        text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    })
                </script>
            <?php
            }
        } else {
            $sql_emp_insert = "INSERT INTO employee VALUE 
            (null,'$name','$perfix','$statuslevel','$phone','$department','$username','$password','$fileisupload_table','user.jpg');";
            if (mysqli_query($conn, $sql_emp_insert)) {
            ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'ลงทะเบียนสำเร็จ',
                        timer: 1500,
                        text: 'ระบบกำลังนำไปยัง หน้า Login',
                    })
                </script>
            <?php
                header("Location:?page=login");
            } else {
            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        timer: 1500,
                        text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    })
                </script>
<?php
            }
        }
    }
}
