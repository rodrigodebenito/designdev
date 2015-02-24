<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php

/**
 * Overview: Marketing Module Generator
 * @version $Id: template.php 232 2011-02-09 17:49:35Z jon $
 */

?>

<style type="text/css" media="screen">
  /*These styles are part of the shell, they must be removed from here*/
  @import url(http://graphics8.nytimes.com/css/common/global.css);
  @import url(http://graphics8.nytimes.com/css/common/screen/general.css);
</style>


<!-- MARKETING MODULE -->
<? if($mm->moduletype == "testa") { 
// TEST A


?>
<div style="border:solid #999;border-width:1px;font-family:Arial,sans-serif;text-align:left; width:334px;background:#fff;" class="clearfix wrap">
  <a href="<?= $mm->photourl ?>" target="_blank"><img src="<? if($mm->vertical == "social") { ?>http://graphics.nytimes.com/ads/marketing/mm10/social_static.jpg<? } else { ?>http://graphics.nytimes.com/ads/marketing/mm<?= $mm->year ?>/<?= $mm->vertical ?>_<?= $mm->month ?><?= $mm->day ?><?= $mm->year ?><? 
    if($mm->edition == "global") { ?>_g<? } ?>.jpg<? } ?>" width="334" height="154" border="0" alt=""></a> 
  <div style="padding:7px 9px 0;background:#fff">
      <h2 style="font-size:<?= $mm->headsize; ?>px;line-height:<?= $mm->headsize+2; ?>px; margin:0;padding:0 0 4px;"><a style="color:<?= $mm->headcolor; ?>;" target="_blank" href="<?= $mm->headurl ?>"><?= $mm->head ?></a></h2>
      <p style="margin:0 0 3px; padding:0;font-size: 11px;"><? if($mm->vertical == "general") { ?>Also on NYTimes.com<? } elseif ($mm->vertical == "social") { ?>MORE WAYS TO CONNECT <? } else { ?><a href="http://<? 
    if($mm->edition == "global") { ?>global.<? } ?>nytimes.com/<?= $mm->vertical ?>/<?= $mm->txturl ?>" target="_blank" style="font-size:11px;margin:3px 0;padding:0;font-family:Arial,sans-serif;  color:#000; text-transform:uppercase;">Also in<? 
    if($mm->edition == "global") { ?> Global<? } ?> <?= $mm->cvertical ?> &raquo;</a><? } ?></p>
      <ul style="font-size:12px;margin:0; padding-bottom: 10px;<? 
    if($mm->edition != "global") { ?> border-bottom:1px solid #ccc;<? } ?>" class="refer">
        <li style="font-size:12px"><a target="_blank" href="<?= $mm->l1url ?>" style="color: #004276"><?= $mm->l1 ?></a></li>
        <li style="font-size:12px"><a target="_blank" href="<?= $mm->l2url ?>" style="color: #004276"><?= $mm->l2 ?></a></li>
      </ul>
    </div>
 
 <? 
    if($mm->edition == "global") { ?>
<div style="padding:0; float:left; width:316px; background:#faf9dc"><a href="http://global.nytimes.com/" target="_blank"><img src="http://graphics8.nytimes.com/ads/marketing/mm09/verticalst/global_nytimes_iht.gif" alt="The New York Times | International Herald Tribune" width="334" height="29" border="0"></a></div>
 <? 
 } else { 
 
 ?><div style="padding:5px 9px; float:left; width:316px; background:#fff"> <a style="float:left" href="http://nytimes.com/<?= $mm->logurl ?>" target="_blank"><img src="http://graphics8.nytimes.com/ads/marketing/mm09/verticalst/nytimes.gif" alt="nytimes.com" width="116" height="18" border="0"></a><? 
   
   if( ($mm->vertical != "general") && ($mm->vertical != "social") ) { ?><a style="float:right" href="http://nytimes.com/<?= $mm->vertical ?>/<?= $mm->gifurl ?>" target="_blank"><img src="http://graphics8.nytimes.com/ads/marketing/mm09/verticalst/verticals_<?= $mm->vertical ?>.gif" alt="<?= $mm->cvertical ?>" width="120" height="18" border="0"></a><? } ?></div><? } ?><br clear="all">
</div>
 <? 
 
 
 
 } else { 
 // REGULAR
 
 
 ?>
<div style="border:solid #333;border-width:10px 1px;font-family:Arial,sans-serif;text-align:left; width:334px;background:#fff">
    
  <div style="padding:9px 14px;background:#fff"> <a style="float:left" href="http://nytimes.com/<?= $mm->logurl ?>" target="_blank"><img src="http://graphics.nytimes.com/ads/marketing/mm07/nyt-logo.png" alt="The New York Times" width="151" height="26" border="0"></a> 
    <? if($mm->vertical != "general") { ?><a style="float:right" href="http://nytimes.com/<?= $mm->vertical ?>/<?= $mm->gifurl ?>" target="_blank"><img src="http://graphics.nytimes.com/ads/marketing/mm07/vertical_<?= $mm->vertical ?>.gif" alt="<?= $mm->cvertical ?>" width="145" height="23" border="0"></a><? } ?>
    <p style="font-family:Arial,sans-serif; clear:both; text-align:right; font-weight:bold; font-size:11px; margin:0;padding:0;">
        <? if($mm->vertical != "general") { ?><a href="http://nytimes.com/<?= $mm->vertical ?>/<?= $mm->txturl ?>" target="_blank">nytimes.com/<?= $mm->vertical ?></a><? } ?>
    </p>
  </div>  

  <a href="<?= $mm->photourl ?>" target="_blank"><img src="http://graphics.nytimes.com/ads/marketing/mm<?= $mm->year ?>/<?= $mm->vertical ?>_<?= $mm->month ?><?= $mm->day ?><?= $mm->year ?>.jpg" width="334" height="105" border="0" alt=""></a>
  <div style="padding:9px 14px;background:#fff">
      <h2 style="font-size:<?= $mm->headsize ?>px;margin:0"><a style="color:<?= $mm->headcolor ?>;" target="_blank" href="<?= $mm->headurl ?>"><?= $mm->head ?></a></h2>
      <p style="font-size:11px;margin:3px 0;padding:0;font-family:Arial,sans-serif;"><? if($mm->vertical == "general") { ?>Also on NYTimes.com<? } else { ?>Also in <?= $mm->cvertical ?><? } ?>:</p>
      <ul style="font-size:11px;margin:0" class="refer">
        <li style="font-size:11px"><a style="text-decoration:underline" target="_blank" href="<?= $mm->l1url ?>" style="color: #004276"><?= $mm->l1 ?></a></li>
        <li style="font-size:11px"><a style="text-decoration:underline" target="_blank" href="<?= $mm->l2url ?>" style="color: #004276"><?= $mm->l2 ?></a></li>
        <li style="font-size:11px"><a style="text-decoration:underline" target="_blank" href="<?= $mm->l3url ?>" style="color: #004276"><?= $mm->l3 ?></a></li>
      </ul>
  </div>
    
</div>
 <? } ?>
 <!-- /MARKETING MODULE -->
