<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA DAN JADWAL PASIEN KONSULTANSI</h1>
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url(). "pasien/insert";?>" method="POST">
          <div class="box-body">
<div class="form-group">
              <label for="nama_pasien">Nama Pasien</label>
              <input type="text" class="form-control" name="nama_pasien" id="nama_dokter" placeholder="Masukan Nama Pasien" required>
</div>
<div class="form-group">
              <label for="nama_dokter">Nama Dokter</label>
              <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" placeholder="Masukan Nama Pasien" required>
</div>
</div>
<div class ="box-footer">
    <button type ="submit" class = "btn btn-primary">Simpan</button>
</div>
</form>
</div>
<div class="card-footer">
</div>
</div>
</section>
</div>