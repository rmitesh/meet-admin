<div class="row">
	<div class="col-md-8 offset-2">
		<form method="post" id="form-social-links">
			@csrf

			<div class="form-group">
	        	<label for="facebook_link">Facebook Link <span class="text-danger">*</span></label>
	        	<div class="input-group mb-3">
                  	<div class="input-group-prepend">
	                    <span class="input-group-text">
	                    	<i class="fab fa-facebook"></i>
	                    </span>
                  	</div>
                  	<input type="url" class="form-control" name="facebook_link" id="facebook_link" placeholder="https://facebook.com/">
                </div>
	      	</div>

			<div class="form-group">
	        	<label for="twitter_link">Twitter Link <span class="text-danger">*</span></label>
	        	<div class="input-group mb-3">
                  	<div class="input-group-prepend">
	                    <span class="input-group-text">
	                    	<i class="fab fa-twitter"></i>
	                    </span>
                  	</div>
                  	<input type="url" class="form-control" name="twitter_link" id="twitter_link" placeholder="https://twitter.com/">
                </div>
	      	</div>

			<div class="form-group">
	        	<label for="instagram_link">Instagram Link <span class="text-danger">*</span></label>
	        	<div class="input-group mb-3">
                  	<div class="input-group-prepend">
	                    <span class="input-group-text">
	                    	<i class="fab fa-instagram"></i>
	                    </span>
                  	</div>
                  	<input type="url" class="form-control" name="instagram_link" id="instagram_link" placeholder="https://instagram.com/">
                </div>
	      	</div>

			<div class="form-group">
	        	<label for="linkedin_link">LinkedIn Link <span class="text-danger">*</span></label>
	        	<div class="input-group mb-3">
                  	<div class="input-group-prepend">
	                    <span class="input-group-text">
	                    	<i class="fab fa-linkedin"></i>
	                    </span>
                  	</div>
                  	<input type="url" class="form-control" name="linkedin_link" id="linkedin_link" placeholder="https://linkedin.com/">
                </div>
	      	</div>

	      	<div class="form-group">
	      		<input type="submit" class="btn btn-outline-primary" value="Update" />
	      	</div>
		</form>
	</div>
</div>
