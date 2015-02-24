<style type="text/css" media="screen">
  /*These styles are part of the shell, they must be removed from here*/
  @import url(http://graphics8.nytimes.com/css/common/global.css);
  @import url(http://graphics8.nytimes.com/css/common/screen/general.css);
</style>


<!-- MARKETING MODULE -->
  <div style="border:solid #333;border-width:10px 1px;font-family:Arial,sans-serif;text-align:left; width:334px;background:#fff">
    
  <div style="padding:9px 14px;background:#fff"> <a style="float:left" href="http://nytimes.com/<?= $mm->logurl ?>" target="_new"><img src="http://graphics.nytimes.com/ads/marketing/mm07/nyt-logo.png" alt="The New York Times" width="151" height="26" border="0"></a> 
    <a style="float:right" href="http://nytimes.com/<?= $mm->vertical ?>/<?= $mm->gifurl ?>" target="_new"><img src="http://graphics.nytimes.com/ads/marketing/mm07/vertical_<?= $mm->vertical ?>.gif" alt="<?= $mm->cvertical ?>" width="145" height="23" border="0"></a> 
    <p style="font-family:Arial,sans-serif; clear:both; text-align:right; font-weight:bold; font-size:11px; margin:0;padding:0;">
        <a href="http://nytimes.com/<?= $mm->vertical ?>/<?= $mm->txturl ?>" target="_new">nytimes.com/<?= $mm->vertical ?></a>
      </p>
    </div>  

  <a href="<?= $mm->photourl ?>" target="_new"><img src="http://graphics.nytimes.com/ads/marketing/mm<?= $mm->year ?>/<?= $mm->vertical ?>_<?= $mm->month ?><?= $mm->day ?><?= $mm->year ?>.jpg" width="334" height="105" border="0"></a>
  <div style="padding:9px 14px;background:#fff">
      <h2 style="font-size:<?= $mm->headsize ?>px;margin:0"><a style="color:<?= $mm->headcolor ?>;" target="_new" href="<?= $mm->headurl ?>"><?= $mm->head ?></a></h2>
      <p style="font-size:11px;margin:3px 0;padding:0;font-family:Arial,sans-serif;">Also in <?= $mm->cvertical ?>:</p>
      <ul style="font-size:11px;margin:0" class="refer">
        <li style="font-size:11px"><a style="text-decoration:underline" target="_new" href="<?= $mm->l1url ?>"><?= $mm->l1 ?></a></li>
        <li style="font-size:11px"><a style="text-decoration:underline" target="_new" href="<?= $mm->l2url ?>"><?= $mm->l2 ?></a></li>
        <li style="font-size:11px"><a style="text-decoration:underline" target="_new" href="<?= $mm->l3url ?>"><?= $mm->l3 ?></a></li>
      </ul>
    </div>
    
  </div>
 <!-- /MARKETING MODULE -->
