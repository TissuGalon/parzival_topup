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
                    <h4 class="fw-bold py-3 mb-4">DATA PRODUK API</h4>
                </div>
                <div class="col-6 text-end">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span>
                        Produk</h4>
                </div>
            </div>
            <!-- DIVIDER -->

            <script>
                async function getData() {
                    const url = 'https://prepaid.iak.dev/api/pricelist';
                    const options = {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: '{"username":"085161787501","sign":"1eeffa87e868d58e7d28a742282cfb93","status":"all"}'
                    };

                    try {
                        const response = await fetch(url, options);
                        const data = await response.json();
                        console.log(data);

                        let StringData = JSON.stringify(data);
                        document.getElementById('tampil').innerHTML = StringData;
                    } catch (error) {
                        console.error(error);
                    }
                }
                getData();
            </script>

            <div id="tampil"></div>

            <!-- TABLE -->
            <div class="card">
                <div class="card-body">

                    <button data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-primary mb-1"><i
                            class="menu-icon tf-icons bx bx-plus"></i>
                        Tambah Data</button>
                    <button class="btn btn-success mb-1"><i class='bx bxs-file-import'></i>
                        Import</button>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered display py-4" id="example" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>CODE</th>
                                    <th>Nama</th>
                                    <th>IDS</th>
                                    <th>Harga Rupiah</th>
                                    <th>Harga Unit</th>
                                    <th>Price Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>CODE</th>
                                    <th>Nama</th>
                                    <th>IDS</th>
                                    <th>Harga Rupiah</th>
                                    <th>Harga Unit</th>
                                    <th>Price Unit</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM api_product");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr id="<?php echo $no; ?>">
                                        <td>
                                            <?php echo $no; ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['produk_id'] ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['code'] ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['name'] ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['produk_engine_ids'] ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['harga_rupiah'] ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['harga_unit'] ?>
                                        </td>
                                        <td id="">
                                            <?php echo $row['price_unit'] ?>
                                        </td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#ModalEdit"
                                                class="btn btn-sm btn-warning"><i
                                                    class="menu-icon tf-icons bx bx-pencil"></i></button>
                                            <button data-bs-toggle="modal" data-bs-target="#ModalHapus"
                                                onclick="hapus_anggota(document.getElementById('nama_anggota').innerText)"
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

        <!-- FOOTER -->
        <footer class="content-footer footer bg-footer-theme ">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column ">
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