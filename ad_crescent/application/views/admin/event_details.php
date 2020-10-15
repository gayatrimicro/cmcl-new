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
												<strong>Event</strong> Element
											</div>
											<div class="card-body card-block">
												<form action="<?php echo base_url('home/insert_event');?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="form_apply">
													
													<div class="row form-group">
														<div class="col col-md-2"><label for="text-input" class=" form-control-label">Event Title</label></div>
														<div class="col-12 col-md-6"><input type="text" id="text-input" name="event_title" placeholder="Text" class="form-control" value="<?php if(!empty($update_event)){ echo $update_event[0]['event_title'] ;} else{ echo set_value('event_title');}?>">
															<?php echo form_error('event_title');?>
														</div>
														
													</div>
													
													<div class="row form-group">
														<div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Event Details</label></div>
														<div class="col-12 col-md-6"><textarea name="event_details" id="textarea-input" rows="9" placeholder="Content..." class="form-control"><?php if(!empty($update_event)){ echo $update_event[0]['event_details'] ;} else{ echo set_value('event_details');}?></textarea>
															<?php echo form_error('event_details');?>
														</div>
														
													</div>
													<div class="row form-group">
														<div class="col col-md-2"><label for="image" class=" form-control-label">Upload Thumbnail <br /> (280px X 300px)</label></div>
														<div class="col-12 col-md-6">
															<input type="file" name="userfile" id="image" accept="image/*"> 
														</div>
															<input type="hidden" name="images" value="<?php if(!empty($update_event)){ echo $update_event[0]['images'] ;} else{ echo set_value('images');}?>">
													</div>

													<div class="row form-group">
														<div class="col col-md-2"><label for="image" class=" form-control-label">Upload Flyer Image  <br /> (900px X 1100px)</label></div>
														<div class="col-12 col-md-6">
															<input type="file" name="flyer_image" id="flyer_image" accept="image/*"> 
														</div>
															<input type="hidden" name="flyer_image1" value="<?php if(!empty($update_event)){ echo $update_event[0]['flyer_image'] ;} else{ echo set_value('flyer_image');}?>">
													</div>

													<div class="row form-group">
														<div class="col col-md-2"><label for="image" class=" form-control-label">Event Date</label></div>
														<div class="col-12 col-md-6">
															<input type="text" class="form-control datepicker" required="" name="event_date" value="<?php if(!empty($update_event)){ echo $update_event[0]['event_date'] ;} else{ echo set_value('event_date');}?>" placeholder="yyyy-mm-dd">
															<?php echo form_error('event_date');?>
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
																<input type="hidden" name="act" value="<?php if(!empty($update_event)){ echo $update_event[0]['event_id'] ;} else{ echo set_value('act');}?>">
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
				<div class="content mt-3">
						<div class="animated fadeIn">
								<div class="row">

								<div class="col-md-12">
										<div class="card">
												<div class="card-header">
														<strong class="card-title">Event Details</strong>
												</div>
												<div class="card-body">
													
											<table id="bootstrap-data-table" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Sr. No.</th>
													<th>Event Title</th>
													<th>Event Details</th>
													<th>Thumbnail</th>
													<th>FlyerImage</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												if(!empty($event)){
													$sr=1;
													foreach ($event as $key => $value) {
													?>
													<tr>
														<td><?php echo $sr++;?></td>
														<td><?php echo $value['event_title']?></td>
														<td>
															<a href="#check_message" data-toggle="modal" data-target="#smallmodal" data-id="<?php echo $value['event_id'];?>">
															<?php if(!empty($value['event_details'])) echo substr($value['event_details'],0,30).'...';?>
															</a>  
															</td>
															<td>
																<?php 
																if(!empty($value['images'])){
																?>
																<img src="<?php echo base_url('assets/images/event/').'/'.$value['images']?>" width="50" height="50">
																	<?php } else{ echo "Not Available..";}?>
															</td>
															<td>
																<?php 
																if(!empty($value['flyer_image'])){
																?>
																<img src="<?php echo base_url('assets/images/flyer_image/').'/'.$value['flyer_image']?>" width="50" height="50">
																	<?php } else{ echo "Not Available..";}?>
															</td>
														<td>
															<a href="<?php echo base_url('home/event_details/'.rtrim(base64_encode($value['event_id']),'=='));?>"><i class='fa fa-edit'></i></a> / 
															<a href="<?php echo base_url('home/delete_event/'.rtrim(base64_encode($value['event_id']),'=='));?>" onclick="return confirm('Are You Sure Want To Delete...')"><i class="fa fa-trash"></i></a>
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
											<h5 class="modal-title" id="smallmodalLabel">News Details</h5>
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
				CKEDITOR.replace( 'event_details' );
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


