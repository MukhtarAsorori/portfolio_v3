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
		<?php echo form_open("contact", [ 'onsubmit' => "submit.value = 'Submitting';"]); ?>
			<?php echo (isset($this->message["success"]) && $this->message["success"] != "") ? '<div class="alert alert-success"><i class="fa fa-check-circle"></i> '.$this->message["success"].'</div>' : "";?>
			<?php echo (isset($this->message["error"]) && $this->message["error"] != "") ? '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> '.$this->message["error"].'</div>' : "";?>

			<div class="row">
				<div class="col-sm-4">
					<div class="form-group <?php echo isset($this->error['full_name']) ? "has-error" : ''?>">
						<?php echo form_label('Full Name :', 'full_name'); ?>
						<?php echo form_input('full_name', set_value("full_name"), [ 'class' =>	"form-control", 'id' =>	"full_name", 'placeholder'	=>	"Enter your Full Name", 'required' => true ]); ?>
						<span class="error_message"><?php echo (isset($this->error["full_name"])) ? $this->error["full_name"] : ''?></span>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group <?php echo isset($this->error['email']) ? "has-error" : ''?>">
						<?php echo form_label('Email :', 'email'); ?>
						<?php echo form_input('email', set_value("email"), [ 'class' =>	"form-control", 'id' =>	"email", 'placeholder'	=>	"Enter your Email", 'required' => true ]); ?>
						<span class="error_message"><?php echo (isset($this->error["email"])) ? $this->error["email"] : ''?></span>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group <?php echo isset($this->error['phone']) ? "has-error" : ''?>">
						<?php echo form_label('Phone :', 'phone'); ?>
						<?php echo form_input('phone', set_value("phone"), [ 'class' =>	"form-control", 'id' =>	"phone", 'placeholder'	=>	"Enter your Phone", 'required' => true ]); ?>
						<span class="error_message"><?php echo (isset($this->error["phone"])) ? $this->error["phone"] : ''?></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group <?php echo isset($this->error['message']) ? "has-error" : ''?>">
					  	<?php echo form_label('Message :', 'mssage'); ?>
						<?php echo form_textarea('message', set_value("message"), [ 'class'	=>	"form-control", 'id' =>	"message", 'placeholder' =>	"Enter your Message", 'required' => true, 'rows' => "5" ]); ?>
						<span class="error_message"><?php echo (isset($this->error["message"])) ? $this->error["message"] : ''?></span>
					</div>
				</div>
			</div>
			<?php echo form_submit('submit', 'Submit',['class' => 'btn my_btn_primary']); ?>
		<?php echo form_close(); ?>
	</div>
	<div class="gap"></div>
</div>