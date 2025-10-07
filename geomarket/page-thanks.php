<?php get_header() ;?>
<main>
  <div class="l-contents">
    <section class="l-under -contact">
      <div class="l-container">

        <?php $url = $_SERVER['REQUEST_URI']; ?>
        <?php if(strstr($url,'rental')): ?>


        <h2 class="c-heading -main">レンタルのお申込みが完了しました。</h2>

        <div class="p-contact__description">
          この度はお申込みいただき誠にありがとうございます。<br>
          お申込み内容を確認後、お返事をさしあげますので少々お待ちくださいませ。<br>
          なお、自動返信メールを送信しております。自動返信メールをご確認いただけない場合は、<br>
          お申込みができていない可能性がございますので<br>
          お手数ですが、再度お申込みください。<br>
          今後とも測量機器総合マーケットGEOMARKETをよろしくお願いいたします。

          <!-- <a href="<?php echo esc_url( home_url( ) ); ?>">トップページへ</a> -->
        </div>

        <!-- 無料査定のお申し込み -->
        <?php elseif(strstr($url,'assessment')): ?>
        <h2 class="c-heading -main">無料査定のお申込みが完了しました。</h2>

        <div class="p-contact__description">
          この度はお申込みいただき誠にありがとうございます。<br>
          お申込み内容を確認後、お返事をさしあげますので少々お待ちくださいませ。<br>
          なお、自動返信メールを送信しております。自動返信メールをご確認いただけない場合は、<br>
          お申込みができていない可能性がございますので<br>
          お手数ですが、再度お申込みください。<br>
          今後とも測量機器総合マーケットGEOMARKETをよろしくお願いいたします。

          <!-- <a href="<?php echo esc_url( home_url( ) ); ?>">トップページへ</a> -->
        </div>

        <!-- 無料査定のお申し込み -->
        <?php elseif(strstr($url,'assessment-2')): ?>
        <h2 class="c-heading -main">無料査定のお申込みが完了しました。</h2>

        <div class="p-contact__description">
          この度はお申込みいただき誠にありがとうございます。<br>
          お申込み内容を確認後、お返事をさしあげますので少々お待ちくださいませ。<br>
          なお、自動返信メールを送信しております。自動返信メールをご確認いただけない場合は、<br>
          お申込みができていない可能性がございますので<br>
          お手数ですが、再度お申込みください。<br>
          今後とも測量機器総合マーケットGEOMARKETをよろしくお願いいたします。

          <!-- <a href="<?php echo esc_url( home_url( ) ); ?>">トップページへ</a> -->
        </div>


        <?php elseif(strstr($url,'purchase')): ?>

        <?php
        // 対象商品をsoldoutにする
        if( $_GET['post_id'] ){
          $id = $_GET['post_id'];
          update_field( 'select_goods', 'sould', $id );
        }
        ?>

        <h2 class="c-heading -main">商品ご購入のお問い合わせが完了しました。</h2>
        <div class="p-contact__description">
          この度はご購入のお問い合わせいただき誠にありがとうございます。<br>
          ご購入のお問い合わせ内容を確認後、お返事をさしあげますので少々お待ちくださいませ。<br>
          なお、自動返信メールを送信しております。自動返信メールをご確認いただけない場合は、<br>
          ご購入のお問い合わせができていない可能性がございますので<br>
          お手数ですが、再度ご購入のお問い合わせをください。<br>
          今後とも測量機器総合マーケットGEOMARKETをよろしくお願いいたします。

          <!-- <a href="<?php echo esc_url( home_url( ) ); ?>">トップページへ</a> -->
        </div>

        <?php else: ?>
        <!-- 通常の音合わせ -->
        <h2 class="c-heading -main">お問い合わせが完了しました。</h2>
        <div class="p-contact__description">
          この度はお問い合わせいただき誠にありがとうございます。<br>
          お問い合わせ内容を確認後、お返事をさしあげますので少々お待ちくださいませ。<br>
          なお、自動返信メールを送信しております。自動返信メールをご確認いただけない場合は、<br>
          お問い合わせができていない可能性がございますので<br>
          お手数ですが、再度お問い合わせください。<br>
          今後とも測量機器総合マーケットGEOMARKETをよろしくお願いいたします。

          <!-- <a href="<?php echo esc_url( home_url( ) ); ?>">トップページへ</a> -->
        </div>
        <?php endif; ?>

        <?php the_content( ); ?>
      </div>
      <!-- /  .l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>