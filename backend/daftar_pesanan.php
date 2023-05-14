<?php
require 'header.php';
require_once 'sidebar.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Data Produk</h1>
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
                            <h3>Data Pesanan</h3>
                            <div class="container">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No HP</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Husna Aina Aulia</td>
                                            <td>2023-03-10</td>
                                            <td>Bogor</td>
                                            <td>098765555</td>
                                            <td>husnah11@gmail.com</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>Pesanan Cimory Fresh Milk</td>
                                        </tr>
                                        <tr><th scope="row">1</th>
                                            <td>Husna Aini</td>
                                            <td>2023-04-15</td>
                                            <td>Bandung</td>
                                            <td>0987643355</td>
                                            <td>husaini11@gmail.com</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>Pesanan Sofa</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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