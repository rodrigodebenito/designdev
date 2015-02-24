<?php

	$Files   = array();
	$Files[] = "";
	
	$PGarray   = array();
	
	if ($dir == "") {
		$dir = "./";
	}
	
	$dirfiles  = opendir($dir);
	$pg        = $_GET['pg'];
	
    $imgcount = 1;
	
	if (!$dirfiles)
	    die('<p>Oops! I couldn’t find any images.</p><p><strong>' . $dir . "</strong></p>");
	
	
	
	while ($Filename = readdir($dirfiles)) {

        $fulldate = 0;
	    
	    $filetype = strtolower(substr($Filename, (strlen($Filename) - 3), 3));
	    
	    if ($filetype != "gif" and $filetype != "jpg" and $filetype != "jpeg" and $filetype != "png")
	        continue;
	    
	    $Files[] = $Filename;	    
        $PGarray[$imgcount] = $imgcount;
	    $imgcount++;
	    
	}
	
	
	foreach ($Files as $value) {
		usort($Files, "strnatcmp");
	}
	
	
	$imgcount = $imgcount - 1;
	
	if ($pg == "" or $pg > $imgcount or $pg < 1) {
		$pg = 1;
	}
	
	$nextpage = $pg + 1;

	if ($nextpage > $imgcount) {
		$nextpage = 1;
	}
	
	$prevpage = $pg - 1;
	
	if ($prevpage < 1) {
		$prevpage = $imgcount;
	}

	
	
	
	$imagesource = $dir . $Files[$pg];
		
	if ($navFixie == "no") {
		$paddingTop = "0";
	}
	
	
	
?><!DOCTYPE html lang="en-us">

	<!-- Love, John Niedermeyer – http://nieder.me -->

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $siteTitle ?></title>
		<link rel="stylesheet" type="text/css" href="/apps/css/bootstrap-2.3.0.css"/>
		<link rel="stylesheet" type="text/css" href="/apps/css/bootstrap-responsive.min.css"/>
		<link rel="stylesheet" type="text/css" href="/apps/rotator/v2/code/rotator.css"/>
		<?php
			
			if ($mobileComps == "yes") {
				
				echo "<link rel='stylesheet' type='text/css' href='/apps/rotator/v2/code/mobileComps.css'/>";
				
			}
			
		?>
		
		
		<style>
			
			body {
				background-color: <?php echo $bgColor; ?>;
			}
			
			<?php
				
				if ($viewportPrevNext == "no") {
					echo ".prevNext-control { display: none; }";
				}
			
			
				echo $cssOverride;
				
			?>
			
		
		</style>
		
	</head>
	
	
	<body class="<?php
			if ($navFixie == "yes") {
				echo "navFixie";
			} 
			?>">
	
		<!-- Nav
		================================================================================ -->
	
		<a class="prevNext-control left" href="?pg=<?php echo $prevpage; ?>"><span>&lsaquo;</span></a>
		<a class="prevNext-control right" href="?pg=<?php echo $nextpage; ?>"><span>&rsaquo;</span></a>
		
		<div class="navbar<?php 
		
		if ($navFixie == "yes") {
			echo " navbar-fixed-top";
		}
		
		if ($navTheme == "dark") {
			echo " navbar-inverse";
		}
		
		?>">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="prevNext left hideIt"><a href="?pg=<?php echo $prevpage; ?>">&lsaquo;</a></li>
					<li class="divider-vertical hideIt"></li>
					<li class="prevNext right hideIt"><a href="?pg=<?php echo $nextpage; ?>">&rsaquo;</a></li>
					<li class="divider-vertical hideIt"></li>
					<li class="imgCount hideIt"><?php echo $pg . " of " . $imgcount; ?></li>
					<li class="divider-vertical hideIt"></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<strong>
							<?php
								$Files[$pg] = str_replace('.png', '', $Files[$pg]);
								$Files[$pg] = str_replace('.jpg', '', $Files[$pg]);
								$Files[$pg] = str_replace('.gif', '', $Files[$pg]);
								$Files[$pg] = str_replace('-', ' ', $Files[$pg]);
								$Files[$pg] = str_replace('_', ' ', $Files[$pg]);
								echo $Files[$pg]; 
							?></strong>&nbsp;<b class="caret"></b></a>
						<ul class="dropdown-menu hide">
							<li><a href="../"><i class="icon-arrow-up"></i> Parent Directory</a></li>
							<?php 
								for ($i = 1; $i <= $imgcount; $i++) {
									echo "<li><a href='?pg=" . $i . "'>";
									
									$Files[$i] = str_replace('.png', '', $Files[$i]);
									$Files[$i] = str_replace('.jpg', '', $Files[$i]);
									$Files[$i] = str_replace('.gif', '', $Files[$i]);
									$Files[$i] = str_replace('-', ' ', $Files[$i]);
									$Files[$i] = str_replace('_', ' ', $Files[$i]);
									echo $Files[$i] . "</a></li>";
								}
							?>
						</ul>
					</li>
					<li class="divider-vertical hideIt"></li>
				</ul>
				
				<?php 
					if ($comment[$pg-1] == "" || $comment[$pg-1] == " ") {
						
					} else {
						echo "<p>" . $comment[$pg-1] . "</p>";
					}
				?>
				
			</div>
		</div>

		
		<section class="container-fluid comp">
			<div class="row-fluid">
				<div class="span12">
					<?php echo "<a href='?pg=" . $nextpage ."'><img src='" . $imagesource . "' /></a>"; ?>
				</div>
			</div>
		</section>
		
				
		<!-- JavaScript
		================================================== -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="/apps/js/bootstrap.js"></script>

		<script> // Pass PHP vars off to JS
			var $prevpage = "<?php echo $prevpage ?>";
			var $nextpage = "<?php echo $nextpage ?>";
		</script>
		
		<script src="/apps/rotator/v2/code/rotator.js"></script>


	</body>
</html>