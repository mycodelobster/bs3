<?php include 'php-css.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mockup</title>
	<?php include 'head.php' ?>
</head>
<body>
	
	<section id="top">
		<div class="top container">
			<div class="row">
				<div class="logo col-xs-3">
					<?php img_("logo.png") ?>
				</div>
				<div class="top-menu col-xs-9">
					<a href="" class="btn-login">Login</a>
					<a href="" class="btn-signup">Signup</a>
					<?php menu_() ?>
				</div>
			</div>
		</div>
	</section>

	<section id="banner">
		<?php img_("banner.jpg", "banner-img") ?>
	</section>

	
	<section id="home">
		<div class="home container">
			<div class="home-title">
				<h1>Customize <span>Your Tutorial Online</span> Base</h1>
				<p><?php ucfirst(lipsum_(200)) ?></p>
			</div>
		</div>
	</section>

	<section class="item-thumbnail container">
		<h2 class="thumbnail-title">Passionate <span>Course</span></h2>
		<div class="row">
			<?php for ($i=1; $i < 9; $i++) { ?>
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-img">
						<a href=""> <?php thumb_("random","avatar")?> </a>
					</div>
					<div class="panel-body">
						<h2 class="item-title"><?php lipsum_(70) ?></h2>
						<ul class="meta list-inline">
							<li><?php icon_('heart') ?> <span><?php echo rand(1,100) ?></span> <br> <smal>Reviews</smal></li>
							<li><?php icon_('star') ?> <span><?php echo rand(1,100) ?></span> <br> <smal>Rating</smal></li>
							<li><?php icon_('eye-open') ?> <span>$ <?php echo rand(1,100) ?></span> <br> <smal> Discount</smal></li>
						</ul>
						<h3 class="author">
							<?php name_() ?>
							<?php avatar_("random","avatar")?>
						</h3>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php pagination_('true') ?>
	</section>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<h5>About</h5>
					<p><?php lipsum_(300) ?></p>
				</div>
				<div class="col-xs-4">
					<h5>About</h5>
					<p><?php menu_("unstyled") ?></p>
				</div>
				<div class="col-xs-4">
					<h5>Meet Us</h5>
					<div class="iconic">
						<?php icon_('heart') ?>
						<?php icon_('leaf') ?>
						<?php icon_('send') ?>
						<?php icon_('map-marker') ?>
						<?php icon_('headphones') ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<div class="container">
			Code licensed under MIT, documentation under CC BY 3.0.
		</div>
	</div>

</body>
</html>