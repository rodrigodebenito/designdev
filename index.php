<?php
	include('_app/home/header.php');
?>

<?php
	define(ROOT, "/");
?>

<section id="blog">
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-sm-6">
				<h4><a href="<?php echo ROOT . 'brand'; ?>">NYT Brand Book</a></h4>
				<p>Guidelines and best practices for using our most public assets.</p>
			</div>

			<div class="col-xs-12 col-sm-6">
				<h4><a href="<?php echo ROOT . 'logos'; ?>">Logos, Icons and Photography</a></h4>
				<p>A repository of art, and source files that are ready for public use.</p>
			</div>
		</div>

		<div id="departments" class="row">
			<h2 class="heading">Departments</h2>
			
			<div class="col-xs-12 col-sm-6 dep">
				<h4><a href="<?php echo ROOT . 'digital'; ?>">Digital Design</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-xs-12 col-sm-6 dep">
				<h4><a href="<?php echo ROOT . 'products'; ?>">New Products</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-xs-12 col-sm-6 dep">
				<h4><a href="<?php echo ROOT . 'print'; ?>">Print</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-xs-12 col-sm-6 dep">
				<h4><a href="<?php echo ROOT . 'marketing'; ?>">Marketing</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-xs-12 col-sm-6 dep">
				<h4><a href="<?php echo ROOT . 'ads'; ?>">Creative Advertising</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-xs-12 col-sm-6 dep">
				<h4><a href="<?php echo ROOT . 'syndication'; ?>">Syndication</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

		</div>

		<div id="departments" class="row">
			<h2 class="heading">Help</h2>
			
			<div class="col-xs-12 col-sm-6 dep">
			<p>This is help.</p>
			</div>
		</div>


	</div>
</section>


<?php include('_app/home/footer.php'); ?>
