<<<<<<< HEAD

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Welcome <small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
=======
<!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Jumlah User</strong>
                    </div>
                    <div class="number dashtext-1"><?php echo $total_user; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="<?php echo $total_user; ?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Jumlah Product</strong>
                    </div>
                    <div class="number dashtext-2"><?php echo $total_product; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="<?php echo $total_product; ?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i></i></div><strong>Jumlah Kategori</strong>
                    </div>
                    <div class="number dashtext-3">2</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<section class="no-padding-bottom">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
>>>>>>> 3549e69... codeigniter
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">User</h5>
                <br>
                <p class="card-text">
                  Jumlah total : <?php echo $total_user; ?>
                </p>

                <a href="#" class="card-link">Lihat</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Product</h5>

                <p class="card-text">
<<<<<<< HEAD
                  Jumlah total : 
=======
                  Jumlah total : <?php echo $total_product; ?>
>>>>>>> 3549e69... codeigniter
                </p>
                <a href="#" class="card-link">Lihat</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Handphone</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Kategori Product Handphone</h6>

<<<<<<< HEAD
                <p class="card-text">Total Product : </p>
                <a href="#" class="btn btn-primary">Lihat</a>
=======
                <p class="card-text">Total Product : <?php echo $total_handphone; ?></p>
                <a href="<?php echo base_url('handphone')?>" class="btn btn-primary">Lihat</a>
>>>>>>> 3549e69... codeigniter
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Laptop</h5>
              </div>
              <div class="card-body">
<<<<<<< HEAD
                <h6 class="card-title">Kategori Product Handphone</h6>

                <p class="card-text">Total Product : </p>
                <a href="#" class="btn btn-primary">Lihat</a>
=======
                <h6 class="card-title">Kategori Product Laptop</h6>

                <p class="card-text">Total Product : <?php echo $total_laptop; ?></p>
                <a href="<?php echo base_url('laptop')?>" class="btn btn-primary">Lihat</a>
>>>>>>> 3549e69... codeigniter
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<<<<<<< HEAD
=======
</section>
>>>>>>> 3549e69... codeigniter


