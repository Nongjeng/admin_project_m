<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqla = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $sql_q = mysqli_query($conn, $sqla);
    $useraa = mysqli_fetch_assoc($sql_q);
    if (mysqli_num_rows($sql_q) > 0) {
        $_SESSION['user'] = $useraa['cus_id'];
        header("Location:?page=home");
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                timer: 1500,
                text: 'รหัสผ่านไม่ถูกต้อง',
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
                title: 'Oops...',
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
                        title: 'Oops...',
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
                        title: 'Oops...',
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
                title: 'Oops...',
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
                title: 'Oops...',
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
                        title: 'Oops...',
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
                        title: 'Oops...',
                        timer: 1500,
                        text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                    })
                </script>
                <?php
            }
        }
    }
}
