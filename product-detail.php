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
        /* SHIMMER SKELETON */
        // Codepen presentation
        .container {
            margin-top: 4em;
            margin-bottom: 4em;
        }

        // Bootstrap Loading Skeleton
        %loading-skeleton {
            color: transparent;
            appearance: none;
            -webkit-appearance: none;
            background-color: #eee;
            border-color: #eee;

            &::placeholder {
                color: transparent;
            }
        }

        @keyframes loading-skeleton {
            from {
                opacity: .4;
            }

            to {
                opacity: 1;
            }
        }

        .loading-skeleton {
            pointer-events: none;
            animation: loading-skeleton 1s infinite alternate;

            img {
                filter: grayscale(100) contrast(0%) brightness(1.8);
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            li,
            .btn,
            label,
            .form-control {
                @extend %loading-skeleton;
            }
        }

        /* SHIMMER SKELETON */

        .ellipsis {
            white-space: nowrap;
            /* Prevents wrapping to the next line */
            overflow: hidden;
            /* Hides any content that overflows the container */
            text-overflow: ellipsis;
            /* Display an ellipsis (...) to indicate truncated text */
            max-width: 150px;
            /* Set a maximum width for the container */
        }



        /* Hover effect */
        .cool-card:hover {
            transition: transform 0.3s, background-color 0.3s;
            transform: scale(1.1);
            background-color: rgba(105, 108, 255, 0.16) !important;
            cursor: pointer;
        }
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



                    <!-- ISI CONTENT -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <a href="index.php" class="btn btn-light shadow-sm mb-2"><i class='bx bx-arrow-back'></i> </a>

                        <div class="row">

                            <!-- CARD -->
                            <div class="card p-3">
                                <div class="row">

                                    <?php
                                    $id = $_GET['id'];
                                    $kueri = mysqli_query($conn, "SELECT * FROM product WHERE id_product = $id");
                                    $row = mysqli_fetch_array($kueri);
                                    ?>


                                    <!-- LEFT -->
                                    <div class="col-12 col-md-4">
                                        <div class="col-12">
                                            <a href="#" class="card-link">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-4 col-md-4">
                                                            <img class="card-img card-img-left"
                                                                style="width: 100%; height: 100%; object-fit: cover;"
                                                                src="images/product-images/<?php echo $row['gambar'] ?>"
                                                                alt="Card image">
                                                        </div>
                                                        <div class="col-8 col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    <?php echo $row['nama_product'] ?>
                                                                </h5>
                                                                <p class="card-text"><small class="text-muted">
                                                                        <?php echo $row['tipe'] ?>
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
                                    <div class="col-12 col-md-8">
                                        <div class="row" id="itemproduct">
                                            <!-- SKELETON -->
                                            <?php for ($i = 0; $i < 8; $i++) { ?>
                                                <div class="col-6 col-md-3 loading-skeleton">
                                                    <a href="#" class="card-link">
                                                        <div class="card mb-3">
                                                            <div class="row g-0">
                                                                <div class="col-12 col-md-12">
                                                                    <img class="card-img"
                                                                        style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="${item.icon_url}"
                                                                        onerror="this.onerror=null; this.src='images/image-blank.jpg';"
                                                                        alt="Card image">
                                                                </div>
                                                                <div class="col-12 col-md-12">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">
                                                                            Loading Item ...
                                                                        </h5>
                                                                        <p class="card-text"><small class="text-muted">
                                                                                Loading Description ...
                                                                            </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                            <!-- SKELETON -->
                                            <!-- ITEM -->

                                            <!-- ITEM -->
                                        </div>
                                        <!-- RIGHT -->
                                    </div>
                                </div>
                                <!-- CARD -->





                                <script>
                                    async function getData(game) {
                                        const url = `https://prepaid.iak.dev/api/pricelist/game/${game}`;
                                        const options = {
                                            method: 'POST',
                                            headers: { 'Content-Type': 'application/json' },
                                            body: '{"username":"085161787501","sign":"1eeffa87e868d58e7d28a742282cfb93","status":"active"}'
                                        };

                                        try {
                                            const response = await fetch(url, options);
                                            const data = await response.json();
                                            console.log('API Response:', data);

                                            const pricelist = data['data']['pricelist'];

                                            let konten = '';

                                            pricelist.forEach(item => {
                                                konten += `
                                                <div class="col-6 col-md-3 cool-card">
                                                    <a href="item-detail.php?product_code=${item.product_code}&product_description=${item.product_description}" class="card-link">
                                                        <div class="card mb-3">
                                                            <div class="row g-0">
                                                                <div class="col-12 col-md-12">
                                                                    <img class="card-img" style="width: 100%; height: 100%; object-fit: cover;" 
                                                                        src="${item.icon_url}" onerror="this.onerror=null; this.src='images/image-blank.jpg';" alt="Card image">
                                                                </div>
                                                                <div class="col-12 col-md-12">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title ellipsis">
                                                                            ${item.product_nominal}
                                                                        </h5>
                                                                        <p class="card-text"><small class="text-muted ellipsis">
                                                                            ${item.product_description}
                                                                        </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            `;
                                            });

                                            konten += '';

                                            document.getElementById('itemproduct').innerHTML = konten;
                                        } catch (error) {
                                            console.error(error);
                                        } finally {

                                            layanan_loading.style.display = 'none';
                                        }
                                    }

                                    getData('<?php echo $_GET['api'] ?>');
                                </script>







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