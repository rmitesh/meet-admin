<div class="row">
	<div class="col-md-8 offset-2">
		<form method="post" id="form-company-info">
			@csrf

			<div class="form-group">
	        	<label for="time_zone">Time Zone <span class="text-danger">*</span></label>
	        	<select class="custom-select" name="time_zone" id="time_zone" required>
	        		@foreach ($timeZoneLists as $zone)
	        			<option value="{{ $zone }}" {{ $zone === 'UTC' ? 'selected': '' }}>{{ $zone }}</option>
	        		@endforeach
	        	</select>
	      	</div>

			<div class="form-group">
	        	<label for="date_format">Date Format <span class="text-danger">*</span></label>
	        	<select class="custom-select" name="date_format" id="date_format" required>
	        		@foreach ($dateFormatLists as $format => $value)
	        			<option value="{{ $format }}" {{ $format === 'd-m-Y'? 'selected' : '' }}>{{ $value }}</option>
	        		@endforeach
	        	</select>
	      	</div>

			<div class="form-group">
	        	<label for="time_format">Time Format <span class="text-danger">*</span></label>
	        	<select class="custom-select" name="time_format" id="time_format" required>
	        		@foreach ($timeFormatLists as $format => $value)
	        			<option value="{{ $format }}" {{ $format === 'H:i'? 'selected' : '' }}>{{ $value }}</option>
	        		@endforeach
	        	</select>
	      	</div>

	      	<div class="form-group">
	      		<input type="submit" class="btn btn-outline-primary" value="Update" />
	      	</div>
		</form>
	</div>
</div>
