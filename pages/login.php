<div class=" vh-100 vw-100 overflow-hidden">
    <div class=" row row-cols-2 w-100 h-100 g-0">
        <div class=" col">
            <div class=" w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="./public/img/logo.png" class="w-100">
            </div>
        </div>
        <div class=" col  bg-blue-100">
            <div class=" d-flex flex-column h-100 align-items-center justify-content-center">
                <div class="mb-5">
                    <p class=" display-3 m-0 ">Login</p>
                </div>
                <div class="w-50 d-flex flex-column justify-content-end">
                    <form method="POST">
                        <div class=" d-flex justify-content-center mb-4">
                            <p class=" m-0 fs-2 me-3">Username</p>
                            <input type="text" name="username"
                                class=" fs-4  form-control border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-dark bg-transparent shadow-none"
                                required>
                        </div>
                        <div class=" d-flex justify-content-center mb-4">
                            <p class=" m-0 fs-2 me-3">Password</p>
                            <input type="password" name="password"
                                class=" fs-4  form-control border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-dark bg-transparent shadow-none"
                                required>
                        </div>
                        <div class="  d-flex justify-content-end">
                            <button class=" btn btn-lg btn-teal-500 px-5 rounded-0" name="login">Login</button>
                        </div>
                    </form>
                    <div class=" d-flex flex-column justify-content-end ">
                        <div class=" vstack ms-auto mt-5">
                        <a class=" btn btn-yellow-400 text-decoration-none btn-lg  px-5 rounded-0 mb-2">Regis For
                            Customer</a>
                        <a class=" btn btn-blue-400 text-decoration-none btn-lg  px-5 rounded-0">Regis For
                            Employee</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>