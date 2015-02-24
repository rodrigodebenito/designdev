<?php
	
	// Love, John Niedermeyer – http://nieder.me
	
	
	// if your comps are in a subfolder, list it here. Must end with a slash, e.g., ‘comps/’.
	// Default is nothing, (i.e., in the same folder as this PHP file)
	$dir = "comps/";


	// Page <title/>. (e.g., Project name)
	// Default is nothing
	$siteTitle = "A Test of the NYTdesign Rotator 2.0";
	
	
	// Background-color for the stage. (Any CSS hex or name value, e.g., #f4f4f4, lightgray)
	// Default is ‘white’
	$bgColor = "white";


	// Nav Bar: ‘dark’ or ‘light’ theme? 
	// Default is ‘dark’
	$navTheme = "dark";


	// Nav Bar: fixie ‘yes’ or ‘no’? 
	// Default is ‘yes’
	$navFixie = "yes";
	
	
	// Include previous and next arrows in the viewport. 
	// Default is ‘yes’.
	$viewportPrevNext = "yes";
	
		
	// Are these comps mobile? Set to yes for omptized viewing on phones.
	// Default is ‘no’.
	$mobileComps = "no";


	// Set a comment for each slide, in the order that they appear. 
	// For an empty slide, include space between quotes (" ").
	// If you want to include HTML or Bootstrap hooks, take care to use single quotes (') or escape your double quotes ("). E.g., <a href='#'/>, not <a href="#"/>
	// Default is nothing
	$comment[] = "Guess what!? You no longer do you have to export your comps with leading 0’s in the file name! This script now knows how to count to 10!";
	$comment[] = "You could use this slide comment to describe any interactions or behaviors in comp #2, shown below.";
	$comment[] = "In this instance, the file name starts with ‘2b,’ which follows ‘2’. You can use this pattern to nest child comps under a parent.";
	$comment[] = "Let’s jump ahead to comp 10… Isn’t it great, now that these are in the right order?";
	$comment[] = "We’re hiding file extensions (.png/.jpg/.gif) and converting hyphens (-) and underscores (_) to spaces ( ). Em (—) or en (–) dashes can help provide some separation.";
	$comment[] = "This script is hooked up to <a href='http://twitter.github.com/bootstrap/'>Bootstrap</a>, so you <span class='text-error'>can do</span> lots of <button class='btn btn-warning btn-mini' style='margin-top: -3px;'>creative</button> things! <i class='icon-thumbs-up'></i><i class='icon-thumbs-up'></i><i class='icon-thumbs-up'></i>";
	$comment[] = "And here is comp 21, our last stop on this tour. <a href='http://wiki.em.nytimes.com/designgroup/doku.php?id=rotator_2.0'>Wiki Page »</a>";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";
	$comment[] = " ";


	// Override CSS — for instance, with iOS mocks, you migtht want to full-bleed the comps.
	// Default is nothing

	$cssOverride = "
		
			.exampleClass {
				
			}
		
	";	

	// Go!
	include '/web/design/docs/apps/rotator/v2/code/rotator.php'; 

?>
