<!DOCTYPE html>
<html lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">








<head><title><?php print $head_title; ?></title>
<?php 
print $head;
print $styles;
print $scripts;
?>
</head><body class="<?php print $body_classes; ?>">










<header>

	<?php if (!empty($primary_links) || $navigation_bar) { ?>
	
		<nav>

			<?php print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu'));?>
			<?php if ($navigation_bar) print $navigation_bar; ?>

		</nav>
	
	<?php } ?>

	<?php if (!empty($logo)): ?><a id="coscupLogotype" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a><?php endif; ?>

	<?php if (!empty($site_name)): ?><h1><a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a></h1><?php endif; ?>
	
	<?php if (!empty($site_slogan)): ?><p><?php print $site_slogan; ?></p><?php endif; ?>

</header>









	
<section>

	<article>

		<?php	if ($content_top) { ?>
		
				<header><?php print $content_top; ?></header>
		
		<?php	} 
				
			if ($tabs) { ?>
				
				<nav class="tabs"><?php print $tabs; ?></nav>
		
		<?php	} ?>
		
			<?php print $content; ?>
		
		<?php	if ($content_bottom) { ?>
			
				<footer><?php print $content_bottom; ?></footer>
			
		<?php 	} ?>

	</article>
	
	<aside>

		<?php	if ($sponsors) { ?>
	
			<section id="sponsors"><?php print $sponsors; ?></section>
	
		<?php	} ?>
	
		<?php	if ($sidebar) { ?>
		
			<section id="sidebar"><?php print $sidebar; ?></section>
		
		<?php	} ?>

	</aside>

</section>




















<footer>

	<section class="wrap">

		<span><?php print $footer_message; ?></span>
		<?php print $footer_block; ?>
	
	</section>

</footer>










<?php print $closure; ?></body></html>
