    <dl>
      <dt>利用場面</dt>
      <dd>
        <?php
        // フィールドの設定と値をロード
        $field = get_field_object('use');
        $uses = $field['value'];

        // ラベルを表示
        if ($uses) : ?>
          <ul class="use">
            <?php foreach ($uses as $use) : ?>
              <li class="use"><?php echo $field['choices'][$use]; ?></li>
            <?php endforeach; ?>
          <?php endif; ?>

      </dd>
    </dl>
