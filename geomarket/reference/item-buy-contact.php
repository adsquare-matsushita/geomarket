<div class="p-form__content">
  <div class="p-single__under-item screen-reader-text">
    <div class="p-single__under-itemDetail">
      <h3 class="c-heading">[text* title size:60 value="{post_title}"]</h3>
      <div class="p-single__under-itemDetailInner">
        <dl>
          <dt>商品コード</dt>
          <dd>[text* kiki-code size:60 value="{code}"]</dd>
        </dl>
        <dl>
          <dt>機種モデル</dt>
          <dd>[text* kiki-model size:60 value="{model}"]</dd>
        </dl>
        <dl>
          <dt>メーカー</dt>
          <dd>[text* kiki-maker size:60 value="{maker}"]</dd>
        </dl>
        <dl>
          <dt>商品価格</dt>
          <dd>[text* machine-price size:60 class:price value="{nomal_price}"]円(税込)</dd>
        </dl>
      </div>
    </div>
  </div>
  <h3 class="c-heading -sideLine">お客様情報</h3>
  <div class="p-form__content">
    <dl>
      <dt><label for="your-know">当サイトを知ったきっかけ<span class="req">必須</span></label></dt>
      <dd class="checkbox">
        <div class="check-block">
          <div>
            [checkbox* your-know use_label_element "Yahoo!又はGoogle検索" "インターネット広告(バナー広告)" "ウェビナー" "メールマガジン" "調査士会会報" "ご紹介" "SNS(Facebook・Instagram・X)" "その他"]
          </div>
        </div>
      </dd>
    </dl>
    <dl>
      <dt><label for="your-name">お名前<span class="req">必須</span></label></dt>
      <dd>[text* your-name id:your-name]</dd>
    </dl>
    <dl>
      <dt><label for="your-kana">お名前（ふりがな）<span class="req">必須</span></label></dt>
      <dd>[text* your-kana id:your-kana]</dd>
    </dl>
    <dl>
      <dt><label for="your-company">会社名</label></dt>
      <dd>[text your-company id:your-company]</dd>
    </dl>
    <dl class="post-adress">
      <dt><label for="zip">郵便番号</label><span class="req">必須</span></dt>
      <dd>
        <div>
          〒[text* zip id:zip placeholder "1234567"]
          <p class="text conf-hide">都道府県、住所が自動で入力されます。</p>
        </div>
      </dd>
    </dl>
    <dl>
      <dt><label for="pref">都道府県</label><span class="req">必須</span></dt>
      <dd>[text* pref id:pref]</dd>
    </dl>
    <dl>
      <dt><label for="city">ご住所</label><span class="req">必須</span></dt>
      <dd>[text* city id:city]</dd>
    </dl>
    <dl>
      <dt><label for="your-tel">お電話番号</label><span class="req">必須</span></dt>
      <dd>[text* your-tel id:your-tel]</dd>
    </dl>
    <dl>
      <dt><label for="your-email">メールアドレス</label><span class="req">必須</span></dt>
      <dd>[email* your-email id:your-email]</dd>
    </dl>
    <dl>
      <dt><label for="your-email-confirm">メールアドレス(確認用)</label><span class="req">必須</span></dt>
      <dd>[email* your-email-confirm id:your-email-confirm]</dd>
    </dl>
    <dl class="radio-button">
      <dt>ご希望のご連絡方法<span class="req">必須</span></dt>
      <dd>[radio* radio use_label_element default:1 "メール" "電話" "どちらでも"]</dd>
    </dl>
    <dl>
      <dt><label for="remarks">お問い合わせ内容</label></dt>
      <dd>[textarea remarks id:remarks cols:33 rows:5]</dd>
    </dl>
  </div>
  <div class="terms-box conf-hide">
    <div class="main-text">※「<a href="/terms/" target="_blank" rel="noopener">ご利用規約</a>」「<a href="/privacypolicy/" target="_blank" rel="noopener">個人情報保護方針</a>」並びに下記の「個人情報の取り扱い」をお読みの上、ご送信ください。
      （本フォームでは個人情報と紐付けてWeb閲覧履歴を取得しています。）</div>
    <div class="p-form__privacybox">
      <dl>
        <dt>個人情報の取り扱いについて</dt>
        <dd>
          本お買い上げフォームにご提供いただくお客様情報は、弊社の個人情報保護方針(<a href="/privacypolicy/" target="_blank" rel="noopener">http://localhost:10058/privacypolicy/</a>)に従い厳重に管理すると共に以下の通り取り扱います。
          なお、弊社では、各業務の一部を委託先に委託し、当該委託先に対して必要な範囲で個人情報を委託する場合があります。この場合には、法令および弊社で定めた基準に従って適切な管理を行います。
          <dl>
            <dt>利用目的</dt>
            <dd>
              買取依頼品の事前査定、買取、本商品の購入をはじめとする本サービスの運営のため / 本サービスに関する利用状況の調査および分析のため / お客様からの問い合わせに対し適切に対応するため /
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
              TEL : 018-863-7640<br>
              メールアドレス : akisoku@at45.aisantec.jp
              <ul>
                <li>・開示などに関するお問合せは 有限会社秋測 個人情報お問合せ窓口まで、お電話にて、ご連絡ください。</li>
                <li>・お電話でのお問合せの受付け時間は、平日10時～17時となります。（土日、祝祭日、弊社夏季休業日、冬季休業日は除きます。）</li>
                <li>
                  ・当ホームページ(<a href="/privacypolicy/" target="_blank" rel="noopener">http://localhost:10058/privacypolicy/</a>)に、最新のお客様の個人情報の取り扱いや弊社の案内を掲示いたしておりますのでこちらを定期的にご確認いただきますようお願いいたします。
                </li>
              </ul>
            </dd>
          </dl>
        </dd>
      </dl>
    </div>
  </div>
  <div class="checkbox -bottom">[acceptance check class:checkbox__item]個人情報の取り扱いに同意しました。[/acceptance]</div>
  <div class="button-wrap">
    [submit "戻る" class:c-button -gray -main -arrow-gray]
    [submit "確認画面へ" class:c-button -orange -main -arrow-white]
    [submit "送信する" class:c-button -orange -main -arrow-white]
  </div>
</div>