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
		<form id="contact_form">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Full name : </label>
						<input type="text" class="form-control" name="full_name" id="full_name" required placeholder="Enter your full name">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Email : </label>
						<input type="text" class="form-control" name="email" id="email" required placeholder="Enter your email">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Phone : </label>
						<input type="text" class="form-control" name="phone" id="phone" required placeholder="Enter your phone">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="message" id="message" required rows="3"></textarea>
					</div>
				</div>
			</div>
			<div id="contact_error"></div>
		</form>
		<button class="btn my_btn_primary" id="contact_btn">Submit</button>
	</div>
	<div class="gap"></div>
</div>
<script>
	$(document).ready(function(){
		$("#contact_btn").click(function(){
			if($("#contact_form").valid()){
				$.ajax({
					url: "http://api.nfraz.co.in/contact_me",
					type: "post", 
					data: $("#contact_form").serialize(),
					dataType: "json",
					success: function(response){
					    console.log(response);
					    if(response.status){
					    	$("#contact_error").addClass("alert alert-success").text(response.message);
					    	setTimeout(() => location.reload(), 5000);
					    }else{
					    	$("#contact_error").addClass("alert alert-danger").text(response.message);
					    }
					}
				});
			}
		})
	});
</script>