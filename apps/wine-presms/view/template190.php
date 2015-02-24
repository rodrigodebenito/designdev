 <style type="text/css" media="screen">
  /*These styles are part of the sell, they must be removed from here*/
  @import url(http://graphics8.nytimes.com/css/common/global.css);
  @import url(http://graphics8.nytimes.com/css/common/screen/general.css);
</style>

<!-- MARKETING MODULE -->
<div style="border-style: solid; border-color: rgb(51, 51, 51); border-width: 10px 1px; font-family: Arial,sans-serif; text-align: left; width: 190px;background:#fff">
    
  <div style="padding: 6px 14px 12px 14px; text-align: right;background:#fff"> <a href="http://nytimes.com/<?= $mm->logurl ?>" target="_new"><img src="http://graphics.nytimes.com/ads/marketing/mm07/nyt-logo190.png" alt="The New York Times" border="0" height="20" width="100"></a> 
    <p style="margin: 0pt; text-align: right;"><a href="http://nytimes.com/<?= $mm->cvertical ?>/<?= $mm->gifurl ?>" target="_new"><img src="http://graphics.nytimes.com/ads/marketing/mm07/vertical_<?= $mm->vertical ?>.gif" alt="<?= $mm->cvertical ?>" width="145" height="23" border="0"></a></p>
    <p style="margin: 0pt; clear: both; text-align: right; font-weight: bold; font-size: 11px;">
        <a href="http://nytimes.com/<?= $mm->vertical ?>/<?= $mm->txturl ?>" target="_new">nytimes.com/<?= $mm->vertical ?></a>
      </p>
    </div>  

  <a href="<?= $mm->photourl ?>" target="_new"><img src="http://graphics.nytimes.com/ads/marketing/mm<?= $mm->year ?>/<?= $mm->vertical ?>_<?= $mm->month ?><?= $mm->day ?><?= $mm->year ?>_190.jpg" border="0" height="105" width="190"></a>
  <div style="padding: 9px 14px;background:#fff">
      <h2 style="margin: 0pt; font-size: <?= $mm->headsize ?>px;"><a style="color:<?= $mm->headcolor ?>;" target="_new" href="<?= $mm->headurl ?>"><?= $mm->head ?></a></h2>
      <p style="margin: 5px 0pt; font-size: 11px;">Also in <?= $mm->cvertical ?>:</p>
      <ul style="margin: 0pt; font-size: 11px;" class="refer">
        <li style="margin-top: 3px;font-size:11px"><a style="text-decoration:underline" target="_new" href="<?= $mm->l1url ?>"><?= $mm->l1 ?></a></li>
        <li style="margin-top: 3px;font-size:11px"><a style="text-decoration:underline" target="_new" href="<?= $mm->l2url ?>"><?= $mm->l2 ?></a></li>
        <li style="margin-top: 3px;font-size:11px"><a style="text-decoration:underline" target="_new" href="<?= $mm->l3url ?>"><?= $mm->l3 ?></a></li>
        </ul>
  </div>
    
</div>
<!-- /MARKETING MODULE -->