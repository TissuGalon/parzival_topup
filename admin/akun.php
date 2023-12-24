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
                    <h4 class="fw-bold py-3 mb-4">DATA AKUN USER</h4>
                </div>
                <div class="col-6 text-end">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span>
                        Akun</h4>
                </div>
            </div>
            <!-- DIVIDER -->

            <!-- TABLE -->
            <div class="card">
                <div class="card-body">

                    <!--   <button data-bs-toggle="modal" data-bs-target="#modaltambah" class="btn btn-primary mb-1"><i
                            class="menu-icon tf-icons bx bx-plus"></i>
                        Tambah Data</button> -->
                    <!--    <button class="btn btn-success mb-1"><i class='bx bxs-file-import'></i>
                                    Import</button> -->
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered display py-4" id="example" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Level</th>
                                    <th>Foto</th>
                                    <!--       <th>Action</th> -->
                                </tr>
                            </thead>
                            <tfoot class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Level</th>
                                    <th>Foto</th>
                                    <!--  <th>Action</th> -->
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM akun");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr id="item<?php echo $no; ?>">
                                        <td>
                                            <?php echo $no; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id_akun'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['username'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['nama_lengkap'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['nohp'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['level'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['foto'] ?>
                                        </td>
                                        <!--   <td>
                                              <button onclick="edit_item()" data-bs-toggle="modal" data-bs-target="#modaledit"
                                                class="btn btn-sm btn-warning">
                                                <i class="menu-icon tf-icons bx bx-pencil"></i>
                                            </button>

                                            <button data-bs-toggle="modal" data-bs-target="#ModalHapus"
                                                onclick="hapus_item(document.getElementById('item<?php echo $no; ?>'))"
                                                class="btn btn-sm btn-danger"><i
                                                    class="menu-icon tf-icons bx bx-trash"></i></button>
                                        </td> -->
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="proses/tambah_produk_local.php" method="POST" enctype="multipart/form-data"
                            id="form-tambah">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nama Product</label>
                                    <input type="text" required name="namaproduct" id="nameWithTitle"
                                        class="form-control" placeholder="Enter Name" />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col">
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
                                <div class="col-12 mb-0">
                                    <label for="apiid" class="form-label">API ID</label>
                                    <input type="text" required name="apiid" id="apiid" class="form-control"
                                        placeholder="API ID" />
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col mb-0">
                                    <label for="nameWithTitle" class="form-label">Gambar Product</label>
                                    <input type="file" required name="gambar" id="nameWithTitle" class="form-control"
                                        placeholder="Enter Name" />
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
            function edit_item(id_produk, nama_produk, tipe, jenis, api_id, status) {

                document.getElementById('edit_idproduct').value = id_produk;
                document.getElementById('edit_namaproduct').value = nama_produk;
                document.getElementById('edit_jenis').value = jenis;
                document.getElementById('edit_tipe').value = tipe;
                document.getElementById('edit_apiid').value = api_id;
                document.getElementById('edit_status').value = status;
            }
        </script>
        <!-- SCRIPT EDIT -->


        <!-- MODAL EDIT -->
        <div class="modal fade" id="modaledit" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Edit Data Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="proses/edit_produk_local.php" method="GET" enctype="multipart/form-data"
                            id="form-tambah">
                            <input type="hidden" name="id" id="edit_idproduct">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="edit_nmproduk" class="form-label">Nama Product</label>
                                    <input type="text" required name="namaproduct" id="edit_namaproduct"
                                        class="form-control" placeholder="Enter Name" />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col ">
                                    <label for="edit_jenis" class="form-label">Jenis</label>
                                    <select name="jenis" required id="edit_jenis" class="form-select">
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
                                <div class="col-12 mb-0">
                                    <label for="apiid" class="form-label">API ID</label>
                                    <input type="text" required name="apiid" id="edit_apiid" class="form-control"
                                        placeholder="API ID" />
                                </div>

                                <div class="col ">
                                    <label for="edit_jenis" class="form-label">Status</label>
                                    <select name="status" required id="edit_status" class="form-select">
                                        <option value="tersedia">tersedia</option>
                                        <option value="tidak tersedia">tidak tersedia</option>
                                    </select>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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