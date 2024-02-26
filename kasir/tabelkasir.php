<?php include "../layout/header.php"; ?>

<?php

include "../koreksi.php";

$sql = "select * from kasir";

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


                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id Kasir</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">password</th>
                                        <th scope="col">akses</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1; ?>
                                    <?php foreach ($hasil as $terserah) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?= $a; ?>
                                            </th>
                                            <td>
                                                <?= $terserah['id_kasir']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['nama']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['alamat']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['telepon']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['status']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['username']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['password']; ?>
                                            </td>
                                            <td>
                                                <?= $terserah['akses']; ?>
                                            </td>
                                            <td>
                                                <a href="edit.php?id=<?= $terserah['id_kasir']; ?>" class="btn btn-primary">edit</a>
                                                <a href="delete.php?id=<?= $terserah['id_kasir']; ?>"
                                                    class="btn btn-danger">hapus</a>
                                            </td>
                                        </tr>
                                        <?php $a++;
                                    } ?>
                                </tbody>
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