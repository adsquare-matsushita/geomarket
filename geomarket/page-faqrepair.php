<?php get_header(); ?>
<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>


      <div class="l-container">
        <h2 class="c-heading -main">よくあるご質問</h2>

        <p class="p-sub__description">
          お客さまからよくお問い合わせいただく質問をまとめました。<br>
          ご利用方法など、いろいろな疑問に回答いたします。<br>
          こちらに記載のないご質問については、<a href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせフォーム</a>よりお気軽にお問い合わせください。
        </p>
      </div>
      <!-- /.l-container -->

      <div class="l-container -sizeS">

        <div class="js_tab">

          <ul class="p-news__cat js_tab_btn">
            <li class="p-news__catItem "><span>購入</span></li>
            <li class="p-news__catItem"><span>買取</span></li>
            <li class="p-news__catItem"><span>レンタル</span></li>
            <li class="p-news__catItem is-tab"><span>修理・点検</span></li>
            <!-- <li class="p-news__catItem"><span>保険・補償制度</span></li> -->
          </ul>

          <div class="js_tab_content">
            <!-- 購入 -->
            <div class="p-faq -sub ">
              <dl class="js-accordion">
                <dt><span>購入後の保証期間はどのくらいですか？</span></dt>
                <dd><span>保証は初期不良のみのご対応となります。納品後、約1週間を目安とさせて頂きます。</span>
                  <span class="note">※商品の説明欄に、「メーカー保証１年」などの表記がある場合はもちろん保証対象です。</span>
                </dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>初期不良の対応はどうなりますか？</span></dt>
                <dd><span>修理可能な商品でしたら、無償で修理をいたします。修理不可能な商品の場合はご相談の上、同等品と交換かご返金をさせて頂きます。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>送料はかかりますか？</span></dt>
                <dd><span>送料は無料です。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>領収書、請求書の発行はできますか？</span></dt>
                <dd><span>ご注文の際、備考欄に記載頂ければ、発行いたします。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>インボイス対応の請求書は発行できますか？</span></dt>
                <dd><span>ご注文の際、「お問い合わせ内容」欄に記載頂ければ、発行いたします。<br>
                    なお、インボイス対応に関する当サービスの対応については<a href="https://aisan-corp.com/1043/" target="_blank" rel="noopener">＜こちら＞</a>をご確認ください。</span>
                </dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>海外への発送は可能ですか？</span></dt>
                <dd><span>発送は国内のみになります。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>操作説明の対応はできますか？</span></dt>
                <dd><span>操作に関するお問い合わせは受けかねますので、取扱説明書を確認いただくか、各メーカーのコールセンターにお問い合わせ下さい。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>購入後のお支払いはいつまでにすればよいですか？</span></dt>
                <dd><span>ご注文確定日より１週間以内にお願いします。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>商品の発送はいつになりますか？</span></dt>
                <dd><span>商品発送前にご購入いただいた測量機器の出荷前点検を実施するため、ご到着まで最長で１週間程かかる場合がございます。</span></dd>
              </dl>

              <dl class="js-accordion" id="cancel">
                <dt><span>返品及びキャンセルについて</span></dt>
                <dd>返品は下記の場合のみ受け付けます。<br>
                  1.精度不良や破損があった場合　但し商品が到着より１週間以内。<br>
                  2.商品が写真と著しく違うとき、到着より１週間以内
                </dd>
              </dl>
            </div>


            <div class="p-faq -sub">
              <!-- 買取 -->
              <dl class="js-accordion">
                <dt><span>日本全国どこからでも買取していただけますか？</span></dt>
                <dd><span>はい。日本全国対応です（海外からの買取はお請けできません）。本サイトより仮査定を受けていただいたのち、GEOMARKET事務局まで送付してください。<br>詳細は「<a href="<?php echo esc_url(home_url()); ?>/reuse/assessment/">買取・購入の流れ：測量機買取までの流れ</a>」をご参照ください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>測量機器の下取りはしていただけるでしょうか？</span></dt>
                <dd><span>はい。買取のみならず、下取りもいたしております。詳しくは査定時にお尋ねください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>売却するか迷っています。買取査定金額に不満な場合、お断りできますか？</span></dt>
                <dd><span>最終的に売却するかどうかのご判断は、仮査定結果をお聞きしてからご判断されて構いません。<br>
                    仮査定額にご満足いただけない場合は、遠慮なくお断りいただいて問題ありません。<br>
                    買取依頼品が弊社に到着後の本査定では、買取依頼品の状態・付属品の有無を確認させていただき、問題がない場合は、仮査定の金額をそのまま本査定の金額としてお支払いさせていただきます。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>測量会社が倒産して、譲り受けたものですが査定可能でしょうか？</span></dt>
                <dd><span>はい。大丈夫です。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>未成年ですが、測量機器の買取はしていただけますか？</span></dt>
                <dd><span>古物営業法に基づき測量機器の買取は満20歳以上の方限定とさせていただいております。<br>諸事情によりやむを得ない20歳未満のお客様は、「保護者同意書・本人確認書類・保護者への電話確認」が必要となります。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>一点からでも買取してもらえますか？</span></dt>
                <dd><span>はい。もちろんご対応させていただきます。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>査定して値段がつかなかった場合どうなりますか?</span></dt>
                <dd><span>無料にてお引取させていただくか、お客様へご返却させていただきます。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>既に買い取ってもらった機器を返してもらうことはできますか?</span></dt>
                <dd><span>買取後の返品のお求めには応じることはできませんのでご了承ください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>身分証明書が無いと買取してもらえませんでしょうか？</span></dt>
                <dd><span>はい。古物営業法により、買取取引をする際、ご本人様確認が必要となります。<br>本人確認資料（身分証明書のコピーなど）の添付をお願いいたします。<br>ちなみに身分証明書として有効期限内のもののみお使いいただけます。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>本人確認資料としては、どのようなものが使えますか？</span></dt>
                <dd>
                  <span>
                    1. 運転免許証（両面の写し）<br>
                    2.健康保険証（両面の写し）<br>
                    3.旅券（パスポート）（住所・氏名・生年月日がわかるページの写し）<br>
                    4.学生証（住所・氏名・生年月日がわかる面の写し）<br>
                    5.住民票、住民票記載事項証明書または戸籍の附票の原本（個人）<br>
                    <span class="newLine note">
                      ※身分証明書は有効期限内のものに限ります。海外発行のものはご利用できません。<br>
                      ※身分証明書は、塗りつぶし等の加工・修正はせずにご提出ください。加工・修正されたものではお受けできません。<br>
                      ※法人様の場合は、登記事項証明書（登記簿謄本）の原本も必要です。
                    </span>
                  </span>
                </dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>身分証明書は私の物で、振込先口座は友人の口座でも大丈夫ですか？</span></dt>
                <dd><span>買取代金のお振込みは身分証明書の方ご本人の口座名義のみとさせていただきますのでご了承下さい。</span></dd>
              </dl>


              <dl class="js-accordion">
                <dt><span>法人なのですが身分証明書はどうなりますか？</span></dt>
                <dd><span>法人様の場合は、登記事項証明書（登記簿謄本）の原本と、ご担当者様の身分証明書が必要となります。</span></dd>
              </dl>


              <dl class="js-accordion">
                <dt><span>宅配便は土日祝日でも受け取りしていただけますか？</span></dt>
                <dd><span>平日の10時～17時までが営業時間となっておりますのでご了承ください。</span></dd>
              </dl>


              <dl class="js-accordion">
                <dt><span>運送中にもし破損などの事故があったら、どちらの責任になりますか？</span></dt>
                <dd><span>運搬中の事故は、運送会社の責任となり運送会社の保険により対応することになります。なお破損などが起こらないように梱包は十分に注意してください。</span></dd>
              </dl>
            </div>


            <div class="p-faq -sub">
              <!-- レンタル -->
              <dl class="js-accordion">
                <dt><span>測量機に三脚は付属していますか？</span></dt>
                <dd><span>オプションにてご用意しております。「<a href="<?php echo esc_url(home_url()); ?>/rental/contact/">レンタルのお申し込みフォーム</a>」にてご依頼ください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>測量機にプリズムは付属していますか？</span></dt>
                <dd><span>オプションにてご用意しております。「<a href="<?php echo esc_url(home_url()); ?>/rental/contact/">レンタルのお申し込みフォーム</a>」にてご依頼ください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>測量機に保険はついていますか？</span></dt>
                <dd><span>当社のレンタル商品は、万が一に備えて動産総合保険に加入していますので、安心してご利用いただけます。<br>
                    詳しくは「<a href="<?php echo esc_url(home_url()); ?>/rental/caution/">利用上のご注意：レンタル商品の保険について</a>」をご覧ください。</span>
                </dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>レンタル期間の短縮、延長は可能ですか？</span></dt>
                <dd><span>延長、短縮は、お電話にて承ることが可能です。レンタル期間を変更される場合は、レンタル期間が満了する１週間前までに、ご連絡ください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>返却は、どのようにしたらいいのですか？</span></dt>
                <dd><span>機器と一緒に、着払いの返送用伝票を同梱しております。<br>
                    返却時には、そちらを貼り付けていただき運送業者に引き渡してください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>測量機の使い方について教えてほしいのですが、どうしたらいいのですか？</span></dt>
                <dd><span>別途有償にて承ります。<br>商品によってはメーカーのコールセンターに確認いただく場合もございます。</span></dd>
              </dl>
            </div>

            <div class="p-faq -sub is-tab">
              <!-- 修理点検 -->
              <dl class="js-accordion">
                <dt><span>メーカーや他社で修理できなかった機械も修理できるのでしょうか？</span></dt>
                <dd><span>可能な限り対応いたします。故障内容により、お受けできないこともございます。<br>また、部品交換や修理が必要のない点検調整等は基本的には可能ですので、一度ご相談ください。
                  </span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>機械を送付する箱がありません。</span></dt>
                <dd><span>機械送付用の通い箱(送料有料)のご用意もあります。ご利用の際にはお問合せください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>校正証明書の発行は可能ですか？</span></dt>
                <dd><span>日本測量機器工業会(JSIMA) の書式で発行が可能です。料金につきましてはお問合せください。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>点検調整の日数はどのくらいですか？</span></dt>
                <dd><span>着手後、中2日で発送致します。修理が発生した場合は別途ご連絡いたします。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>代替機の貸し出しは可能ですか？</span></dt>
                <dd><span>有料にて貸出可能です。必要な際には、<a href="<?php echo esc_url(home_url()); ?>/contact/">こちら</a>よりお問合せください。</span></dd>
              </dl>
            </div>


            <!-- 修理点検 -->
            <!-- <div class="p-faq -sub">

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>

              <dl class="js-accordion">
                <dt><span>保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる保険・補償制度のよくある質問を入れる。</span></dt>
                <dd><span>レンタルのよくある質問を入れるレンタルのよくある質問を入れるレンタルのよくある質問を入れる。</span></dd>
              </dl>
            </div> -->

            <!-- /.js_tab_content -->
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
