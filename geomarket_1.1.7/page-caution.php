<?php get_header(); ?>
<main>
  <div class="l-contents">

    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>


      <div class="l-container">
        <h2 class="c-heading -main">レンタルご利用上の注意点</h2>
      </div>
      <!-- /.l-container -->

      <div class="l-container -sizeS p-contact__rentalWrap">


        <div class="p-sub caution">

          <div class="js_tab">
            <ul class="p-main__cat js_tab_btn">
              <li class="p-main__catItem is-tab"><span>ご利用上の注意点</span></li>
              <li class="p-main__catItem"><span>保険について</span></li>
            </ul>

            <div class="js_tab_content l-container -sizeS">

              <!-- レンタル　ご利用上の注意点 -->
              <div class="is-tab">

                <div class="box box01">
                  <ul>
                    <li>・レンタル商品をご利用の際は取扱説明書をご確認頂いた上、正しくご使用ください。</li>
                    <li>・整備は万全を期していますが、輸送途上の故障も考えられますので、ご使用前（レンタル品到着時）に、必ず動作確認及び（可能な機種は）精度確認をお願いいたします。</li>
                    <li>・継続使用中も定期的に点検を行い、常に正常な機器としてご使用ください。</li>
                    <li>・測量機器は精密機器につき、取り扱いには十分ご注意ください。特に故障・破損につながる、振動・衝撃・ほこり・水分・湿気にご注意ください。</li>
                    <li>・取得されたデータ等の管理はお客様の責任でお願いします。返却時、内部メモリーに記憶されたデータは、次回のお客様にご利用いただくために、全て消去いたします。</li>
                    <li>・取り込みソフトの複製は固くお断りします。インストールされたソフト類は、返却時、必ず削除してください。</li>
                    <li>・測量機器のレンタルに関するよくある質問をまとめましたので、「<a href="<?php echo esc_url( home_url( ) ); ?>/faq/faqrental">よくある質問</a>」ページも併せてご確認ください。</li>
                  </ul>
                </div>


              </div>
              <!-- 測量機器レンタル　ご利用上の注意点 -->


              <!-- レンタル商品の保険について -->
              <div>
                <div class="box box02">
                  <p class="text">当社のレンタル商品は、万が一に備えて動産総合保険に加入していますので、安心してご利用いただけます。</p>

                  <dl>
                    <dt>保険の対象となる事故</dt>
                    <dd>
                      <ul>
                        <li>・火災、盗難等による破損や滅失</li>
                        <li>・台風、暴風雨、豪雨等による洪水や落雷による破損や滅失 </li>
                        <li>・高潮、土砂崩れ、融雪洪水等による破損や滅失 </li>
                        <li>・破裂、爆発による破損や滅失 </li>
                        <li>・その他、不測かつ突発的な事故であり保険会社の判断により対象と認められたもの </li>
                      </ul>
                    </dd>
                  </dl>

                  <dl>
                    <dt>保険の対象とならない事故</dt>
                    <dd>
                      <ul>
                        <li>・地震･噴火･又はこれらによって生じた津波による被害</li>
                        <li>・故意又は過失によるもの、虫食い･ねずみ食いによる損害</li>
                        <li>・ショート･スパーク等の電気的事故</li>
                        <li>・詐欺･横領･紛失･置忘れによる損害</li>
                        <li>・レンタル商品の欠陥･自然消滅･さび･変質･変色</li>
                      </ul>
                    </dd>
                  </dl>


                  <dl>
                    <dt>免責額</dt>
                    <dd>
                      <p>免責額とはお客様に一部負担していただく金額です。事故の内容、程度により異なります。</p>
                      <ul>
                        <li>・保険料は当社が負担します。</li>
                        <li>・輸送･移動中に生じた損害は対象外となります。 </li>
                      </ul>
                    </dd>
                  </dl>

                </div>


              </div>
              <!-- レンタル商品の保険について -->
            </div>
          </div>
          <!-- /.js_tab -->


        </div>
        <!-- /.p-sub tokusyou -->
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