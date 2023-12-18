<div class="layout-page">

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="content-wrapper">

        <!-- ISI CONTENT -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                <!-- INFO -->
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card p-3 px-4">
                        <div class="row">
                            <div class="btn btn-primary disabled"><i class='bx bx-search'></i> Cari pesanan
                                anda dengan menggunakan nomor invoice yang telah diberikan</div>
                        </div>
                    </div>
                </div>
                <!-- INFO -->

                <!-- CARD CARI PESANAN -->
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card mb-4">
                        <h5 class="card-header">Cari Pesanan</h5>
                        <div class="card-body">
                            <form>
                                <label for="defaultFormControlInput" class="form-label">Nomor
                                    Invoice</label>
                                <div class="justify-content-between">

                                    <input type="text" required class="form-control" id="defaultFormControlInput"
                                        placeholder="#123456" aria-describedby="defaultFormControlHelp">

                                    <input type="submit" value="Check" class="btn btn-primary m-2">

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- CARD CARI PESANAN -->



                <!-- CARD HASIL PENCARIAN -->
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card mb-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-header">Pesanan</h5>
                            <h5 class="card-header">#Nomor Invoice</h5>
                        </div>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Detail Pesanan</h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente
                                perferendis dolores quisquam sequi reprehenderit ab quas hic id deleniti
                                nulla. Deserunt, quia nam! Amet sapiente officia aut ad dolorum! Id.
                            </p>
                            <p class="card-text"><small class="text-muted">03/12/2023</small></p>
                        </div>
                    </div>
                </div>
                <!-- CARD HASIL PENCARIAN -->





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