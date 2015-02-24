<?php list($search_files,$search_images) = search(); ?>
<section id="search">
	<div class="container">
		<div class="row">
			<form class="form-inline" role="search">
		  	<div class="form-group">
		    	<input type="search" class="form-control input-sm" placeholder="Search">
		  	</div>
		  	<button type="submit" class="btn btn-sm btn-default input-sm">Submit</button>
			</form>
			<?php //show_files($search_files); ?>
		</div>
	</div>
</section>