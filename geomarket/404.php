<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
      <div class="l-container">

        <div class="p-sub -not404">
          <h2>
            404 NOT FOUND
            <em>お探しのページが見つかりませんでした。</em>
            <span>アクセスされたページが削除されたか、<br class="pc-hide"><span>URL</span>が間違っている可能性があります。</span>
          </h2>

          <div class="form404">
            <p>検索フォームから検索すると見つかるかもしれません。</p>
            <div class="form">
              <?php get_search_form(); ?>
            </div>
          </div>
        </div>

      </div>
      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>


<?php get_footer(); ?>