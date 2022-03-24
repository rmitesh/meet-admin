<div class="row">
	<div class="col-md-8 offset-2">
		<form action="{{ route('admin.setting.update-company-info') }}" method="post" id="form-company-info" autocomplete="off">
			@csrf

			<div class="form-group">
	        	<label for="company_name">Company Name <span class="text-danger">*</span></label>
	        	<input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" autofocus required />
	      	</div>

	      	<div class="form-group">
	        	<label for="company_email">Company Email <span class="text-danger">*</span></label>
	        	<input type="email" class="form-control" id="company_email" name="company_email" placeholder="Company Email" required />
	      	</div>

	      	<div class="form-group">
	      		<input type="submit" class="btn btn-outline-primary update-company-info" value="Update" />
	      	</div>
		</form>
	</div>
</div>