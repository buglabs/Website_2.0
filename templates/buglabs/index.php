<!DOCTYPE html>
<html>

	<head>
		<?php include("head_include.php"); ?>
	</head>

	<body>
		
		<?php include("IE_banner.php"); ?>
		
		<div id="main_wrapper">

			<?php include("header.php"); ?>
			
			<nav id="menu">
				<jdoc:include type="modules" name="title_menu_products" />
				<jdoc:include type="modules" name="menu_products" />
				
				<jdoc:include type="modules" name="title_menu_services" />
				<jdoc:include type="modules" name="menu_services" />

				<jdoc:include type="modules" name="title_menu_about_us" />
				<jdoc:include type="modules" name="menu_about_us" />
				
				<jdoc:include type="modules" name="title_menu_legal" />
				<jdoc:include type="modules" name="menu_legal" />
				
				<jdoc:include type="modules" name="title_menu_videos" />
				<jdoc:include type="modules" name="menu_videos" />
				
				<jdoc:include type="modules" name="title_menu_results" />
				<jdoc:include type="modules" name="menu_results" />
			</nav>
			
			<div id="content">
				<jdoc:include type="component" />
				
				<div id="about_us">
					<jdoc:include type="modules" name="contact_form" />
				</div>
			</div>
			
			<?php include("footer.php"); ?>
			
		</div>
		
	</body>
	
</html>
