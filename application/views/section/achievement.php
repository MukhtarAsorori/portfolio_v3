<div class="section_achievement">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php $this->load->view("section/section", ["section_value" => "ACHIEVEMENT"]);?>
			</div>
			<div class="col-sm-8">
				<?php if($achievements){?>
					<?php foreach($achievements as $key => $achievement){?>
						<div>
							<a href="<?php echo $achievement['achievement_url'];?>" target="_blank"><i class="fa fa-hand-o-right"></i>&nbsp; <?php echo $achievement["achievement_name"];?></a>
							<?php echo ($key+1 < count($achievements)) ? "<hr>" : "";?>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>