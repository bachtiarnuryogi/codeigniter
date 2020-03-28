<br>
    <!-- Content Header (Page header) -->
      <div class="row d-flex justify-content-center">
            <h2>Form Insert</h2>
          </div>
    <!-- Main content -->
      <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insert Data Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('crud/tambah_aksi');?>" method="post">
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
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
