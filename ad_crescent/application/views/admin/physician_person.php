<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href=<?php echo base_url("apple-icon.png")?> >
    <link rel="shortcut icon" href=<?php echo base_url("favicon.ico")?> >

    <link rel="stylesheet" href=<?php echo base_url("assets/css/normalize.css")?> >
    <link rel="stylesheet" href=<?php echo base_url("assets/css/bootstrap.min.css")?> >
    <link rel="stylesheet" href=<?php echo base_url("assets/css/font-awesome.min.css")?> >
    <link rel="stylesheet" href=<?php echo base_url("assets/css/themify-icons.css")?> >
    <link rel="stylesheet" href=<?php echo base_url("assets/css/flag-icon.min.css")?> >
    <link rel="stylesheet" href=<?php echo base_url("assets/css/cs-skin-elastic.css")?> >
    
    <link rel="stylesheet" href=<?php echo base_url("assets/scss/style.css")?> >
    <link href=<?php echo base_url("assets/css/lib/vector-map/jqvmap.min.css")?> rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url("assets/css/lib/datatable/dataTables.bootstrap.min.css");?>>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/> -->
    <link href="<?php echo base_url('assets/css/jquery-ui.css');?>" rel="stylesheet">
</head>


        

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Physician</strong> Details
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url('home/insert_person');?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="form_apply">
                          
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Physician Name</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="physician_name" placeholder="Name" class="form-control" value="<?php if(!empty($update_phy)){ echo $update_phy[0]['physician_name'] ;} else{ echo set_value('physician_name');}?>">
                              <?php echo form_error('physician_name');?>
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Physician Email</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="physician_email" placeholder="Email" class="form-control" value="<?php if(!empty($update_phy)){ echo $update_phy[0]['physician_email'] ;} else{ echo set_value('physician_email');}?>">
                              <?php echo form_error('physician_email');?>
                            </div>
                            
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Physician Speciality</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="physician_speciality" placeholder="Speciality" class="form-control" value="<?php if(!empty($update_phy)){ echo $update_phy[0]['physician_speciality'] ;} else{ echo set_value('physician_speciality');}?>">
                              <?php echo form_error('physician_speciality');?>
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-6"><textarea name="physician_discription" id="textarea-input" rows="9" placeholder="Description" class="form-control"><?php if(!empty($update_phy)){ echo $update_phy[0]['physician_discription'] ;} else{ echo set_value('physician_discription');}?></textarea>
                              <?php echo form_error('physician_discription');?>
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="image" class=" form-control-label">Upload Image</label></div>
                            <div class="col-12 col-md-6">
                              <input type="file" name="userfile" id="image" accept="image/*"> 
                            </div>
                            <input type="hidden" name="images" value="<?php if(!empty($update_phy)){ echo $update_phy[0]['images'] ;} else{ echo set_value('images');}?>">
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
                                <input type="hidden" name="act" value="<?php if(!empty($update_phy)){ echo $update_phy[0]['physician_email'] ;} else{ echo set_value('act');}?>">
                              <?php echo form_error('act');?>
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
        


    </div><!-- /#right-panel -->

      <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="smallmodalLabel">Physician Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body data_come">
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
                  </div>
              </div>
          </div>
      </div>


<?php
/**************/
include('include/footer.php');
?>
<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
        CKEDITOR.replace( 'physician_discription' );
</script>
<script type="text/javascript">
            $(document).on('submit','form[name="form_apply"]',function() {
           var iSize = ($('input[name="userfile"]')[0].files[0].size); 
           if(iSize <= 500000){
            var myfile= $('input[name="userfile"]').val();
            var ext = myfile.split('.').pop();
            if(ext=="png" || ext=="jpeg" || ext=="jpg" || ext=="gif"){
                
            } else{
               alert("Please Upload Image File Only..");
               return false;
            }
            }else{
               alert("Please Upload Less Than 500 KB..");
               return false;
            }
           });
        
      </script>
      <script type="text/javascript">
  $(document).on('click','a[href="#check_message"]',function(){
    var da=$(this).attr('data-id');
    $.ajax({
      url:'<?php echo base_url("home/check_event_message");?>',
      type:'POST',
      data:{'event_id':da},
      success:function(result){
        $('.data_come').html(result);
      }
    });
 });
</script>
