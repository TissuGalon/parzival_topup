<?php include '../proses/koneksi.php'; ?>
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
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>

    <!-- CUSTOM SAYA -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <!-- CUSTOM SAYA -->
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
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="../images/logo.png"
                                style="width:40px;height:40px;  aspect-ratio:1/1; object-fit:cover;" alt="">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Parzival</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-item ">
                        <a href="admin.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="data-produk-local.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Analytics">Data Produk Local</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="data-produk-api.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Analytics">Data Produk API</div>
                        </a>
                    </li>




                </ul>
            </aside>
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
                        <!-- DIVIDER -->
                        <div class="row">
                            <div class="col-6">
                                <h4 class="fw-bold py-3 mb-4">DATA PRODUK LOCAL</h4>
                            </div>
                            <div class="col-6 text-end">
                                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span>
                                    Produk</h4>
                            </div>
                        </div>
                        <!-- DIVIDER -->

                        <!-- TABLE -->
                        <div class="card">
                            <div class="card-body">

                                <button data-bs-toggle="modal" data-bs-target="#modaltambah"
                                    class="btn btn-primary mb-1"><i class="menu-icon tf-icons bx bx-plus"></i>
                                    Tambah Data</button>
                                <button class="btn btn-success mb-1"><i class='bx bxs-file-import'></i>
                                    Import</button>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered display py-4" id="example" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Tipe</th>
                                                <th>Jenis</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Tipe</th>
                                                <th>Jenis</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php
                                            $no = 1;
                                            $query = mysqli_query($conn, "SELECT * FROM product");
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr id="item<?php echo $no; ?>">
                                                    <td>
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['id_product'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nama_product'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tipe'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['jenis'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['gambar'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['status'] ?>
                                                    </td>
                                                    <td>
                                                        <button data-bs-toggle="modal" data-bs-target="#modaledit"
                                                            class="btn btn-sm btn-warning"><i
                                                                class="menu-icon tf-icons bx bx-pencil"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#ModalHapus"
                                                            onclick="hapus_item(document.getElementById('item<?php echo $no; ?>'))"
                                                            class="btn btn-sm btn-danger"><i
                                                                class="menu-icon tf-icons bx bx-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                            } ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- TABLE -->

                        <!-- DIVIDER -->
                    </div>
                    <!-- ISI CONTENT -->



                    <!-- MODAL -->
                    <!-- MODAL TAMBAH -->
                    <div class="modal fade" id="modaltambah" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="proses/tambah_produk_local.php" method="POST"
                                        enctype="multipart/form-data" id="form-tambah">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Nama Product</label>
                                                <input type="text" required name="namaproduct" id="nameWithTitle"
                                                    class="form-control" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-3">
                                                <label for="jenis" class="form-label">Jenis</label>
                                                <select name="jenis" required id="jenis" class="form-select">
                                                    <option value="">Pilih Jenis</option>
                                                    <option value="Games">Games</option>
                                                    <option value="Voucher">Voucher</option>
                                                    <option value="Pulsa">Pulsa</option>
                                                    <option value="Data">Data</option>
                                                    <option value="E-Wallet">E-Wallet</option>
                                                    <option value="Pascabayar">Pascabayar</option>
                                                </select>
                                            </div>
                                            <div class="col mb-0">
                                                <label for="tipe" class="form-label">Tipe</label>
                                                <input type="text" required name="tipe" id="tipe" class="form-control"
                                                    placeholder="xxxx@xxx.xx" />
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="col mb-0">
                                                <label for="nameWithTitle" class="form-label">Gambar Product</label>
                                                <input type="file" required name="gambar" id="nameWithTitle"
                                                    class="form-control" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                        <div class="mb-3"></div>
                                        <button type="submit" class="btn btn-primary mt-2 w-100">Tambahkan Data <i
                                                class="bx bx-plus"></i></button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL TAMBAH -->
                    
                     <!-- SCRIPT EDIT -->
                     <script>
                        function edit_item(item) {
                            let id_produk = item.getElementsByTagName("td")[1].innerText;
                            let nama_produk = item.getElementsByTagName("td")[2].innerText;

                            let text_hapus = `Hapus produk <b>${nama_produk}</b> ?`;
                            document.getElementById("text_hapus").innerHTML = text_hapus;

                            let url_hapus = `proses/hapus_produk_local.php?id_product=${Number(id_produk)}`;

                            document.getElementById('tombol_hapus').href = url_hapus;
                        }
                    </script>
                    <!-- SCRIPT EDIT -->
                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="modaledit" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Edit Data Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="proses/tambah_produk_local.php" method="POST"
                                        enctype="multipart/form-data" id="form-tambah">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="edit_nmproduk" class="form-label">Nama Product</label>
                                                <input type="text" required name="namaproduct" id="edit_nmproduk"
                                                    class="form-control" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-3">
                                                <label for="edit_jenis" class="form-label">Jenis</label>
                                                <select name="jenis" required id="edit_jenis" class="form-select">
                                                    <option value="">Pilih Jenis</option>
                                                    <option value="Games">Games</option>
                                                    <option value="Voucher">Voucher</option>
                                                    <option value="Pulsa">Pulsa</option>
                                                    <option value="Data">Data</option>
                                                    <option value="E-Wallet">E-Wallet</option>
                                                    <option value="Pascabayar">Pascabayar</option>
                                                </select>
                                            </div>
                                            <div class="col mb-0">
                                                <label for="edit_tipe" class="form-label">Tipe</label>
                                                <input type="text" required name="tipe" id="edit_tipe" class="form-control"
                                                    placeholder="Tipe" />
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="col mb-0">
                                                <label for="nameWithTitle" class="form-label">Gambar Product</label>
                                                <input type="file" required name="gambar" id="nameWithTitle"
                                                    class="form-control" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                        <div class="mb-3"></div>
                                        <button type="submit" class="btn btn-warning mt-2 w-100">Edit Data <i
                                                class="bx bx-pencil"></i></button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL EDIT -->

                    <!-- SCRIPT HAPUS -->
                    <script>
                        function hapus_item(item) {
                            let id_produk = item.getElementsByTagName("td")[1].innerText;
                            let nama_produk = item.getElementsByTagName("td")[2].innerText;

                            let text_hapus = `Hapus produk <b>${nama_produk}</b> ?`;
                            document.getElementById("text_hapus").innerHTML = text_hapus;

                            let url_hapus = `proses/hapus_produk_local.php?id_product=${Number(id_produk)}`;

                            document.getElementById('tombol_hapus').href = url_hapus;
                        }
                    </script>
                    <!-- SCRIPT HAPUS -->
                    <!-- MODAL HAPUS -->
                    <div class="modal fade" id="ModalHapus" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Alert</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <hr>
                                <div class="modal-body">
                                    <p id="text_hapus">null</p>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" id="tombol_hapus" class="btn btn-danger">Hapus</a>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL HAPUS -->
                    <!-- MODAL -->



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


    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
    <!-- DataTables -->



    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/dashboards-analytics.js"></script>
</body>

</html>