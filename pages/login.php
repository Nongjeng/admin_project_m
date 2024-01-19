<div class=" bg-blue-400 vh-100 vw-100 d-flex justify-content-center align-items-center">
    <div class=" card w-100 rounded-0 border-0">
        <div class=" card-body">
            <div class=" d-flex justify-content-center">
                <img src="./public/img/logo.png" alt="" class="w-75 mx-auto">
            </div>
            <div class="">
                <?php include('./controllers/auth.php') ?>
                <form class=" px-3" method="post">
                    <div class="mb-3">
                        <p class=" fs-5 fw-medium m-0 rounded-0 shadow-none">Username</p>
                        <input type="text" name="username" id=""
                            class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" required>
                    </div>
                    <div class="">
                        <p class=" fs-5 fw-medium m-0 rounded-0 shadow-none">Password</p>
                        <input type="password" name="password" id=""
                            class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark" required>
                    </div>
                    <div class=" d-flex justify-content-center mt-5">
                        <button class=" btn btn-green-400 fs-3 btn-lg px-5 py-1" name="login" type="login">Login</button>
                    </div>
                </form>
                <div class=" d-flex justify-content-between mt-5 ">
                    <a class=" link-blue-400 text-decoration-none text-nowrap" href="?page=register_customer">Register For Customer</a>
                    <a class=" link-blue-400 text-decoration-none text-nowrap" href="?page=register_employee">Register For Employee</a>
                </div>
            </div>
        </div>
    </div>
</div>