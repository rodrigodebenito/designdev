<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>NYTimes.com Residential Sales Tool</title>
  <link rel="stylesheet" href="css/wine.css" type="text/css" media="screen" title="no title" charset="utf-8">

  <meta  http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>

<body>
    
  <div id="page">
    <div id="header">
      <h1><a href="./">NYTimes.com Residential Sales Tool</a></h1>
    </div>
    <div id="main">
    
        
          <table class="tool">
			<tr>
				<td class="label">
					<b>Open Saved Sale: </b>					
				</td>
				<td>
					<select name="loadSlug" id="loadSlug" onchange="window.location='./?slug='+this[this.selectedIndex].value" style="width:150px">
						<option></option>
						
						<?
							$db = mysql_connect("localhost","bart","b@rt");
							mysql_select_db("designdev",$db);
							
							$result = mysql_query("select slug from resales ORDER BY slug DESC") or die("<br>WL Error - Dropdown:".mysql_error());
							while ($row = mysql_fetch_object($result)) {
								if(strlen($row->slug) >= 1) {
									echo '<option value="'.$row->slug.'">'.$row->slug.'</option>';
								}
							}
							
							if($_GET['slug']) {
								$slugResult = mysql_query("select * from resales WHERE slug='".$_GET['slug']."'") or die("<br>WL Error - Saved List:".mysql_error());
								while ($slugRow = mysql_fetch_object($slugResult)) {
									$saved['slug'] = $slugRow -> slug;
									$saved['published'] = $slugRow -> published;
									
									
									$saved['reg1content'] = $slugRow -> reg1content;
									$saved['reg1image'] = $slugRow -> reg1image;
									$saved['reg1imagepos'] = $slugRow -> reg1imagepos;
							
									$saved['reg2content'] = $slugRow -> reg2content;
									$saved['reg2image'] = $slugRow -> reg2image;
									$saved['reg2imagepos'] = $slugRow -> reg2imagepos;
							
									$saved['reg3content'] = $slugRow -> reg3content;
									$saved['reg3image'] = $slugRow -> reg3image;
									$saved['reg3imagepos'] = $slugRow -> reg3imagepos;
							
									$saved['reg4content'] = $slugRow -> reg4content;
									$saved['reg4image'] = $slugRow -> reg4image;
									$saved['reg4imagepos'] = $slugRow -> reg4imagepos;
							
									$saved['reg5content'] = $slugRow -> reg5content;
									$saved['reg5image'] = $slugRow -> reg5image;
									$saved['reg5imagepos'] = $slugRow -> reg5imagepos;
							
									$saved['reg6content'] = $slugRow -> reg6content;
									$saved['reg6image'] = $slugRow -> reg6image;
									$saved['reg6imagepos'] = $slugRow -> reg6imagepos;
							
									$saved['reg7content'] = $slugRow -> reg7content;
									$saved['reg7image'] = $slugRow -> reg7image;
									$saved['reg7imagepos'] = $slugRow -> reg7imagepos;
																		
								}
							}
						
						?>
						
						
					</select><br>
				</td>
				
				
			</tr>
		</table>
		<form action="show.php" method="post" accept-charset="utf-8">
		<table class="mainForm">
	
  		<tr>
            <td class="label">
	
	
				<label>Sale Slug</label></td>
            <td><input type="text" id="wlSlug" value="<? if($saved) { echo $saved['slug']; } ?>"  name="wl[slug]" class="short"></td>  
        </tr>	
        
        <tr class="last">
            <td class="label">
	
	
				<label>Published Date</label></td>
            <td><input type="text" id="wlPublished" value="<? if($saved && $saved['published']!="") { echo $saved['published']; } else { echo date('F j, Y'); } ?>"  name="wl[published]" class="short"></td>  
        </tr>	
        

        
		</table>
		
<? 

$arrRegions = array("Manhattan","Four Buroughs","Long Island","Westchester/ Putnam","Rockland/ Orange","New Jersey","Connecticut");
for ($i=1; $i <= 7; $i++) { ?>
		<table class="subForm">



          <tr>
			<td rowspan="3" class="number">
				<? echo $arrRegions[$i-1]; ?>
			</td>

			<td>
						
				<label class="longLabel">Content (separated by two line-breaks)</label> <textarea rows="20"  name="wl[reg<? echo $i; ?>content]"><? if($saved) { echo $saved['reg'.$i.'content']; } ?></textarea><br>
			</td>
          </tr> <tr>
 			<td>
				<label>Photo URL</label> <input type="text" class="text" value="<? if($saved) { echo $saved['reg'.$i.'image']; } else { echo "http://"; } ?>" onblur="if(this.value=='') { this.value='http://'; }" onfocus="if(this.value=='http://') { this.value=''; }"  name="wl[reg<? echo $i; ?>image]"><br>
				<label>Photo Position:</label> 
					<input type="radio" value="1"  name="wl[reg<? echo $i; ?>imagepos]"<? if($saved && $saved['reg'.$i.'imagepos']=='1') { echo ' checked="checked"'; } ?>> &lt;$400K &nbsp;&nbsp;
					<input type="radio" value="2"  name="wl[reg<? echo $i; ?>imagepos]"<? if($saved && $saved['reg'.$i.'imagepos']=='2') { echo ' checked="checked"'; } ?>> $400K-$699K &nbsp;&nbsp;
					<input type="radio" value="3"  name="wl[reg<? echo $i; ?>imagepos]"<? if($saved && $saved['reg'.$i.'imagepos']=='3') { echo ' checked="checked"'; } ?>> $700K-$899K &nbsp;&nbsp;
					<input type="radio" value="4"  name="wl[reg<? echo $i; ?>imagepos]"<? if($saved && $saved['reg'.$i.'imagepos']=='4') { echo ' checked="checked"'; } ?>> &gt;$900K<br>
			</td>
		  </tr>
		
		</table>
<? } ?>		







                  
          <div><br>
            <input type="submit" value="Save / Generate HTML" onclick="if(document.getElementById('wlSlug').value=='') { alert('The sale slug is required. The slug is used to save this entry.'); return false; }">
          </div>
        </form>
        <br><br>
 
      
    </div> <!--main-->        
    </div> <!--page-->
</body>
</html>
