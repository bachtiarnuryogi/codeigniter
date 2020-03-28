<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Product</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Product ID</th>
                      <th>Vendor ID</th>
                      <th>Product Name</th>
                      <th>Product Price</th>
                      <th>Product Desc</th>
                      <th>Image</th>
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
                      <td><?php echo $u->prod_id ?></td>
                      <td><?php echo $u->vend_id ?></td>
                      <td><?php echo $u->prod_name ?></td>
                      <td><?php echo $u->prod_price ?></td>
                      <td><?php echo $u->prod_desc ?></td>
                      <td><img src="<php <?php echo base_url('gambar/'.$u->image) ?>"width="64"/></td>
                      <td>
                        <a href="<?php echo site_url('crud/edit/'.$u->prod_id) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?php echo site_url('crud/hapus/'.$u->prod_id) ?>"
                        lass="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
        <!-- /.row -->
