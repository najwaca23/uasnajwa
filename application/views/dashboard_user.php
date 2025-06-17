<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('http://localhost/uasnajwa/assets/img/bg_pasien.jpg') no-repeat center center; background-size: cover; min-height: 100vh;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: white; text-shadow: 1px 1px 2px black;">
                        <?php if (isset($content)) echo $content;?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href= "dashboard_user" style="color:white;">Home</a></li>
                        <li class="breadcrumb-item active" style="color:white;">Pasien</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
