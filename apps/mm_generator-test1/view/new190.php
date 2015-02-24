<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>NYTimes.com Marketing Module Generator for Newsletters</title>
  <link rel="stylesheet" href="/apps/mm_generator-test1/css/newsletter_landing_generator.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>

<body>
    
  <div id="page">
    <div id="header">
      <h1><a href="index190.php">NYTimes.com Marketing Module Generator for Newsletters</a></h1>
      <br><a href="./index.php"><label>or Regular Version</label></a>
    </div>
    <div id="main">
    
        <form action="generated_page190.php" method="post" accept-charset="utf-8">
          <table>
          <tr>
            <td><label>Vertical</label></td>
            <td colspan="2">
            	<SELECT name="mm[vertical]">
				<OPTION VALUE="">Choose a vertical...
				<OPTION VALUE="autos">autos
				<OPTION VALUE="business">business
				<OPTION VALUE="health">health
				<OPTION VALUE="jobs">jobs
				<OPTION VALUE="movies">movies
				<OPTION VALUE="opinion">opinion
				<OPTION VALUE="politics">politics
				<OPTION VALUE="realestate">realestate
				<OPTION VALUE="sports">sports
				<OPTION VALUE="tech">tech
				<OPTION VALUE="theater">theater
				<OPTION VALUE="travel">travel
				<OPTION VALUE="video">video
				<OPTION VALUE="tmagazine">tmagazine
				<OPTION VALUE="magazine">magazine
				</SELECT>
				<SELECT name="mm[cvertical]">
				<OPTION VALUE="">Match with its label...
				<OPTION VALUE="Autos">Autos
				<OPTION VALUE="Business">Business
				<OPTION VALUE="Health">Health
				<OPTION VALUE="Jobs">Jobs
				<OPTION VALUE="Movies">Movies
				<OPTION VALUE="Opinion">Opinion
				<OPTION VALUE="Politics">Politics
				<OPTION VALUE="Real Estate">Real Estate
				<OPTION VALUE="Sports">Sports
				<OPTION VALUE="Tech">Tech
				<OPTION VALUE="Theater">Theater
				<OPTION VALUE="Travel">Travel
				<OPTION VALUE="Video">Video
				<OPTION VALUE="T Magazine">T Magazine
				<OPTION VALUE="the Magazine">NYT Magazine
				</SELECT>
            </td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td colspan="2">
                <SELECT name="mm[month]">
				<OPTION VALUE="">Month
				<OPTION VALUE="01"<? if(date('m')=='01') { echo ' selected="selected"'; } ?>>January
				<OPTION VALUE="02"<? if(date('m')=='02') { echo ' selected="selected"'; } ?>>February
				<OPTION VALUE="03"<? if(date('m')=='03') { echo ' selected="selected"'; } ?>>March
				<OPTION VALUE="04"<? if(date('m')=='04') { echo ' selected="selected"'; } ?>>April
				<OPTION VALUE="05"<? if(date('m')=='05') { echo ' selected="selected"'; } ?>>May
				<OPTION VALUE="06"<? if(date('m')=='06') { echo ' selected="selected"'; } ?>>June
				<OPTION VALUE="07"<? if(date('m')=='07') { echo ' selected="selected"'; } ?>>July
				<OPTION VALUE="08"<? if(date('m')=='08') { echo ' selected="selected"'; } ?>>August
				<OPTION VALUE="09"<? if(date('m')=='09') { echo ' selected="selected"'; } ?>>September
				<OPTION VALUE="10"<? if(date('m')=='10') { echo ' selected="selected"'; } ?>>October
				<OPTION VALUE="11"<? if(date('m')=='11') { echo ' selected="selected"'; } ?>>November
				<OPTION VALUE="12"<? if(date('m')=='12') { echo ' selected="selected"'; } ?>>December
				</SELECT>
                <SELECT name="mm[day]">
				<OPTION VALUE="">Day
				<OPTION VALUE="01"<? if(date('d')=='01') { echo ' selected="selected"'; } ?>>01
				<OPTION VALUE="02"<? if(date('d')=='02') { echo ' selected="selected"'; } ?>>02
				<OPTION VALUE="03"<? if(date('d')=='03') { echo ' selected="selected"'; } ?>>03
				<OPTION VALUE="04"<? if(date('d')=='04') { echo ' selected="selected"'; } ?>>04
				<OPTION VALUE="05"<? if(date('d')=='05') { echo ' selected="selected"'; } ?>>05
				<OPTION VALUE="06"<? if(date('d')=='06') { echo ' selected="selected"'; } ?>>06
				<OPTION VALUE="07"<? if(date('d')=='07') { echo ' selected="selected"'; } ?>>07
				<OPTION VALUE="08"<? if(date('d')=='08') { echo ' selected="selected"'; } ?>>08
				<OPTION VALUE="09"<? if(date('d')=='09') { echo ' selected="selected"'; } ?>>09
				<OPTION VALUE="10"<? if(date('d')=='10') { echo ' selected="selected"'; } ?>>10
				<OPTION VALUE="11"<? if(date('d')=='11') { echo ' selected="selected"'; } ?>>11
				<OPTION VALUE="12"<? if(date('d')=='12') { echo ' selected="selected"'; } ?>>12
				<OPTION VALUE="13"<? if(date('d')=='13') { echo ' selected="selected"'; } ?>>13
				<OPTION VALUE="14"<? if(date('d')=='14') { echo ' selected="selected"'; } ?>>14
				<OPTION VALUE="15"<? if(date('d')=='15') { echo ' selected="selected"'; } ?>>15
				<OPTION VALUE="16"<? if(date('d')=='16') { echo ' selected="selected"'; } ?>>16
				<OPTION VALUE="17"<? if(date('d')=='17') { echo ' selected="selected"'; } ?>>17
				<OPTION VALUE="18"<? if(date('d')=='18') { echo ' selected="selected"'; } ?>>18
				<OPTION VALUE="19"<? if(date('d')=='19') { echo ' selected="selected"'; } ?>>19
				<OPTION VALUE="20"<? if(date('d')=='20') { echo ' selected="selected"'; } ?>>20
				<OPTION VALUE="21"<? if(date('d')=='21') { echo ' selected="selected"'; } ?>>21
				<OPTION VALUE="22"<? if(date('d')=='22') { echo ' selected="selected"'; } ?>>22
				<OPTION VALUE="23"<? if(date('d')=='23') { echo ' selected="selected"'; } ?>>23
				<OPTION VALUE="24"<? if(date('d')=='24') { echo ' selected="selected"'; } ?>>24
				<OPTION VALUE="25"<? if(date('d')=='25') { echo ' selected="selected"'; } ?>>25
				<OPTION VALUE="26"<? if(date('d')=='26') { echo ' selected="selected"'; } ?>>26
				<OPTION VALUE="27"<? if(date('d')=='27') { echo ' selected="selected"'; } ?>>27
				<OPTION VALUE="28"<? if(date('d')=='28') { echo ' selected="selected"'; } ?>>28
				<OPTION VALUE="29"<? if(date('d')=='29') { echo ' selected="selected"'; } ?>>29
				<OPTION VALUE="30"<? if(date('d')=='30') { echo ' selected="selected"'; } ?>>30
				<OPTION VALUE="31"<? if(date('d')=='31') { echo ' selected="selected"'; } ?>>31
				</SELECT>
				<SELECT name="mm[year]">
				<OPTION VALUE="">Year
				<OPTION VALUE="08"<? if(date('y')=='08') { echo ' selected="selected"'; } ?>>2008
				<OPTION VALUE="09"<? if(date('y')=='09') { echo ' selected="selected"'; } ?>>2009
				<OPTION VALUE="10"<? if(date('y')=='10') { echo ' selected="selected"'; } ?>>2010
				<OPTION VALUE="11"<? if(date('y')=='11') { echo ' selected="selected"'; } ?>>2011
				<OPTION VALUE="12"<? if(date('y')=='12') { echo ' selected="selected"'; } ?>>2012

				</SELECT>
			</td>
			</tr><tr>
            <td><label>NYT Logo</label></td>
            <td colspan="2"><input type="text" value="" name="mm[logurl]"></td>
            </tr><tr>
            <td style="border:0;"><label>Vertical GIF</label></td>
            <td colspan="2" style="border:0;"><input type="text" value="" name="mm[gifurl]"></td>  
            </tr><tr>
            <td style="border:0;"><label>Vertical URL</label></td>
            <td colspan="2" style="border:0;"><input type="text" value="" name="mm[txturl]"></td>
          </tr>
          
          <tr>
            <td><label>Photo</label></td>
            <td colspan="2"><input type="text" value="" name="mm[photourl]"></td>
          </tr>          
          <tr>
            <td><label>Headline</label></td>
            <td><input type="text" value="" name="mm[headurl]"></td>
            <td><input type="text" value="Text" name="mm[head]"></td>
          </tr>
          <tr>
            <td><label>Link 1</label></td>
            <td><input type="text" value="" name="mm[l1url]"></td>
            <td><input type="text" value="Text" name="mm[l1]"></td>
          </tr>      
          <tr>
            <td><label>Link 2</label></td>
            <td><input type="text" value="" name="mm[l2url]"></td>
            <td><input type="text" value="Text" name="mm[l2]"></td>
          </tr>      
          <tr>
            <td><label>Link 3</label></td>
            <td><input type="text" value="" name="mm[l3url]"></td>
            <td><input type="text" value="Text" name="mm[l3]"></td>
          </tr>         
          <tr>
            <td><label>Headline specs</label></td>
            <td><input type="text" value="15" name="mm[headsize]" style="width:100px;" size="5"> <input type="text" value="#ff0000" name="mm[headcolor]" style="width:100px;" size="5"> <a href="images/colors.png" target="new">Hex Colors</a></td>
            <td> </td>
          </tr>
          </table>  
                  
          <div><br>
            <input type="submit" value="Generate marketing module">
          </div>
        </form>
        <br><br>
        
            
      <div class="box">
        <h2>Tips</h2>
          UTF codes, NYT style guide, and character guide goes here.
      </div>
      
    </div> <!--main-->        
    </div> <!--page-->
</body>
</html>
