<?php
require 'header.php';
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM kategori_produk";
$rs = $dbh->query($sql);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Kategori Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="container">
                    <h3>Kategori Produk</h3>
                    <a href="form_produk.php" class="btn btn-success" type="button"> Tambahkan Produk </a>
                    <p>
                    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor  = 1;
                            foreach ($rs as $row) {
                            ?>
                                <tr>
                                  <td><?= $row['id'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                                        <br>
                                        <a class="btn btn-success" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                        <br>
                                        <a class="btn btn-success" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>


                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>