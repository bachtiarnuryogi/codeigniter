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
              <?php foreach($user as $u){ ?>
              <?php echo form_open_multipart('crud/update');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product ID</label>
                    <input type="text" class="form-control" name="prod_id" value="<?php echo $u->prod_id ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Vendor ID</label>
                    <input type="text" class="form-control" name="vend_id" value="<?php echo $u->vend_id ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="prod_name" value="<?php echo $u->prod_name ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" name="prod_price" value="<?php echo $u->prod_price ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <textarea type="text" class="form-control" name="prod_desc" value="<?php echo $u->prod_desc ?>"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="foto">Photo</label><br>
                    <img src="<?php echo base_url('gambar/product/'.$u->image) ?> "width="80"/>
                    <input class="form-control" type="file" name="berkas"/>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              <?php echo form_close(); ?>
            <?php } ?>  
            </div>
          </div>
        </div>
