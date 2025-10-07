  <dl class="cat">
    <dt>商品カテゴリー</dt>
    <dd>
      <?php if ($terms = get_the_terms($post->ID, 'rental-cat')) :  ?>
        <?php foreach ($terms as $term) : ?>
          <p><?php echo esc_html($term->name); ?></p>
        <?php endforeach; ?>
      <?php endif; ?>
    </dd>
  </dl>
