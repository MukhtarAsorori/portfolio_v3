<div class="section_experience">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php $this->load->view("section/section", ["section_value" => "EXPERIENCE"]);?>
			</div>
			<div class="col-sm-8">
				<?php if($experiences){?>
					<?php foreach($experiences as $key => $experience){?>
						<div>
							<h4><?php echo $experience["designation"];?></h4>
							<h4 class="color_text_grey_dark normal"><?php echo $experience["company_name"];?></h4>
							<h5 class="color_text_grey_dark"><?php echo $experience["start_at"];?> - <?php echo $experience["end_at"];?> <i class="fa fa-circle"></i> 8 Months</h5>
							<p><?php echo $experience["detail"];?></p>
							<?php echo ($key+1 < count($experiences)) ? "<hr>" : "";?>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>