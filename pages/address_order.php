<div class=" bg-blue-400 vh-100 vw-100 d-flex justify-content-center align-items-center pt-5">
    <div class=" card w-100 h-100 rounded-0 border-0 rounded-top-5">
        <div class=" card-body">
            <form method="post">
                <p class=" fs-4 fw-medium m-0 text-center">ชื่อร้าน</p>
                <p class=" fs-4 fw-medium m-0 text-center">สั่งซื้อสินค้า</p>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">ชื่อ-นามสกุล</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark"
                        disabled>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">เบอร์โทร</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark"
                        disabled>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">แผนกวิชา</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark"
                        disabled>
                </div>
                <div class=" hstack gap-3 my-2">
                    <p class=" fw-medium m-0 text-nowrap">สถานะ</p>
                    <input type="text" name="name" id=""
                        class=" form-control border-top-0 border-end-0 border-start-0 border-2 rounded-0 border-dark"
                        disabled>
                </div>
                <p class="mt-3">ตำแหน่งที่อยู่</p>
                <div id="googlemap" >

                </div>
                <script>
                    const getdiv = document.getElementById("googlemap");
                    function getLocation() {
                        if (navigator.geolocation) {
                            navigator.geolocation.watchPosition(showPosition);
                        } else {
                            getdiv.innerHTML = "โปรดทำการ เปิดตำแหน่งที่ตั้ง";
                        }
                    }
                    function showPosition(position) {

                        getdiv.innerHTML = '<iframe width="100%" height="200" src="https://maps.google.com/maps?q='+ position.coords.latitude +','+ position.coords.longitude +'&output=embed"></iframe>'
                    }
                </script>
                

            </form>
        </div>
    </div>

</div>