<div class="section_skill">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php $this->load->view("section/section", ["section_value" => "SKILL"]);?>
			</div>
			<div class="col-sm-8">
				<div class="row">
					<?php if($skills){?>
						<?php foreach($skills as $key => $skill){?>
							<div class="col-sm-6">
								<h4><?php echo ucwords(strtolower($skill["skill_type"]));?></h4>
								<p><?php echo $skill["skill"];?></p>
								<div class="gap-small"></div>
							</div>
						<?php }?>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>