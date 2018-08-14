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
							<h5 class="color_text_grey_dark"><?php echo $experience["start_at_text"];?> - <?php echo $experience["end_at_text"];?> <i class="fa fa-circle"></i> <?php echo $experience["duration"];?></h5>
							<p><?php echo $experience["detail"];?></p>
							<?php if($experience['company_url']){?>
								<br><a href="<?php echo $experience['company_url'];?>" class="btn my_btn" target="_blank"><i class="fa fa-eye"></i>&nbsp; Company Website</a>
							<?php }?>
							<?php echo ($key+1 < count($experiences)) ? "<hr>" : "";?>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>