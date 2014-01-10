<body>
	<div id="nav_background">
		<div id="nav">
			<ul>
				<?php echo anchor(site_url("site/home"), '<li>Home</li>'); ?>
				<?php echo anchor(site_url("site/about"), '<li>About</li>'); ?>
				<?php echo anchor(site_url("site/contact"), '<li>Contact</li>'); ?>
				<?php echo anchor(site_url("site/search"), '<li>Search</li>'); ?>
				<?php echo anchor(site_url("site/my_wishlist"), '<li>My Wishlist</li>'); ?>
				<?php if(isset($_SESSION['email'])){echo anchor(site_url("site/log_out"), '<li>Log Out</li>');}else{echo anchor(site_url("site/log_in"), '<li>Log In</li>');} ?>
			</ul>
		</div>
	</div>
</body>
</html>
