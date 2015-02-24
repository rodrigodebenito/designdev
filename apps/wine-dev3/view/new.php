<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>NYTimes.com Wine List Tool</title>
  <link rel="stylesheet" href="/apps/wine/css/wine.css" type="text/css" media="screen" title="no title" charset="utf-8">

  <meta  http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>

<body>
    
  <div id="page">
    <div id="header">
      <h1><a href="./">NYTimes.com Wine List Tool</a></h1>
    </div>
    <div id="main">
    
        
          <table class="tool">
			<tr>
				<td class="label">
					<b>Open Saved List: </b>					
				</td>
				<td>
					<select name="loadSlug" id="loadSlug" onchange="window.location='./?slug='+this[this.selectedIndex].value" style="width:150px">
						<option></option>
						
						<?
							$db = mysql_connect("localhost","bart","b@rt");
							mysql_select_db("designdev",$db);
							
							$result = mysql_query("select slug from wine ORDER BY slug DESC") or die("<br>WL Error - Dropdown:".mysql_error());
							while ($row = mysql_fetch_object($result)) {
								if(strlen($row->slug) >= 1) {
									echo '<option value="'.$row->slug.'">'.$row->slug.'</option>';
								}
							}
							
							if($_GET['slug']) {
								$slugResult = mysql_query("select * from wine WHERE slug='".$_GET['slug']."'") or die("<br>WL Error - Saved List:".mysql_error());
								while ($slugRow = mysql_fetch_object($slugResult)) {
									$saved['slug'] = $slugRow -> slug;
										$saved['articleurl'] = $slugRow -> articleurl;
									$saved['header'] = $slugRow -> header;
									$saved['deck'] = $slugRow -> deck;
									$saved['description'] = $slugRow -> description;									
									$saved['coordinator'] = $slugRow -> coordinator;
									
									$saved['shortname1'] = $slugRow -> shortname1;
									$saved['fullname1'] = $slugRow -> fullname1;
									$saved['desc1'] = $slugRow -> desc1;
									$saved['photo1'] = $slugRow -> photo1;
									$saved['credit1'] = $slugRow -> credit1;
									$saved['dist1'] = $slugRow -> dist1;
									$saved['disturl1'] = $slugRow -> disturl1;
									$saved['look1'] = $slugRow -> look1;
									$saved['lookurl1'] = $slugRow -> lookurl1;	
									
									$saved['rating1'] = $slugRow -> rating1;	
									$saved['price1'] = $slugRow -> price1;	
									$saved['proof1'] = $slugRow -> proof1;	
									$saved['volume1'] = $slugRow -> volume1;
									
									$saved['bestvalue1'] = $slugRow -> bestvalue1;	
									
									
									
									$saved['shortname2'] = $slugRow -> shortname2;
									$saved['fullname2'] = $slugRow -> fullname2;
									$saved['desc2'] = $slugRow -> desc2;
									$saved['photo2'] = $slugRow -> photo2;
									$saved['credit2'] = $slugRow -> credit2;
									$saved['dist2'] = $slugRow -> dist2;
									$saved['disturl2'] = $slugRow -> disturl2;
									$saved['look2'] = $slugRow -> look2;
									$saved['lookurl2'] = $slugRow -> lookurl2;		
									
									$saved['rating2'] = $slugRow -> rating2;	
									$saved['price2'] = $slugRow -> price2;	
									$saved['proof2'] = $slugRow -> proof2;	
									$saved['volume2'] = $slugRow -> volume2;
									$saved['bestvalue2'] = $slugRow -> bestvalue2;
									
									
									$saved['shortname3'] = $slugRow -> shortname3;
									$saved['fullname3'] = $slugRow -> fullname3;
									$saved['desc3'] = $slugRow -> desc3;
									$saved['photo3'] = $slugRow -> photo3;
									$saved['credit3'] = $slugRow -> credit3;
									$saved['dist3'] = $slugRow -> dist3;
									$saved['disturl3'] = $slugRow -> disturl3;
									$saved['look3'] = $slugRow -> look3;
									$saved['lookurl3'] = $slugRow -> lookurl3;	
									
									$saved['rating3'] = $slugRow -> rating3;	
									$saved['price3'] = $slugRow -> price3;	
									$saved['proof3'] = $slugRow -> proof3;	
									$saved['volume3'] = $slugRow -> volume3;
									$saved['bestvalue3'] = $slugRow -> bestvalue3;
									
									
									$saved['shortname4'] = $slugRow -> shortname4;
									$saved['fullname4'] = $slugRow -> fullname4;
									$saved['desc4'] = $slugRow -> desc4;
									$saved['photo4'] = $slugRow -> photo4;
									$saved['credit4'] = $slugRow -> credit4;
									$saved['dist4'] = $slugRow -> dist4;
									$saved['disturl4'] = $slugRow -> disturl4;
									$saved['look4'] = $slugRow -> look4;
									$saved['lookurl4'] = $slugRow -> lookurl4;	
									
									$saved['rating4'] = $slugRow -> rating4;	
									$saved['price4'] = $slugRow -> price4;	
									$saved['proof4'] = $slugRow -> proof4;	
									$saved['volume4'] = $slugRow -> volume4;
									
									$saved['bestvalue4'] = $slugRow -> bestvalue4;
									
									
									$saved['shortname5'] = $slugRow -> shortname5;
									$saved['fullname5'] = $slugRow -> fullname5;
									$saved['desc5'] = $slugRow -> desc5;
									$saved['photo5'] = $slugRow -> photo5;
									$saved['credit5'] = $slugRow -> credit5;
									$saved['dist5'] = $slugRow -> dist5;
									$saved['disturl5'] = $slugRow -> disturl5;
									$saved['look5'] = $slugRow -> look5;
									$saved['lookurl5'] = $slugRow -> lookurl5;	
									
									$saved['rating5'] = $slugRow -> rating5;	
									$saved['price5'] = $slugRow -> price5;	
									$saved['proof5'] = $slugRow -> proof5;	
									$saved['volume5'] = $slugRow -> volume5;
									$saved['bestvalue5'] = $slugRow -> bestvalue5;
									
									
									$saved['shortname6'] = $slugRow -> shortname6;
									$saved['fullname6'] = $slugRow -> fullname6;
									$saved['desc6'] = $slugRow -> desc6;
									$saved['photo6'] = $slugRow -> photo6;
									$saved['credit6'] = $slugRow -> credit6;
									$saved['dist6'] = $slugRow -> dist6;
									$saved['disturl6'] = $slugRow -> disturl6;
									$saved['look6'] = $slugRow -> look6;
									$saved['lookurl6'] = $slugRow -> lookurl6;	
									
									$saved['rating6'] = $slugRow -> rating6;	
									$saved['price6'] = $slugRow -> price6;	
									$saved['proof6'] = $slugRow -> proof6;	
									$saved['volume6'] = $slugRow -> volume6;
									
										$saved['bestvalue6'] = $slugRow -> bestvalue6;
									
									
									$saved['shortname7'] = $slugRow -> shortname7;
									$saved['fullname7'] = $slugRow -> fullname7;
									$saved['desc7'] = $slugRow -> desc7;
									$saved['photo7'] = $slugRow -> photo7;
									$saved['credit7'] = $slugRow -> credit7;
									$saved['dist7'] = $slugRow -> dist7;
									$saved['disturl7'] = $slugRow -> disturl7;
									$saved['look7'] = $slugRow -> look7;
									$saved['lookurl7'] = $slugRow -> lookurl7;	
									
									$saved['rating7'] = $slugRow -> rating7;	
									$saved['price7'] = $slugRow -> price7;	
									$saved['proof7'] = $slugRow -> proof7;	
									$saved['volume7'] = $slugRow -> volume7;
									$saved['bestvalue7'] = $slugRow -> bestvalue7;
									
									
									$saved['shortname8'] = $slugRow -> shortname8;
									$saved['fullname8'] = $slugRow -> fullname8;
									$saved['desc8'] = $slugRow -> desc8;
									$saved['photo8'] = $slugRow -> photo8;
									$saved['credit8'] = $slugRow -> credit8;
									$saved['dist8'] = $slugRow -> dist8;
									$saved['disturl8'] = $slugRow -> disturl8;
									$saved['look8'] = $slugRow -> look8;
									$saved['lookurl8'] = $slugRow -> lookurl8;	
									
									$saved['rating8'] = $slugRow -> rating8;	
									$saved['price8'] = $slugRow -> price8;	
									$saved['proof8'] = $slugRow -> proof8;	
									$saved['volume8'] = $slugRow -> volume8;
									$saved['bestvalue8'] = $slugRow -> bestvalue8;
									
									
									$saved['shortname9'] = $slugRow -> shortname9;
									$saved['fullname9'] = $slugRow -> fullname9;
									$saved['desc9'] = $slugRow -> desc9;
									$saved['photo9'] = $slugRow -> photo9;
									$saved['credit9'] = $slugRow -> credit9;
									$saved['dist9'] = $slugRow -> dist9;
									$saved['disturl9'] = $slugRow -> disturl9;
									$saved['look9'] = $slugRow -> look9;
									$saved['lookurl9'] = $slugRow -> lookurl9;	
									
									$saved['rating9'] = $slugRow -> rating9;	
									$saved['price9'] = $slugRow -> price9;	
									$saved['proof9'] = $slugRow -> proof9;	
									$saved['volume9'] = $slugRow -> volume9;
									$saved['bestvalue9'] = $slugRow -> bestvalue9;
									
									
									$saved['shortname10'] = $slugRow -> shortname10;
									$saved['fullname10'] = $slugRow -> fullname10;
									$saved['desc10'] = $slugRow -> desc10;
									$saved['photo10'] = $slugRow -> photo10;
									$saved['credit10'] = $slugRow -> credit10;
									$saved['dist10'] = $slugRow -> dist10;
									$saved['disturl10'] = $slugRow -> disturl10;
									$saved['look10'] = $slugRow -> look10;
									$saved['lookurl10'] = $slugRow -> lookurl10;	
									
									$saved['rating10'] = $slugRow -> rating10;	
									$saved['price10'] = $slugRow -> price10;	
									$saved['proof10'] = $slugRow -> proof10;	
									$saved['volume10'] = $slugRow -> volume10;						
									
									$saved['bestvalue10'] = $slugRow -> bestvalue10;
									
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
	
	
				<label>Article Slug</label></td>
            <td><input type="text" id="wlSlug" value="<? if($saved) { echo $saved['slug']; } ?>"  name="wl[slug]" class="short"></td>  
        </tr>	<tr>
            <td class="label">
	
	
				<label>Article URL (for email link)</label></td>
            <td><input type="text" id="wlarticleurl" onblur="if(this.value=='') { this.value='http://'; }" onfocus="if(this.value=='http://') { this.value=''; }" value="<? if($saved) { echo $saved['articleurl'.$i]; } else { echo "http://"; } ?>"  name="wl[articleurl]" class="short"></td>  
        </tr><tr>
            <td><label>Inline Header</label></td>
            <td><input type="text" value="<? if($saved) { echo $saved['header']; } else { echo "Tasting Report"; } ?>"  name="wl[header]"></td>
        </tr>

		<tr>
            <td><label>Inline Deck</label></td>
            <td><input type="text" value="<? if($saved) { echo $saved['deck']; } ?>"  name="wl[deck]"></td>
        </tr>

		<tr>
            <td><label>Main Description</label></td>
            <td>
	
				<textarea rows="3"  name="wl[description]"><? echo $saved['description']; ?></textarea>
			</td>
        </tr>

		<tr class="last">
            <td><label>Tasting Coordinator</label></td>
            <td><input type="text" value="<? if($saved) { echo $saved['coordinator']; } ?>"  name="wl[coordinator]"></td>
        </tr>

		</table>
		
<? for ($i=1; $i <= 10; $i++) { ?>
		<table class="subForm">



          <tr>
			<td rowspan="3" class="number">
				<? if($i==10) { echo "1<br>0"; } else { echo $i; } ?>
			</td>

			<td>
				<label>Short Name</label> <input type="text" value="<? if($saved) { echo $saved['shortname'.$i]; } ?>" class="short"  name="wl[shortname<? echo $i; ?>]"> &nbsp; &nbsp; 
				 <input type="checkbox" value="1" class="checkbox" name="wl[bestvalue<? echo $i; ?>]" <? if($saved['bestvalue'.$i]=="1") { echo ' checked="checked"'; } ?>/> Best Value<br>
				
				<label>Full Name</label> <input type="text" value="<? if($saved) { echo $saved['fullname'.$i]; } ?>"  name="wl[fullname<? echo $i; ?>]"><br>
				
				<label>Rating</label> 
				
				<select name="wl[rating<? echo $i; ?>]" size="1">
					<option></option>
					
					<option value="****"<? if($saved['rating'.$i]=="****") { echo ' selected="selected"'; } ?>>****</option>
					
					<option value="*** &frac12;"<? if($saved['rating'.$i]=="*** ½" || $saved['rating'.$i]=="*** 1/2" || $saved['rating'.$i]=="*** &frac12;") { echo ' selected="selected"'; } ?>>*** &frac12;</option>
					<option value="***"<? if($saved['rating'.$i]=="***") { echo ' selected="selected"'; } ?>>***</option>
					
					<option value="** &frac12;"<? if($saved['rating'.$i]=="** 1/2" || $saved['rating'.$i]=="** &frac12;" || $saved['rating'.$i]=="** ½") { echo ' selected="selected"'; } ?>>** &frac12;</option>
					<option value="**"<? if($saved['rating'.$i]=="**") { echo ' selected="selected"'; } ?>>**</option>
					
					<option value="* &frac12;"<? if($saved['rating'.$i]=="* 1/2" || $saved['rating'.$i]=="* &frac12;" || $saved['rating'.$i]=="* ½") { echo ' selected="selected"'; } ?>>* &frac12;</option>
					<option value="*"<? if($saved['rating'.$i]=="*") { echo ' selected="selected"'; } ?>>*</option>					
				</select>
				
				
						<br>
				
				<label>Price</label> $&nbsp;<input type="text" class="short short_price" value="<? if($saved) { echo $saved['price'.$i]; } ?>"  name="wl[price<? echo $i; ?>]"><br>
				<label>Alcohol Content</label> <input type="text" class="short" value="<? if($saved) { echo $saved['proof'.$i]; } ?>"  name="wl[proof<? echo $i; ?>]">&nbsp;%<br>
				
				<label>Volume</label> <input type="text" class="short" value="<? if($saved) { echo $saved['volume'.$i]; } ?>"  name="wl[volume<? echo $i; ?>]"><br>
				
				<label>Description</label> <textarea rows="3"  name="wl[desc<? echo $i; ?>]"><? if($saved) { echo $saved['desc'.$i]; } ?></textarea><br>
			</td>
          </tr> <tr>
 			<td>
				<label>Photo URL</label> <input type="text" value="<? if($saved) { echo $saved['photo'.$i]; } else { echo "http://"; } ?>" onblur="if(this.value=='') { this.value='http://'; }" onfocus="if(this.value=='http://') { this.value=''; }"  name="wl[photo<? echo $i; ?>]"><br>
				<label>Photo Credit</label> <input type="text" value="<? if($saved) { echo $saved['credit'.$i]; } ?>"  name="wl[credit<? echo $i; ?>]"><br>
			</td>
		  </tr><tr>
			<td>
				<label>Distrib. Name</label> <input type="text" value="<? if($saved) { echo $saved['dist'.$i]; } ?>"  name="wl[dist<? echo $i; ?>]"><br>
				
				<label>Distrib. URL</label> <input type="text" value="<? if($saved) { echo $saved['disturl'.$i]; } else { echo "http://"; } ?>" onblur="if(this.value=='') { this.value='http://'; }" onfocus="if(this.value=='http://') { this.value=''; }"  name="wl[disturl<? echo $i; ?>]"><br>
				
				<label>Look For... Name</label> <input type="text" value="<? if($saved) { echo $saved['look'.$i]; } ?>"  name="wl[look<? echo $i; ?>]"><br>
				
				<label>Look For... URL</label> <input type="text" value="<? if($saved) { echo $saved['lookurl'.$i]; } else { echo "http://"; } ?>" onblur="if(this.value=='') { this.value='http://'; }" onfocus="if(this.value=='http://') { this.value=''; }"  name="wl[lookurl<? echo $i; ?>]"><br>
			</td>
		  </tr>
		
		</table>
<? } ?>		







                  
          <div><br>
            <input type="submit" value="Save / Generate HTML" onclick="if(document.getElementById('wlSlug').value=='' || (document.getElementById('wlarticleurl').value=='' || document.getElementById('wlarticleurl').value=='http://')) { alert('The article slug & URL are required. The slug is used to save the wine list.'); return false; }">
          </div>
        </form>
        <br><br>
 
      
    </div> <!--main-->        
    </div> <!--page-->
</body>
</html>
