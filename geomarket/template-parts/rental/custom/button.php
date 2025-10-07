 <div class="button-wrap -rental">
   <?php
    $goods = get_field('select_goods'); //カテゴリーの取得
    ?>
   <?php
    $option_id = get_the_ID();
    $link_url = esc_url(home_url('/rental/contact/?option_id=' . $option_id));
    ?>
   <a href="<?php echo $link_url; ?>" class="c-button -orange -main -arrow-white">無料お見積り・お申し込み</a>
 </div>
