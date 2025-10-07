<?php
/**
 * Template Name: 商品のご購入（完了）
 */
get_header();
?>

<?php
  // 対象商品をsoldoutにする
  if( $_GET['post_id'] ){
    $id = $_GET['post_id'];
    update_field( 'select_goods', 'sould', $id );
  }
?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="l-container">

        <h2 class="c-heading -main">商品ご購入のお問い合わせが完了しました。</h2>
        <div class="p-contact__description">
          この度はご購入のお問い合わせいただき誠にありがとうございます。<br>
          ご購入のお問い合わせ内容を確認後、お返事をさしあげますので少々お待ちくださいませ。<br>
          なお、自動返信メールを送信しております。自動返信メールをご確認いただけない場合は、<br>
          ご購入のお問い合わせができていない可能性がございますので<br>
          お手数ですが、再度ご購入のお問い合わせをください。<br>
          今後とも測量機器総合マーケットGEOMARKETをよろしくお願いいたします。

          <a href="<?php echo esc_url( home_url( ) ); ?>">トップページへ</a>
        </div>


      </div>
      <!-- /  .l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>


<?php get_footer(); ?>