<?php $works = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18); ?>
<div id="simple-slider" class="royalSlider rsDefault" style="width: 100%; height: 300px;">
  <?php
  foreach ($works as $work) {
    echo '<a class="rsImg" data-rsVideo="" href="images/works/'.$work.'.jpg">'.
      '<div class="rsTmb">'.
        '<h5></h5>'.
        '<p>by Atolle Italia</p>'.
      '</div>'.
    '</a>';
  }
  ?>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#simple-slider').royalSlider({
      imageScaleMode: 'fill',
      video: {
        autoHideControlNav: true
      }
    });
  });
</script>