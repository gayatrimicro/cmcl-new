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
                        <strong class="card-title">Backup Vacancies Applied Data</strong>
                    </div>
                    <div class="card-body">
                      
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Appied For</th>
                      <th>Person Name</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Document</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(!empty($person)){
                      $sr=1;
                      foreach ($person as $key => $value) {
                      ?>
                      <tr>
                        <td><?php echo $sr++;?></td>
                          <td> <?php echo $value['carrier_title']; ?></td>
                          <td><?php echo $value['apply_person']?></td><td><?php echo $value['email']?></td>
                          <td><a href="#check_message" data-toggle="modal" data-target="#smallmodal<?php echo $value['apply_id']?>" data-id="<?php echo $value['apply_id'];?>">
                            <?php if(!empty($value['message'])){ echo substr($value['message'],0,30)."...";}?></a>
                          </td>
                          <td><?php echo date("m-d-Y",$value['time']); ?>
                          </td>
                        <td>
                          <a href="https://cmclancaster.com/document/<?php echo $value['upload_doc'];?>" download><i class="fa fa-download"></i></a><!-- /
                           <a href="<?php //echo base_url('home/delete_applied_person/'.rtrim(base64_encode($value['apply_id']),'=='));?>" onclick="return confirm('Are You Sure Want To Delete..')"><i class="fa fa-trash"></i></a> -->
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

<?php
    if(!empty($person)){
      $sr=1;
      foreach ($person as $key => $value) {
      ?>
    <div class="modal fade" id="smallmodal<?php echo $value['apply_id']?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="smallmodalLabel">Message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body data_come">
                  <?php if(!empty($value['message'])){ echo $value['message'];}?>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
              </div>
          </div>
      </div>
  </div>
  <?php
      }
    }
      ?>

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