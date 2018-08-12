<div class="section_education">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php $this->load->view("section/section", ["section_value" => "EDUCATION"]);?>
			</div>
			<div class="col-sm-8">
				<?php if($educations){?>
					<?php foreach($educations as $key => $education){?>
						<div>
							<h4><?php echo $education["institute_name"];?></h4>
							<h5 class="color_text_grey_dark"><?php echo $education["year"];?></h5>
							<p><?php echo $education["degree"];?>, <?php echo $education["field_of_study"];?>, <?php echo $education["grade"];?></p>
							<?php echo ($key+1 < count($educations)) ? "<hr>" : "";?>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>