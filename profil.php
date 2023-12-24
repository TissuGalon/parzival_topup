<div class="layout-page">

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="content-wrapper">

        <!-- ISI CONTENT -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- CAROUSEL -->
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Profil</h5>
                        <hr>

                        <?php
                        $id = $_SESSION['id_akun'];
                        $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE id_akun = '$id'");
                        $row = mysqli_fetch_array($kueri);
                        ?>

                        <div class="row">
                            <div class="col text-center m-2">
                                <div class="col-12"></div>
                                <div class="col-12">
                                    <a href="proses/hapus_foto_profil.php" class="btn btn-danger w-100 mb-1">Hapus
                                        Foto</a>

                                    <img class="rounded mb-0" src="images/user-images/<?php if ($row['foto'] != null || $row['foto'] != '') {
                                        echo $row['foto'];
                                    } else {
                                        echo 'default_avatar.jpg';
                                    } ?>" style="aspect-ratio:1/1; object-fit:cover; width:100%; height:auto;" alt="">

                                    <form action="proses/update_foto_profil.php" method="POST"
                                        enctype="multipart/form-data">
                                        <input type="file" class="form-control mt-1" name="file_upload" required>
                                        <input type="submit" value="Update Foto profil"
                                            class="btn btn-warning w-100 mt-1"></input>
                                    </form>
                                </div>
                                <div class="col-12"><br></div>

                            </div>
                            <div class="col-12  col-xl-9">
                                <div class="card-body demo-vertical-spacing demo-only-element">
                                    <form action="proses/edit_profil.php" method="GET">
                                        <label class="form-label" for="username">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>

                                            <input type="text" name="username" id="username"
                                                value="<?php echo $row['username']; ?>" readonly class="form-control"
                                                placeholder="Username" aria-label="Username"
                                                aria-describedby="username">
                                        </div>

                                        <div class="form-password-toggle">
                                            <label class="form-label" for="nama">Nama Lengkap</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nama" name="namalengkap"
                                                    value="<?php echo $row['nama_lengkap']; ?>" readonly
                                                    placeholder="Nama Lengkap"
                                                    aria-describedby="basic-default-password2">

                                            </div>
                                        </div>

                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="<?php echo $row['email']; ?>" readonly placeholder="Your Email"
                                                aria-label="email" aria-describedby="email">
                                            <span class="input-group-text" id="basic-addon13">@example.com</span>
                                        </div>


                                        <label class="form-label" for="email">No HP</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="nohp"
                                                value="<?php echo $row['nohp']; ?>" readonly id="nohp"
                                                placeholder="No HP" aria-label="nohp" aria-describedby="nohp">
                                        </div>

                                        <div class="m-2 mt-3">
                                            <input type="submit" id="konfirmasi" class="btn btn-primary"
                                                value="Konfirmasi" style="display:none">
                                            <a href="#" onclick="batal()" id="batal" class="btn btn-danger"
                                                style="display:none">Batal</a>
                                            <a href="#" onclick="show_edit()" id="edit" class="btn btn-warning">Edit
                                                Profil</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CAROUSEL -->


                <script>
                    function show_edit() {
                        let konfirmasi = document.getElementById('konfirmasi');
                        let batal = document.getElementById('batal');
                        let edit = document.getElementById('edit');


                        let username = document.getElementById('username');
                        let nama = document.getElementById('nama');
                        let email = document.getElementById('email');
                        let nohp = document.getElementById('nohp');

                        /*   username.readOnly = false; */
                        nama.readOnly = false;
                        /*  email.readOnly = false;
                         nohp.readOnly = false; */


                        konfirmasi.style.display = '';
                        batal.style.display = '';
                        edit.style.display = 'none';

                    }

                    function batal() {
                        location.reload();

                    }
                </script>


            </div>
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