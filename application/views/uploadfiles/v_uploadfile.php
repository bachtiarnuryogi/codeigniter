      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Upload File</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Upload        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                        <!-- left column -->
                        <div class="col-md-4">
                          <!-- general form elements -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <div class="card-title">Upload File</div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                          <?php echo form_open_multipart('upload/uploadfile');?>
                              <div class="card-body">
                                <div class="form-group">
                                 <label for="foto">Photo</label>
                                 <input class="form-control" type="file" id="berkas" name="berkas" />
                                </div>
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            <?php echo form_close();?>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
        </div>