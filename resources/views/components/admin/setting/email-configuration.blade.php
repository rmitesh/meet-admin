<div class="row">
	<div class="col-md-8 offset-2">
		<form method="post" id="form-email-configuration">
			@csrf
			<section>
				<h5>Email Configuration</h5>
				<hr class="bg-light">
				<div class="row">
					<div class="form-group col-6">
			        	<label for="smtp_host">SMTP Host <span class="text-danger">*</span></label>
			        	<input type="text" class="form-control" id="smtp_host" name="smtp_host" placeholder="SMTP Host" required />
			      	</div>

					<div class="form-group col-6">
			        	<label for="smtp_port">SMTP Port <span class="text-danger">*</span></label>
			        	<input type="text" class="form-control" id="smtp_port" name="smtp_port" placeholder="SMTP Port" required />
			      	</div>

			      	<div class="form-group col-12">
			        	<label for="smtp_encryption">SMTP Encryption <span class="text-danger">*</span></label>
			        	<select class="custom-select" name="smtp_encryption" id="smtp_encryption" required>
			        		<option value="ssl" selected>SSL</option>
			        		<option value="tls">TLS</option>
			        	</select>
			      	</div>

					<div class="form-group col-6">
			        	<label for="smtp_user">SMTP User <span class="text-danger">*</span></label>
			        	<input type="text" class="form-control" id="smtp_user" name="smtp_user" placeholder="SMTP User" required />
			      	</div>

					<div class="form-group col-6">
			        	<label for="smtp_password">SMTP Password <span class="text-danger">*</span></label>
			        	<input type="text" class="form-control" id="smtp_password" name="smtp_password" placeholder="SMTP Password" required />
			      	</div>

					<div class="form-group col-6">
			        	<label for="from_name">From Name <span class="text-danger">*</span></label>
			        	<input type="text" class="form-control" id="from_name" name="from_name" placeholder="From Name" required />
			      	</div>
		      	</div>
			</section>

			<section>
				<h5>Email Reply</h5>
		      	<hr class="bg-light">
		      	<div class="row">
					<div class="form-group col-6">
			        	<label for="reply_to_email">Reply to Email <span class="text-danger">*</span></label>
			        	<input type="email" class="form-control" id="reply_to_email" name="reply_to_email" placeholder="Reply to Email" required />
			      	</div>

					<div class="form-group col-6">
			        	<label for="reply_to_name">Reply to Name <span class="text-danger">*</span></label>
			        	<input type="email" class="form-control" id="reply_to_name" name="reply_to_name" placeholder="Reply to Name" required />
			      	</div>
		      	</div>
			</section>

      		<div class="form-group">
	      		<input type="submit" class="btn btn-outline-primary" value="Update" />
	      	</div>
		</form>
	</div>
</div>
