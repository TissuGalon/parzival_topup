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

    <!-- CSS CUSTOM -->
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
    <!-- CSS CUSTOM -->
</head>

<body>


    <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 1) {
        header('location:admin/index.php');
    } ?>


    <!-- ISI HALAMAN -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- SIDEBAR -->
            <?php include 'sidebar.php'; ?>
            <!-- / SIDEBAR -->

            <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

            <!-- ISI -->
            <?php if (isset($_GET['x'])) {
                if ($_GET['x'] == 'home') {
                    include 'home.php';
                } elseif ($_GET['x'] == 'pencarian') {
                    include 'pencarian.php';
                } elseif ($_GET['x'] == 'riwayat') {
                    include 'riwayat.php';
                } elseif ($_GET['x'] == 'profil') {
                    include 'profil.php';
                }
            } else {
                echo '<script>window.location.href = "index.php?x=home"</script>';
            } ?>
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