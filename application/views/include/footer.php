	<div class="gap"></div>
	<footer id="footer">
		<div class="gap"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-6">
					<?php if($this->menu){?>
						<?php foreach($this->menu as $menu){?>
							<?php echo anchor($menu["menu_url"], "<i class='fa fa-".$menu["menu_icon"]."'></i>&nbsp; ".$menu["menu_name"], "class='btn-block color_text_white'");?>
						<?php }?>
					<?php }?>
				</div>
				<div class="col-sm-4 col-xs-6">
					<?php if($this->social){?>
						<?php foreach($this->social as $social){?>
							<a href="<?php echo $social['social_url'];?>" target="_blank" class="btn-block color_text_white"><i class="fa fa-<?php echo $social['social_icon'];?>"></i>&nbsp; <?php echo $social['social_name'];?></a>
						<?php }?>
					<?php }?>
				</div>
				<div class="col-sm-4 col-xs-6 hidden-xs">
					<p class="btn-block"><i class="fa fa-user-circle"></i>&nbsp; <?php echo $this->profile['full_name'];?></p>
					<p class="btn-block"><i class="fa fa-code"></i>&nbsp; <?php echo $this->profile['designation'];?></p>
					<p class="btn-block"><i class="fa fa-phone-square"></i>&nbsp; <?php echo $this->profile['phone'];?></p>
					<p class="btn-block"><i class="fa fa-envelope"></i>&nbsp; <?php echo $this->profile['email'];?></p>
					<p class="btn-block"><i class="fa fa-map-marker"></i>&nbsp; <?php echo $this->profile['address'];?></p>
				</div>
			</div>
		</div>
		<div class="gap"></div>
	</footer>
	<footer id="footer_copyright">
		<div class="gap-small"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p>Created &amp; Maintained By <?php echo $this->profile["full_name"];?></p>
				</div>
			</div>
		</div>
		<div class="gap-small"></div>
	</footer>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>