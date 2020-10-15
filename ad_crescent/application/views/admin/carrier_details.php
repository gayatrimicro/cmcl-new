<?php 
include('include/header.php');

?>
<style type="text/css">
  .modal-backdrop{
    z-index: -1;
  }
  .modal{
    background-color: #000000c7 ;
  }
  .modal-footer{
    padding: 0.5rem;
  }
  .modal-body{
    color:#000;
    padding-top: 25px;
    text-align: center;
  }
  body{
    padding-right:0 !important;
  }
</style>
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
                        <strong>Carrier</strong> Details
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url('home/insert_carrier');?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="frm">
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Job Title:</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="carrier_title" placeholder="Job Title" class="form-control" 
                              value="<?php if(!empty($update_carrier)){ echo $update_carrier[0]['carrier_title'];}else{ echo set_value('carrier_title');}?>" required>
                              <?php echo form_error('carrier_title'); ?>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Shift Time:</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="carrier_sub_title" placeholder="Shift Time" class="form-control" value="<?php if(!empty($update_carrier)){ echo $update_carrier[0]['carrier_sub_title'];}else{ echo set_value('carrier_sub_title');}?>" required> 
                              <?php echo form_error('carrier_sub_title'); ?>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Job Details:</label></div>
                            <div class="col-12 col-md-6"><textarea name="carrier_details" id="textarea-input" rows="9" placeholder="Details... " class="form-control" required="required"><?php if(!empty($update_carrier)){ echo $update_carrier[0]['carrier_description'];}else{ echo set_value('carrier_details');}?></textarea>
                              <?php echo form_error('carrier_description'); ?>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Sequence By: </label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="sequence_by" placeholder="Sequence By" class="form-control" value="<?php if(!empty($update_carrier)){ echo $update_carrier[0]['sequence_by'];}else{ echo set_value('sequence_by');}?>">
                              <?php echo form_error('sequence_by'); ?>
                              <span id="sequnce" style="color:red"></span>
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
                                <input type="hidden" name="act" value="<?php if(!empty($update_carrier)){ echo $update_carrier[0]['carrier_id'];}else{ echo set_value('act'); } ?>">
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
                          <th>Job Title</th>
                          <th>Shift Time</th>
                          <th>Sequence By</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(!empty($carrier)){
                          $sr=1;
                          foreach ($carrier as $key => $value) {
                          ?>
                          <tr>
                            <td><?php echo $sr++;?><td><?php echo $value['carrier_title']?></td><td><?php echo $value['carrier_sub_title']?></td>
                            <td><?php echo $value['sequence_by'];?></td>
                            <td><a href="<?php echo base_url('home/carrier_details/'.rtrim(base64_encode($value['carrier_id']),'=='));?>"><i class='fa fa-edit'></i></a> / 
								<a style="color: #878787;" data-toggle="modal" data-target="#myModal<?php echo $value['carrier_id']; ?>" ><i class="fa fa-trash"></i></a></td>
                          </tr>
	<!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $value['carrier_id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">       
        <div class="modal-body">
          <p>Are you sure you want to delete?</p>
        </div>
        <form action="<?php echo base_url('home/delete_carrier_details');?>" method="post">
          <input type="hidden" name="carrier_id" value="<?php echo $value['carrier_id']; ?>">
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"> OK </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
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
<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
        CKEDITOR.replace( 'carrier_details' );
</script>
<script>
  $(document).on('input','[name~=sequence_by]',function(){
      var da=$(this).val();
      var check='';
      $.ajax({
        url:'<?php echo base_url("home/check_data");?>',
        type:'POST',
        data:{'data_id':da},
        async:false,
        success:function(result){
          check=result;

        }
      });
      if(check=='true'){
        $('#sequnce').html("Please Enter Another Sequence..");
          return true;
      }else{
        $('#sequnce').html(" ");
        return false;
      }
  });
</script>