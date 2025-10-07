        <div class="pagenation">
          <?php
          // ページネーション
          $args = [
            'format' => '?paged=%#%',
            'prev_text' => '<span class="screen-reader-text">前へ</span>',
            'next_text' => '<span class="screen-reader-text">次へ</span>',
            'mid_size' =>  '2'
          ];
          the_posts_pagination($args);
          ?>
        </div>
