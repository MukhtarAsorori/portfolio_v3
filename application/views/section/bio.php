<div class="section_bio">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2><span class="normal">I am</span> <?php echo $this->profile["full_name"];?></h2>
				<h3><?php echo $this->profile["designation"];?></h3>
				<div class="gap-small"></div>
				<p><?php echo $this->profile["profile_detail"];?></p>
				<div class="gap-small"></div>
				<div class="row">
					<div class="col-xs-3">
						<p><b>Phone</b></p>
						<p><b>Email</b></p>
						<p><b>Address</b></p>
					</div>
					<div class="col-xs-9">
						<p><?php echo $this->profile["phone_text"];?></p>
						<p><?php echo $this->profile["email"];?></p>
						<p><?php echo $this->profile["address"];?></p>
					</div>
				</div>
				<?php if($this->social){?>
					<div class="row">
						<?php foreach($this->social as $social){?>
							<div class="col-xs-2">
								<a href="<?php echo $social['social_url'];?>" target="_blank"><i class="fa fa-<?php echo $social['social_icon'];?> fa-2x my_btn_icon"></i></a>
							</div>
						<?php }?>
					</div>
				<?php }?>
				<?php if($this->profile){?>
					<a href="<?php echo $this->profile['resume_url_text'];?>" class="btn my_btn" download><i class="fa fa-download"></i>&nbsp; Download Resume</a>
					<a href="<?php echo $this->profile['resume_url_text'];?>" class="btn my_btn" target="_blank"><i class="fa fa-eye"></i>&nbsp; View Resume</a>
				<?php }?>
			</div>
			<div class="col-sm-6 hidden-xs">
				<img src="<?php echo asset_url();?>/images/myphoto3.jpg" alt="<?php echo $this->profile["full_name"];?>" class="img-responsive pull-right">
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>