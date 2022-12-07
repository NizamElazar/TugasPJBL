<body class="text-light" style="background-color: #000000 ;">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <div class="container-xl rounded pt-5" style="background-color: #000000 ;">
        <div class="container p-5 m-3 mt-5  rounded w-100" style="background-color: #000000 ;">
            <form action="proses_login.php" method="post">
                <div class="col-md-8 mb-3 mx-auto invisible">a</div>
                <div class="col-md-8 mb-3 mx-auto">
                    <label class="display-6 form-label fw-bold">Login</label>
                    <hr class="text-light">
                    <p class="fs-4 form-label">Masukkan Username</p>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="col-md-8 mb-3 mx-auto">
                    <p class="fs-4 form-label">Masukkan Password</p>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="col-md-8 mb-3 mx-auto">
                    <p>Tidak memiliki akun? <a href="register.php">Daftar</a></p>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
        </div>
        </form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>