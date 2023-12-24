<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- CUSTOM CSS -->
    <style>

    </style>
    <!-- CUSTOM CSS -->
</head>

<body>



    <!-- ISI HALAMAN -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- SIDEBAR -->
            <?php include 'sidebar.php'; ?>
            <!-- / SIDEBAR -->

            <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

            <!-- ISI -->
            <div class="layout-page">

                <!-- NAVBAR -->
                <?php include 'navbar.php'; ?>
                <!-- NAVBAR -->

                <!-- CONTENT -->
                <div class="content-wrapper">



                    <script>
                        async function getData(namaGame) {
                            const url = `https://prepaid.iak.dev/api/pricelist/game/${namaGame}`;
                            const options = {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: '{"username":"085161787501","sign":"1eeffa87e868d58e7d28a742282cfb93","status":"active"}'
                            };

                            const layanan_loading = document.getElementById('layanan_loading');
                            layanan_loading.style.display = '';

                            try {
                                const response = await fetch(url, options);
                                const data = await response.json();
                                console.log(data);

                                // Assuming data['data']['pricelist'] is an array of objects
                                const pricelist = data['data']['pricelist'];

                                let konten = '';

                                pricelist.forEach(item => {
                                    konten += `
                                    <div class="col-md-3 col-xl-2 col-6 itemtopup">
                                        <a href="product-detail.php?id=${item.product_code}" class="card-link">
                                            <div class="card mb-3">
                                                <img class="card-img-top" src="${item.icon_url}" alt="Card image cap" style="width: 100%; height: 100%;">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="card-title" id="itemtopup">${item.product_description}</h5>
                                                        <p class="card-text"><small class="text-muted">${item.product_nominal}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                `;
                                });

                                konten += '';

                                // Display the items in the 'layanan2' div
                                document.getElementById('layanan2').innerHTML = konten;
                            } catch (error) {
                                console.error(error);
                            } finally {
                                layanan_loading.style.display = 'none';
                            }
                        }
                        getData('<?php echo $_GET['id'] ?>');
                    </script>


                    <!-- ISI CONTENT -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">

                            <!-- CARD -->
                            <div class="card p-3">
                                <div class="row">
                                    <!-- LEFT -->
                                    <div class="col-12 col-md-4">
                                        <div class="col-12">
                                            <a href="#" class="card-link">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-12 col-md-4">
                                                            <img class="card-img card-img-left"
                                                                style="width: 100%; height: 100%; object-fit: cover;"
                                                                src="" alt="Card image">
                                                        </div>
                                                        <div class="col-12 col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    Nama
                                                                </h5>
                                                                <p class="card-text"><small class="text-muted">
                                                                        tipe
                                                                    </small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- LEFT -->
                                    <!-- RIGHT -->
                                    <div class="col-8">
                                        <div class="row">
                                            <!-- INPUT -->
                                            <div class="col-12">
                                                <div class="card mb-4">
                                                    <h5 class="card-header">1. Lengkapi Data</h5>
                                                    <div class="card-body">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="Item ID"
                                                                aria-describedby="floatingInputHelp">
                                                            <label for="floatingInput">Item ID</label>
                                                            <button class="btn btn-primary my-2">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- INPUT -->
                                            <!-- INPUT -->
                                            <div class="col-12">
                                                <div class="card mb-4">
                                                    <h5 class="card-header">2. Pilih Kategori</h5>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- ITEM KATEGORI -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Kategori</button>
                                                            </div>
                                                            <!-- ITEM KATEGORI -->
                                                            <!-- ITEM KATEGORI -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Kategori</button>
                                                            </div>
                                                            <!-- ITEM KATEGORI -->
                                                            <!-- ITEM KATEGORI -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Kategori</button>
                                                            </div>
                                                            <!-- ITEM KATEGORI -->
                                                            <!-- ITEM KATEGORI -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Kategori</button>
                                                            </div>
                                                            <!-- ITEM KATEGORI -->
                                                            <!-- ITEM KATEGORI -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Kategori</button>
                                                            </div>
                                                            <!-- ITEM KATEGORI -->
                                                            <!-- ITEM KATEGORI -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Kategori</button>
                                                            </div>
                                                            <!-- ITEM KATEGORI -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- INPUT -->
                                            <!-- INPUT -->
                                            <div class="col-12">
                                                <div class="card mb-4">
                                                    <h5 class="card-header">3. Pilih Layanan</h5>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- ITEM LAYANAN -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Layanan</button>
                                                            </div>
                                                            <!-- ITEM LAYANAN -->
                                                            <!-- ITEM LAYANAN -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Layanan</button>
                                                            </div>
                                                            <!-- ITEM LAYANAN -->
                                                            <!-- ITEM LAYANAN -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Layanan</button>
                                                            </div>
                                                            <!-- ITEM LAYANAN -->
                                                            <!-- ITEM LAYANAN -->
                                                            <div class="col my-1">
                                                                <button class="btn btn-primary w-100">Layanan</button>
                                                            </div>
                                                            <!-- ITEM LAYANAN -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- INPUT -->
                                            <!-- INPUT -->
                                            <div class="col-12">
                                                <div class="card mb-4">
                                                    <h5 class="card-header">4. Metode Pembayaran</h5>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <div class="col-12 my-1 ">
                                                                <button class="btn btn-primary w-100 text-start">
                                                                    <div class="d-flex">
                                                                        <div class="card">
                                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png"
                                                                                style="height:100%; width:10vh;"
                                                                                class="m-2" alt="">
                                                                        </div>
                                                                        <div class="m-2">
                                                                            <span>Pembayaran</span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <div class="col-12 my-1 ">
                                                                <button class="btn btn-primary w-100 text-start">
                                                                    <div class="row">
                                                                        <div class="col-2">
                                                                            <div class="card">
                                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png"
                                                                                    style="height:100%; width:10vh;"
                                                                                    class="m-2" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col mt-1">
                                                                            <span>Pembayaran</span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <div class="col-12 my-1 ">
                                                                <button class="btn btn-primary w-100 text-start">
                                                                    <div class="row">
                                                                        <div class="col-2">
                                                                            <div class="card">
                                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png"
                                                                                    style="height:100%; width:10vh;"
                                                                                    class="m-2" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col mt-1">
                                                                            <span>Pembayaran</span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <!-- ITEM PEMBAYARAN -->
                                                            <div class="col-12 my-1 ">
                                                                <button class="btn btn-primary w-100 text-start">
                                                                    <div class="row">
                                                                        <div class="col-2">
                                                                            <div class="card">
                                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png"
                                                                                    style="height:100%; width:10vh;"
                                                                                    class="m-2" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col mt-1">
                                                                            <span>Pembayaran</span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <!-- ITEM PEMBAYARAN -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- INPUT -->
                                        </div>
                                    </div>
                                    <!-- RIGHT -->
                                </div>
                            </div>
                            <!-- CARD -->



                        </div>
                    </div>
                    <!-- ISI CONTENT -->

                    <!-- FOOTER -->
                    <footer class="content-footer footer bg-footer-theme ">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column ">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <a href="#" target="_blank" class="footer-link fw-bolder">Muhammad Kholis</a>
                            </div>

                        </div>
                    </footer>
                    <!-- FOOTER -->

                    <div class="content-backdrop fade"></div>


                </div>
                <!-- CONTENT -->

            </div>
            <!-- ISI -->

        </div>
    </div>
    <!-- ISI HALAMAN -->





    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboards-analytics.js"></script>
</body>

</html>