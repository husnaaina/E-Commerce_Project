<?php
require 'header.php';
require_once 'sidebar.php';
require_once 'dbkoneksi.php';

if (!empty($_GET['idedit'])) {
  // simpat data idedit
  $edit = $_GET['idedit'];
  // buat query sql
  $sql = "SELECT * FROM produk WHERE id =?";
  // prepare query
  $st = $dbh->prepare($sql);
  // eksekusi pquery
  $st->execute([$edit]);
  $row = $st->fetch();
} else {
  $row = [];
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Form Produk</h1>
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
              <h1 class="text-center"> FORM PRODUK</h1>
              <form method="POST" action="proses_produk.php">
                <div class="form-group row">
                  <label for="kode" class="col-4 col-form-label">Kode</label>
                  <div class="col-8">
                    <input id="kode" name="kode" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                  <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                  <div class="col-8">
                    <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stok" class="col-4 col-form-label">Stok</label>
                  <div class="col-8">
                    <input id="stok" name="stok" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                  <div class="col-8">
                    <input id="min_stok" name="min_stok" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="deskripsi" class="col-4 col-form-label">Deskipsi</label>
                  <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kategori" class="col-4 col-form-label">Kategori Produk</label>

                  <div class="col-8">
                    <?php
                    $sqlkategori = "SELECT * FROM kategori_produk";
                    $rskategori = $dbh->query($sqlkategori);
                    ?>
                    <select id="kategori" name="kategori" class="custom-select">
                      <?php
                      foreach ($rskategori as $rowkategori) {
                      ?>
                        <option value="<?= $rowkategori['id'] ?>"><?= $rowkategori['nama'] ?></option>
                      <?php
                      }
                      ?>
                      
                      <!--  
                      <option value="Elektronik">Elektronik</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option> -->
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <?php
                    if (empty($edit)) {
                      $value = "Submit";
                    } else {
                      $value = "Update";
                    }

                    ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php echo $value; ?>" />
                    <input type="hidden" name="idedit" value="<?php echo $edit; ?>">
                  </div>
                </div>
              </form>
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