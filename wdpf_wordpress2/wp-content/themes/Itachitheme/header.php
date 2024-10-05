<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		

		<?php 
		
		wp_nav_menu( array(
			'menu'				=> "", 
			'container_class'	=> "menu",
			'theme_location'	=> "primary", 
			'menu_id'			=> "",
			'menu_class'		=> "",

			
		) );
		
		
		
		
		?>
		
		<!-- <div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		 -->
	</div>
</nav>