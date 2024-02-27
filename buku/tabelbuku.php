<?php include "../layout/header.php"; ?>

<?php

include "../koreksi.php";

$sql = "select * from buku";
$hasil = $koneksi->query($sql);

?>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php include "../layout/navbar.php"; ?>
        <?php include "../layout/menu.php"; ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Distributor</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">


                        <a href="createbuku.php" class="btn btn-primary">Tambah</a>


                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id_buku</th>
                                        <th scope="col">judul</th>
                                        <th scope="col">no isbn</th>
                                        <th scope="col">penulis</th>
                                        <th scope="col">penerbit</th>
                                        <th scope="col">tahun</th>
                                        <th scope="col">stok</th>
                                        <th scope="col">harga_pokok</th>
                                        <th scope="col">harga_jual</th>
                                        <th scope="col">ppn</th>
                                        <th scope="col">diskon</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1;
                                    foreach ($hasil as $s) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?= $a; ?>
                                            </th>
                                            <td>
                                                <?= $s['id_buku']; ?>
                                            </td>
                                            <td>
                                                <?= $s['judul']; ?>
                                            </td>
                                            <td>
                                                <?= $s['noisbn']; ?>
                                            </td>
                                            <td>
                                                <?= $s['penulis']; ?>
                                            </td>
                                            <td>
                                                <?= $s['penerbit']; ?>
                                            </td>
                                            <td>
                                                <?= $s['tahun']; ?>
                                            </td>
                                            <td>
                                                <?= $s['stok']; ?>
                                            </td>
                                            <td>
                                                <?= $s['harga_pokok']; ?>
                                            </td>
                                            <td>
                                                <?= $s['harga_jual']; ?>
                                            </td>
                                            <td>
                                                <?= $s['ppn']; ?>
                                            </td>
                                            <td>
                                                <?= $s['diskon']; ?>
                                            </td>
                                            <td>
                                                <a href="edit.php?id=<?= $s['id_buku']; ?>" class="btn btn-primary">edit</a>
                                                <a href="delete.php?id=<?= $terserah['id_buku']; ?>"
                                                    class="btn btn-danger">hapus</a>
                                            </td>
                                        </tr>
                                        <?php $a++;
                                    } ?>
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "../layout/footer.php"; ?>
        </div>
    </div>
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app-style-switcher.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>