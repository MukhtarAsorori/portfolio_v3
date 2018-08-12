<div class="section_certificate">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php $this->load->view("section/section", ["section_value" => "CERTIFICATE"]);?>
			</div>
		</div>
	</div>
	<div class="gap"></div>
	<div class="container section_experience">
		<div class="row">
			<?php if($certificates){?>
				<?php foreach($certificates as $key => $certificate){?>
					<div class="col-md-4 col-sm-6">
						<div class="thumbnail">
							<a href="<?php echo $certificate["certificate_image_text"];?>">
								<img src="<?php echo $certificate["certificate_image_text"];?>" alt="Lights" style="width:100%">
								<div class="caption">
								  	<p class="color_text_grey_dark"><?php echo $certificate["website"];?></p>
								  	<h4><?php echo $certificate["certificate_name"];?></h4>
								  	<p><?php echo $certificate["event"];?></p>
								  	<hr>
								  	<small><p><span class="color_text_grey_dark bold">License :</span> <?php echo $certificate["license"];?></p></small>
								  	<small><p class="color_text_grey_dark">Issued On <?php echo $certificate["issued_at_text"];?></p></small>
								</div>
							</a>
						</div>
					</div>
				<?php }?>
			<?php }?>
		</div>
	</div>
	<div class="gap"></div>
</div>