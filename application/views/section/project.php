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
							<h5 class="color_text_grey_dark"><?php echo $project["start_at_text"];?> - <?php echo $project["end_at_text"];?> <i class="fa fa-circle"></i> <?php echo $project["duration"];?></h5>
							<p><?php echo $project["project_detail"];?></p>
							<h5><?php echo $project["technology_html"];?></h5>
							<?php if($project["project_url"]){?>
								<a href="<?php echo $project['project_url'];?>" class="btn my_btn" target="_blank"><i class="fa fa-code"></i>&nbsp; View Code</a>
							<?php }?>
							<?php if($project["project_demo"]){?>
								<a href="<?php echo $project['project_demo'];?>" class="btn my_btn" target="_blank"><i class="fa fa-laptop"></i>&nbsp; Live Demo</a>
							<?php }?>
							<?php echo ($key+1 < count($projects)) ? "<hr>" : "";?>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>