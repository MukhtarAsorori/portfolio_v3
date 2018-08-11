<div class="section_bio_short">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2 class="color_text_white"><?php echo $this->profile["full_name"];?> <span class="normal">- <?php echo $this->profile["designation"];?></span></h2>
				<div class="row hidden-xs">
					<div class="col-sm-3">
						<p><i class="fa fa-phone-square"></i>&nbsp; <?php echo $this->profile["phone"];?></p>
					</div>
					<div class="col-sm-5">
						<p><i class="fa fa-envelope"></i>&nbsp; <?php echo $this->profile["email"];?></p>
					</div>
					<div class="col-sm-4">
						<p><i class="fa fa-map-marker"></i>&nbsp; <?php echo $this->profile["address"];?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<?php if($this->social){?>
					<div class="row">
						<?php foreach($this->social as $social){?>
							<div class="col-xs-2">
								<a href="<?php echo $social['social_url'];?>"><i class="fa fa-<?php echo $social['social_icon'];?> fa-2x my_btn_icon text-center"></i></a>
							</div>
						<?php }?>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>