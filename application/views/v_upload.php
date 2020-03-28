<br>
 <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload file</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Content Header (Page header) -->
      <div class="row d-flex justify-content-center">
            <h2>Upload File</h2>
          </div>
    <!-- Main content -->
      <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              </div>
            <br><br>
	<?php echo $error;?>
 
	<?php echo form_open_multipart('upload/aksi_upload');?>
 <form action="" enctype="multipart/form-data">
 	<div class="card-body">
        <div class="form-group">
           <label for="exampleInputFile">File input</label>
             <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="berkas">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
             </div>
        </div>
    </div>
 	<div class="card-footer">
 		<button type="submit" class="btn btn-primary">Submit</button>
  	</div>
 </form> 
</div>
</div>
</div>