<div class="section_contact">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php $this->load->view("section/section", ["section_value" => "CONTACT"]);?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="usr">Full Name :</label>
					<input type="text" class="form-control" id="usr">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="usr">Mobile :</label>
					<input type="text" class="form-control" id="usr">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="usr">Email :</label>
					<input type="text" class="form-control" id="usr">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
				  	<label for="comment">Message :</label>
				  	<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
			</div>
		</div>
		<button class="btn my_btn_primary">Submit</button>
	</div>
	<div class="gap"></div>
</div>