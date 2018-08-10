<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?php $this->load->view("include/css");?>
        </head>
        <body>
        	<header id="header">
	    		<nav class="navbar">
				  	<div class="container">
				    	<div class="navbar-header">
				      		<?php echo anchor('', "Nazish Fraz", "class='navbar-brand'");?>
				      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-collapse"><i class="fa fa-bars"></i></button>
				    	</div>
				    	<?php if($this->menu){?>
					    	<div class="collapse navbar-collapse" id="header-collapse">
						    	<ul class="nav navbar-nav navbar-right">
						    		<?php foreach($this->menu as $menu){?>
							    		<li class="nav-item <?php echo ($menu['menu_active']) ? 'active' : '';?>">
							    			<?php echo anchor($menu["menu_url"], $menu["menu_name"]);?>
							    		</li>
						    		<?php }?>
						    	</ul>
						    </div>
						<?php }?>
				  	</div>
				</nav>
			</header>