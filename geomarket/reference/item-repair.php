<div class="p-form__content">
    <style>
      .p-form .p-form__content .radio-button .wpcf7-list-item.first {
            display: inline-block;
        }
      small {
        font-size:0.9em; 
      }
    </style>
  <h3 class="c-heading -sideLine">修理・点検について</h3>
  <dl>
    <dt><label for="your-model-number">お問い合わせ区分<span class="req">必須</span></label></dt>
    <dd class="checkbox">
      <div class="check-block">
        <div>
          [checkbox repair-class use_label_element id:checkbox class:checkbox__item "点検調整" "修理" "検定" "校正証明書" "検査成績書" "その他"]
          <p><small>※複数選択可</small></p>
        </div>
      </div>
    </dd>
  </dl>
  <dl>
    <dt><label for="your-model-number">機器の種類<span class="req">必須</span></label></dt>
    <dd class="checkbox">
      <div class="check-block">
        <div>
          [checkbox repair-type use_label_element id:checkbox class:checkbox__item "トータルステーション" "レベル" "回転レーザ" "セオドライト" "墨出し器" "レーザスキャナ" "杭ナビ" "GNSS" "その他"]
          <p><small>※複数の場合について、詳細は「お問い合わせ内容」にご記入ください。</small></p>
        </div>
      </div>
    </dd>
  </dl>
  <dl class="radio-button">
    <dt><label for="contact-list">メーカー<span class="req">必須</span></label></dt>
    <dd>[radio repair-maker use_label_element class:radio-btns__item "TOPCON" "SOKKIA" "Leica" "PENTAX" "Nikon" "ニコントリンブル" "その他"]</dd>
  </dl>
  <dl>
    <dt><label for="machine-name">機種名</label></dt>
    <dd>
      [text machine-name]
      <p><small>※該当する機器の製品名・型名をご記入ください。</small></p>
    </dd>
  </dl>
  <dl>
    <dt><label for="remarks">お問い合わせ内容</label></dt>
    <dd>
      [textarea remarks id:remarks cols:33 rows:5]
      <p><small>※機器の状態、症状をご記入ください。</small></p>
    </dd>
  </dl>

  <div class="inner-form">
    <h3 class="c-heading -sideLine">お客様情報</h3>
    <dl>
      <dt><label for="your-know">当サイトを知ったきっかけ<span class="req">必須</span></label></dt>
      <dd class="checkbox">
        <div class="check-block">
          <div>

            [checkbox your-know use_label_element id:your-know class:checkbox__item "Yahoo!又はGoogle検索" "インターネット広告(バナー広告)" "ウェビナー" "メールマガジン" "調査士会会報" "ご紹介" "SNS(Facebook・Instagram・X)" "その他"]


          </div>
        </div>
      </dd>
    </dl>
    <dl>
      <dt><label for="your-name">お名前<span class="req">必須</span></label></dt>
      <dd>[text your-name]</dd>
    </dl>
    <dl>
      <dt><label for="your-kana">お名前（ふりがな）<span class="req">必須</span></label></dt>
      <dd>[text your-kana]</dd>
    </dl>
    <dl>
      <dt><label for="your-company">会社名</label></dt>
      <dd>[text your-company]</dd>
    </dl>
    <dl class="post-adress">
      <dt><label for="zip">郵便番号</label><span class="req">必須</span></dt>
      <dd>
        <div>

          〒[text zip id:zip placeholder "1234567"]
          <p class="text conf-hide">都道府県、住所が自動で入力されます。</p>

        </div>
      </dd>
    </dl>
    <dl>
      <dt><label for="pref">都道府県</label><span class="req">必須</span></dt>
      <dd>[text pref]</dd>
    </dl>
    <dl>
      <dt><label for="city">ご住所</label><span class="req">必須</span></dt>
      <dd>[text city]</dd>
    </dl>
    <dl>
      <dt><label for="your-tel">お電話番号<span class="req">必須</span></label></dt>
      <dd>[text your-tel]</dd>
    </dl>
    <dl>
      <dt><label for="your-email">メールアドレス</label><span class="req">必須</span></dt>
      <dd>[email your-email]</dd>
    </dl>
    <dl>
      <dt><label for="your-email-confirm">メールアドレス(確認用)</label><span class="req">必須</span></dt>
      <dd>[email your-email-confirm]</dd>
    </dl>
  </div>

  <div class="terms-box conf-hide">
    <div class="main-text">
      ※「<a href="/terms/" target="_blank" rel="noopener">ご利用規約</a>」「<a href="/privacypolicy/" target="_blank" rel="noopener">個人情報保護方針</a>」並びに下記の「個人情報の取り扱い」をお読みの上、ご送信ください。
      （本フォームでは個人情報と紐付けてWeb閲覧履歴を取得しています。）
    </div>
    <!-- p-form__privacybox -->
    <div class="p-form__privacybox">
      <dl>
        <dt>個人情報の取り扱いについて</dt>
        <dd>
          各種お問い合わせフォームよりご提供いただくお客様情報は、弊社の個人情報保護方針(<a href="/privacypolicy/" target="_blank" rel="noopener">https://geomarket.jp/privacypolicy/</a>)に従い厳重に管理すると共に以下の通り取り扱います。
          なお、弊社では、各業務の一部を委託先に委託し、当該委託先に対して必要な範囲で個人情報を委託する場合があります。この場合には、法令および弊社で定めた基準に従って適切な管理を行います。
          <dl>
            <dt>利用目的</dt>
            <dd>
              買取依頼品の事前査定、買取、商品の購入、レンタル、修理点検をはじめとする各サービスの運営のため / 本サービスに関する利用状況の調査および分析のため / お客様からの問い合わせに対し適切に対応するため /
              その他秋測個人情報保護方針ならびに前記各目的に密接に関連する目的のため
            </dd>
          </dl>
          <dl>
            <dt>第三者提供</dt>
            <dd>
              弊社との間で個人情報保護に関する約定をしている委託先等のビジネスパートナーに提供する場合があります。 / 本サービスに関する利用状況の調査および分析のため /
              お客様からの問い合わせに対し適切に対応するため / その他秋測個人情報保護方針ならびに前記各目的に密接に関連する目的のため
            </dd>
          </dl>
          <dl>
            <dt>連絡先</dt>
            <dd>
              個人情報お問合せ窓口<br>
              住所 : 〒010-1613 秋田県秋田市新屋朝日町1-12<br>
              TEL : 050-3645-2272<br>
              メールアドレス : akisoku@at45.aisantec.jp
              <ul>
                <li>・開示などに関するお問合せは 有限会社秋測 個人情報お問合せ窓口まで、お電話にて、ご連絡ください。</li>
                <li>・お電話でのお問合せの受付け時間は、平日10時～17時となります。（土日、祝祭日、弊社夏季休業日、冬季休業日は除きます。）</li>
                <li>
                  ・当ホームページ(<a href="/privacypolicy/" target="_blank" rel="noopener">https://geomarket.jp/privacypolicy/</a>)に、最新のお客様の個人情報の取り扱いや弊社の案内を掲示いたしておりますのでこちらを定期的にご確認いただきますようお願いいたします。
                </li>
              </ul>
            </dd>
          </dl>
        </dd>
      </dl>
    </div>
    <!-- p-form__privacybox -->
  </div>
  <div class="checkbox -bottom">[checkbox check use_label_element class:checkbox__item "個人情報の取り扱いに同意しました。"]</div>
  <div class="button-wrap">
    <div class="submit">[submit "確認画面へ"]</div>
  </div>
</div>
  [multistep multistep-836 first_step "https://geomarket.staging-square.com/repair/contact/confirm/"]