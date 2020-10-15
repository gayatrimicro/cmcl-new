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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Applied Person</strong>
                        </div>
                        <div class="card-body">
                        <a href="<?php echo base_url('home/export_subscribe');?>" download class="btn btn-primary btn-sm" title="Export Subscribe Person Data">Export</a>   
                       <hr>
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>Sr. No.</th>
                         <th>Person Name</th>
                         <th>Email_id </th>
                         <th>Date</th>
                         <th>Action</th>
                       </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(!empty($mail)){
                          $sr=1;
                          foreach ($mail as $key => $value) {
                          ?>
                          <tr>
                            <td><?php echo $sr++;?>
                              
                              <td><?php echo $value['first_name']." ".$value['last_name'];?></td>
                              <td><?php echo $value['email_id']?></td>
                              <td><?php echo date('d-m-Y',$value['time']);?></td>
                            <td>
                              <a href="<?php echo base_url('home/delete_mail/'.rtrim(base64_encode($value['id']),'=='));?>" onclick="return confirm('Are You Sure Want To Delete..')"><i class="fa fa-trash"></i></a>
                             </td>
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


                  <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Message</h5>
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
          $('#bootstrap-data-table-export').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
     
        CKEDITOR.replace( 'carrier_details' );
</script>
<script type="text/javascript">
  $(document).on('click','a[href="#check_message"]',function(){
    var da=$(this).attr('data-id');
    $.ajax({
      url:'<?php echo base_url("index.php/admin/check_message");?>',
      type:'POST',
      data:{'apply_id':da},
      success:function(result){
        $('.data_come').html(result);
      }
    });
 });
</script>
