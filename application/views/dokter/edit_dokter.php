<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORMULIR DOKTER</h1>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Dokter</h3>

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
<form action="<?= base_url('dokter/update/' . $dokter['iddokter']); ?>" method="POST">          <div class="box-body">
          <div class="form-group"><br>
                    <label for="nama_dokter">Dokter</label>
                    <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" value="<?= isset($dokter['nama_dokter']) ? $dokter['nama_dokter'] : ''; ?>" required>
                </div>
            </div>
        </div>
        <div class ="box-footer">
        <button type ="submit" class = "btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  <div class="card-footer">
</div>
</div>
</section>
</div>