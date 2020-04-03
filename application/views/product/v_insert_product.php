      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add Product</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Add Product        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                  <div class="row d-flex justify-content-center">
                      <!-- left column -->
                      <div class="col-md-4">
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                        <?php echo form_open_multipart('crud/tambah_aksi');?>
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Product ID</label>
                                <input type="text" class="form-control" name="product_id" placeholder="Enter product id">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Vendor ID</label>
                                <input type="text" class="form-control" name="vendor_id" placeholder="Enter vendor id">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Enter product name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="text" class="form-control" name="product_price" placeholder="Enter product price">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Product Description</label>
                                <textarea type="text" class="form-control" name="product_desc" placeholder="Enter product description"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Category</label><br>
                                <input type="radio" name="category" value="handphone"> Handphone</input><br>
                                <input type="radio" name="category" value="laptop"> Laptop</input>
                              </div>
                              <div class="form-group">
                            <label for="foto">Photo</label>
                            <input class="form-control" type="file" id="berkas" name="berkas" />
                            </div>
                          </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          <?php echo form_close(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
