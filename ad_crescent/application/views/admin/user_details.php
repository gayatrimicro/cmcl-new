<?php 
include('include/header.php');

?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>User</strong> Details
                      </div>
                      

                      <div class="card-body card-block">
                        <form action="<?php echo base_url('home/insert_admin');?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="frm">
                          
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Full Name</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="full_name" placeholder="Full Name" class="form-control" 
                              value="<?php if(!empty($update_admin)){ echo $update_admin[0]['full_name'];}else{ echo set_value('full_name');}?>" required>
                              <?php echo form_error('full_name'); ?>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Email as Username</label></div>
                            <div class="col-12 col-md-6"><input type="email" id="text-input" name="admin_email" placeholder="User Name as Email" class="form-control" value="<?php if(!empty($update_admin)){ echo $update_admin[0]['admin_email'];}else{ echo set_value('admin_email');}?>" required> 
                              <?php echo form_error('admin_email'); ?>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-6"><input name="admin_password" type="password" id="textarea-input" placeholder="password" class="form-control" required="required" value="<?php if(!empty($update_admin)){ echo $update_admin[0]['admin_password'];}?>">
                              <?php echo form_error('admin_password'); ?>
                            </div>
                          </div>
                          
                          <div class="row form-group">
                          	<div class="col col-md-2">
                          	</div>
                          	<div class="col-12 col-md-6">
                              	<button type="submit" class="btn btn-primary btn-sm">
                              	<i class="fa fa-dot-circle-o"></i> Submit
                              	</button>
                              	<!-- <button type="reset" class="btn btn-danger btn-sm">
                              	<i class="fa fa-ban"></i> Reset
                              	</button> -->
                                <input type="hidden" name="act" value="<?php if(!empty($update_admin)){ echo $update_admin[0]['admin_id'];}else{ echo set_value('act'); } ?>">
                          	</div>
                          </div>
                          
                        </form>
                      </div>
                      
                    </div>
                    
                  </div>
                  <!---->

                  

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Job Details</strong>
                        </div>
                        <div class="card-body">
                          
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Name</th>
                          <th>User Name</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(!empty($admin_de)){
                          $sr=1;
                          foreach ($admin_de as $key => $value) {
                          ?>
                          <tr>
                            <td><?php echo $sr++;?><td><?php echo $value['full_name']?></td><td><?php echo $value['admin_email']?></td>
                            <td><?php echo $value['admin_password'];?></td>
                            <td><a href="<?php echo base_url('home/create_user/'.rtrim(base64_encode($value['admin_id']),'=='));?>"><i class='fa fa-edit'></i></a> / 
                              <a href="<?php echo base_url('home/delete_user/'.rtrim(base64_encode($value['admin_id']),'=='));?>" onclick="return confirm('Are You Sure Want To Delete...')"><i class="fa fa-trash"></i></a></td>
                          </tr>
                          <?php
                        }
                      }

                        ?>
                        
                      </tbody>
                      </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->



<?php
/**************/
include('include/footer.php');
?>

