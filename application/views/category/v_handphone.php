      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data Handphone</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Category        </li>
            <li class="breadcrumb-item active">Handphone        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                      <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Product ID</th>
                                <th>Vendor ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Desc</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                  $no = 1;
                                  foreach($products as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><img src="<?php echo base_url('gambar/product/'.$u->image) ?> "width="64"/></td>
                                <td><?php echo $u->prod_id ?></td>
                                <td><?php echo $u->vend_id ?></td>
                                <td><?php echo $u->prod_name ?></td>
                                <td><?php echo $u->prod_price ?></td>
                                <td><?php echo $u->prod_desc ?></td>
                                <td width="120">
                                  <a href="<?php echo site_url('category/handphone/'.$u->prod_id) ?>"
                                 class="btn btn-small text-warning"><i class="fas fa-edit"></i> Edit</a>
                                <?php echo form_open_multipart('crud/hapus');?>
                                  <a href="<?php echo site_url('crud/hapus/'.$u->prod_id) ?>"
                                  class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                                <?php echo form_close(); ?>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                          <div class="card-footer">
                            <a href="<?php echo base_url('insert_product')?>"><button type="submit" class="btn btn-primary">Add Product</button></a>
                          </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
