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
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card p-3">

                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel"
                            style="max-height: 350px; overflow:hidden; object-fit:cover;">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                    aria-current="true"></li>
                                <li data-bs-target="#carouselExample" data-bs-slide-to="1" class=""></li>
                                <li data-bs-target="#carouselExample" data-bs-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/carousel-1.jpg"
                                        style="height: auto; object-fit: contain;" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>First slide</h3>
                                        <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue
                                            pertinacia.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://wallpapers.com/images/hd/all-games-039svvvr7nt6qzmg.jpg"
                                        style="height: auto; object-fit: cover;" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Second slide</h3>
                                        <p>In numquam omittam sea.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://c4.wallpaperflare.com/wallpaper/363/13/252/valorant-killjoy-valorant-digital-art-artwork-digital-hd-wallpaper-preview.jpg"
                                        style="height: auto; object-fit: cover;" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Third slide</h3>
                                        <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim
                                            graeco mel no.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
                <!-- CAROUSEL -->

                <!-- TITLE LAYANAN -->
                <div class="row m-2">
                    <div class="col-12">
                        <h4> <i class="bx bx-grid-alt m-1"></i> Top Product</h4>
                    </div>
                </div>
                <!-- TITLE TOP -->

                <!-- TOP -->
                <div class="col-lg-12 col-md-12 col-12 order-1">
                    <div class="row">
                        <?php
                        $topproduct = mysqli_query($conn, "SELECT * FROM product");
                        while ($row1 = mysqli_fetch_array($topproduct)) { ?>
                            <!-- ITEM TOP -->
                            <div class="col-md-3 col-6">
                                <a href="product-detail.php?id=<?php echo $row1['id_product'] ?>&api=<?php echo $row1['api_id'] ?>"
                                    class="card-link">
                                    <div class="card mb-3 cool-card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="card-img " style="width: 100%; height: auto; object-fit: cover;"
                                                    src="images/product-images/<?php echo $row1['gambar'] ?>"
                                                    alt="Card image">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body p-0">
                                                    <div class="row ms-2">
                                                        <div class="col-12">
                                                            <br>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="card-title ellipsis">
                                                                <?php echo $row1['nama_product'] ?>
                                                            </h5>
                                                            <h6 class="card-text text-primary ellipsis"><small
                                                                    class="text-muted">
                                                                    <?php echo $row1['tipe'] ?>
                                                                </small></h6>
                                                        </div>
                                                        <div class="col-12">
                                                            <br>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- ITEM TOP -->
                        <?php } ?>


                    </div>
                </div>
                <!-- LAYANAN -->

                <!-- PENCARIAN-->
                <div class="col-lg-12 col-md-12 col-12 order-1">
                    <div class="card p-2 px-3">
                        <div class="d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" id="searchInput" oninput="searchItems()"
                                class="form-control border-0 shadow-none" placeholder="Search..."
                                aria-label="Search...">
                        </div>
                    </div>
                </div>
                <!-- PENCARIAN-->



                <!-- PILIHAN JENIS -->
                <div class="col-lg-12 col-md-4 order-1 mb-4">
                    <div class="demo-inline-spacing">
                        <button type="button" onclick="set_jenis(this, 'https://prepaid.iak.dev/api/pricelist/game')"
                            class="btn btn-outline-primary active">Top Up
                            Game</button>
                        <button type="button" onclick="set_jenis(this,'https://prepaid.iak.dev/api/pricelist/voucher')"
                            class="btn btn-outline-primary">Voucher</button>
                        <button type="button" onclick="set_jenis(this,'https://prepaid.iak.dev/api/pricelist/pulsa')"
                            class="btn btn-outline-primary">Pulsa</button>
                        <button type="button" onclick="set_jenis(this,'https://prepaid.iak.dev/api/pricelist/data')"
                            class="btn btn-outline-primary">Data</button>
                        <button type="button" onclick="set_jenis(this,'https://prepaid.iak.dev/api/pricelist/etoll')"
                            class="btn btn-outline-primary">E-wallet</button>
                    </div>
                </div>
                <!-- PILIHAN JENIS -->


                <script>
                    function set_jenis(button, url) {
                        // Remove 'active' class from all buttons
                        document.querySelectorAll('.demo-inline-spacing button').forEach(btn => {
                            btn.classList.remove('active');
                        });

                        button.classList.add('active');

                        getData(url);
                    }
                </script>


                <!-- LAYANAN -->
                <div class="col-lg-12 col-md-12 col-12 order-1">



                    <!-- SKELETON -->
                    <div class="row loading-skeleton" id="layanan_loading" style="display:none">
                        <?php for ($i = 1; $i <= 6; $i++) { ?>
                            <div class="col-md-3 col-xl-2 col-6 itemtopup">
                                <a href="#" class="card-link">
                                    <div class="card mb-3">
                                        <img src="#" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Loading Item ...</h5>
                                            <p class="card-text">Loading Detail ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- SKELETON -->


                    <div class="row " id="layanan2">
                        <!-- TAMPIL DISINI -->
                    </div>


                    <script>
                        async function getData(target) {

                            document.getElementById('layanan2').innerHTML = '';

                            const url = target;
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
                                    <div class="col-md-3 col-xl-2 col-6 itemtopup ">
                                        <a href="product-detail.php?id=${item.product_description}" class="card-link ">
                                            <div class="card mb-3">
                                                <img class="card-img-top" src="${item.icon_url}"  onerror="this.onerror=null; this.src='images/image-blank.jpg';" alt="Card image cap" style="width: 100%; height: auto; aspect-ratio:1/1; image-fit:cover;">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="card-title ellipsis" id="itemtopup">${item.product_description}</h5>
                                                        <p class="card-text ellipsis"><small class="text-muted">${item.product_nominal}</small></p>
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
                        getData('https://prepaid.iak.dev/api/pricelist/game');

                        function searchItems() {
                            // Get input value and convert to lowercase for case-insensitive search
                            const searchTerm = document.getElementById('searchInput').value.toLowerCase();

                            // Get all items
                            const items = document.querySelectorAll('.itemtopup');

                            // Loop through items to show/hide based on search term
                            items.forEach(item => {
                                const textContent = item.innerText.toLowerCase();

                                // If search term is found in item text, display the item, otherwise hide it
                                if (textContent.includes(searchTerm)) {
                                    item.style.display = 'block';
                                } else {
                                    item.style.display = 'none';
                                }
                            });
                        }
                    </script>
                </div>



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