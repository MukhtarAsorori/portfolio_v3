<div class="section_project">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php $this->load->view("section/section", ["section_value" => "PROJECT"]);?>
			</div>
			<div class="col-sm-8">
				<?php if($projects){?>
					<?php foreach($projects as $key => $project){?>
						<div>
							<h4><?php echo $project["project_name"];?></h4>
							<h4 class="color_text_grey_dark normal">Personal - Library</h4>
							<h5 class="color_text_grey_dark"><?php echo $project["start_at"];?> - <?php echo $project["end_at"];?> <i class="fa fa-circle"></i> 8 Months</h5>
							<p><?php echo $project["project_detail"];?></p>
							<h5><?php echo $project["technology_html"];?></h5>
							<?php echo ($key+1 < count($projects)) ? "<hr>" : "";?>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>