<?php include('../../db.php');?>
<?php 
            $data1=mysqli_query($conn,"SELECT * FROM `carrier_details` WHERE `carrier_id`='$_REQUEST[carrier_id]'");
            $data=mysqli_fetch_array($data1);

            ?>
			<form method="post" action="../../function.php" enctype="multipart/form-data" name="form_apply">
				<p class="form-row form-row-wide">
				   <label for="appl">Apply For <span class="required">*</span></label>
				   <input type="text" class="input-text" name="applied_for" id="appl" value="<?php echo $data['carrier_title']?>" readonly/>
				</p>
				<p class="form-row form-row-wide">
				   <label for="username">Name <span class="required">*</span></label>
				   <input type="text" class="input-text" name="apply_person" id="username" value="" required="required" />
				</p>
				<p class="form-row form-row-wide">
				   <label for="password">Email <span class="required">*</span></label>
				   <input class="input-text" type="email" name="email" id="password" required="required"/>
				</p>
				<p class="form-row form-row-wide">
				   <label for="password">Message </label>
				   <textarea name="message" class="input-text" style="resize: none;height: 150px;"></textarea>
				</p>
				 <p class="form-row form-row-wide">
				   <label for="upload">Upload Document <span class="required">*</span></label>
				   <input class="input-text" type="file" name="upload_doc" id="upload" accept=".doc,.docx,.pdf" required="required"/>
				</p>
				<p>
					
					<div class="g-recaptcha" data-sitekey="6Lf8C00UAAAAAHXI3n9fbwXkG4io8BtjWclq0lV3"></div>
				</p>
				<p class="form-row">
				   <input type="hidden" name="carrier_id" value="<?php echo $data['carrier_id'];?>">
				   <input type="hidden" name="act" value="apply_job">   
				   <input type="submit" class="button" name="submit" value="submit" />
				</p>

			</form>
			<script src='https://www.google.com/recaptcha/api.js'></script>