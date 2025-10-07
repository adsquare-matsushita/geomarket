     <span class="maker">
       <?php
        $maker = get_field('maker'); ?>
       <?php if ($maker == 'topcon') : ?>
         <?php echo "TOPCON" ?>
       <?php elseif ($maker == 'sokkia') : ?>
         <?php echo "SOKKIA" ?>
       <?php elseif ($maker == 'leica') : ?>
         <?php echo "Leica Geosystems" ?>
       <?php elseif ($maker == 'pentax') : ?>
         <?php echo "PENTAX" ?>
       <?php elseif ($maker == 'nikon') : ?>
         <?php echo "NIKON" ?>
       <?php elseif ($maker == 'trimble') : ?>
         <?php echo "ニコントリンブル" ?>
       <?php elseif ($maker == 'ti-asahi') : ?>
         <?php echo "TIアサヒ" ?>
       <?php elseif ($maker == 'other') : ?>
         <?php echo "その他" ?>
       <?php endif; ?>
     </span>
