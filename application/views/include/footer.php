	<footer id="footer">
		<div class="gap"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<?php if($this->menu){?>
						<?php foreach($this->menu as $menu){?>
							<?php echo anchor($menu["menu_url"], "<i class='fa fa-".$menu["menu_icon"]."'></i>&nbsp; ".$menu["menu_name"], "class='btn-block color_text_white'");?>
						<?php }?>
					<?php }?>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn-block color_text_white"><i class="fa fa-linkedin-square"></i>&nbsp; LinkedIn</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-github-square"></i>&nbsp; Github</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-medium"></i>&nbsp; Medium</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-codepen"></i>&nbsp; Codepen</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-angellist"></i>&nbsp; Angellist</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-quora"></i>&nbsp; Quora</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn-block color_text_white"><i class="fa fa-user-circle"></i>&nbsp; Nazish Fraz</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-code"></i>&nbsp; Full Stack Developer</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-phone-square"></i>&nbsp; 9748277144</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-envelope"></i>&nbsp; nfraz007@gmail.com</a>
					<a href="#" class="btn-block color_text_white"><i class="fa fa-map-marker"></i>&nbsp; Bengaluru, India</a>
				</div>
			</div>
		</div>
		<div class="gap"></div>
	</footer>
</body>
</html>
<?php $this->load->view("include/js");?>
<script type="text/javascript">

</script>