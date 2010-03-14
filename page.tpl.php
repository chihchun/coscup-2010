<!DOCTYPE html>
<html lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">



<head>

	<title>[debug mode] <?php print $head_title; ?></title>
	<?php print $head; ?>
	<?php print $styles; ?>
	<?php print $scripts; ?>

</head>

<body class="<?php print $body_classes; ?>">

	<header>
		<?php if (!empty($logo)): ?>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a>
		<?php endif; ?>

		<?php if (!empty($site_name)): ?><h1><a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a></h1><?php endif; ?>
		<?php if (!empty($site_slogan)): ?><p><?php print $site_slogan; ?></p><?php endif; ?>

	</header>
	
	<nav></nav>

	<article>

<?php	if ($content_top) { ?>

		<section id="content-top">

			<?php print $content_top; ?>

		</section>

<?php	} 
	
	if ($tabs) { ?>
	
		<!-- Tabs for those who have permissions to edit -->

		<nav class="tabs">

			<?php print $tabs; ?>

		</nav>

<?php	} ?>

		<?php print $content; ?>

		<?php if ($content_bottom): ?>
			<section id="content-bottom">
				<?php print $content_bottom; ?>
			</section>
		<?php endif; ?>

	</article>

		<?php if (!empty($primary_links) || $navigation_bar): ?>
			<nav>
				<?php print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu'));?>
				<?php if ($navigation_bar) print $navigation_bar; ?>
			</nav>
		<?php endif; ?>

		<?php if ($sponsors): ?>
			<aside id="sponsors">
				<?php print $sponsors; ?>
			</aside>
		<?php endif; ?>

		<?php if ($sidebar): ?>
			<aside id="sidebar">
				<?php print $sidebar; ?>
			</aside>
		<?php endif; ?>

	<footer>
	<?php print $footer_message; ?>
	<?php print $footer_block; ?>
	</footer>

		<?php print $closure; ?>
	</body>
</html>
