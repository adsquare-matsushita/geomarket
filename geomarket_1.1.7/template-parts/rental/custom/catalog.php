                 <dl>
                   <dt>カタログ</dt>
                   <dd>
                     <?php if (get_field('catalog_title01')) : ?>
                       <?php
                        $catalog_file01 = get_field('catalog_file01');
                        if ($catalog_file01) ?>
                       <a class="catalog" href="<?php echo $catalog_file01['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title01'); ?>.pdf</a>
                     <?php endif; ?>


                     <?php if (get_field('catalog_title02')) : ?>
                       <?php
                        $catalog_file02 = get_field('catalog_file02');
                        if ($catalog_file02) ?>
                       <a class="catalog" href="<?php echo $catalog_file02['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title02'); ?>.pdf</a>
                     <?php endif; ?>


                     <?php if (get_field('catalog_title03')) : ?>
                       <?php
                        $catalog_file03 = get_field('catalog_file03');
                        if ($catalog_file03) ?>
                       <a class="catalog" href="<?php echo $catalog_file03['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title03'); ?>.pdf</a>
                     <?php endif; ?>


                     <?php if (get_field('catalog_title04')) : ?>
                       <?php
                        $catalog_file04 = get_field('catalog_file04');
                        if ($catalog_file04) ?>
                       <a class="catalog" href="<?php echo $catalog_file04['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title04'); ?>.pdf</a>
                     <?php endif; ?>


                     <?php if (get_field('catalog_title05')) : ?>
                       <?php
                        $catalog_file05 = get_field('catalog_file05');
                        if ($catalog_file05) ?>
                       <a class="catalog" href="<?php echo $catalog_file05['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title05'); ?>.pdf</a>
                     <?php endif; ?>
                   </dd>
                 </dl>
