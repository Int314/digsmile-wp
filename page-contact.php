<?php get_header(); ?>
  <main>
    <!-- fv -->
    <div class="fv">
      <div class="kv-wrapper">
        <div class="copy-wrapper">
          <p class="main-copy">Contact</p>
          <p class="copy_jp">お問い合わせ</p>
        </div>
      </div>
    </div>
    <!-- //fv -->

    <!-- contact -->
    <div class="contact-wrapper">
      <div class="contact-inner">
        <p class="contact-lead">
          ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。
          送付いただいた内容を確認の上、担当者からご連絡させていただきます。
        </p>
        <form action="" class="">
          <ul class="form-list">
            <li class="form-item">
              <div class="form-item-title">
                <label for="">お問い合わせ種別</label>
                <span class="required">必須</span>
              </div>
              <ul class="inquiry-type-list">
                <li class="inquiry-type-item">
                  <input type="radio" class="radio-btn" name="inquiry-type" id="request" required checked>
                  <label for="request">制作依頼</label>
                </li>
                <li class="inquiry-type-item">
                  <input type="radio" class="radio-btn" name="inquiry-type" id="recruit">
                  <label for="recruit">採用</label>
                </li>
                <li class="inquiry-type-item">
                  <input type="radio" class="radio-btn" name="inquiry-type" id="ir">
                  <label for="ir">IR</label>
                </li>
                <li class="inquiry-type-item">
                  <input type="radio" class="radio-btn" name="inquiry-type" id="other">
                  <label for="other">その他</label>
                </li>
              </ul>
            </li>
            <li class="form-item">
              <div class="form-item-title">
                <label for="company-name">会社名・団体名</label>
              </div>
              <input type="text" name="company-name" id="company-name">
            </li>
            <li class="form-item">
              <div class="form-item-title">
                <label for="name">お名前</label>
                <span class="required">必須</span>
              </div>
              <input type="text" name="name" id="name" required>
            </li>
            <li class="form-item">
              <div class="form-item-title">
                <label for="email">メールアドレス</label>
                <span class="required">必須</span>
              </div>
              <input type="email" name="email" id="email" required>
            </li>
            <li class="form-item">
              <div class="form-item-title">
                <label for="tel">電話番号</label>
                <span class="required"></span>
              </div>
              <input type="tel" name="tel" id="tel">
            </li>
            <li class="form-item">
              <div class="form-item-title">
                <label for="detail">お問い合わせ内容</label>
                <span class="required">必須</span>
              </div>
              <textarea name="detail" id="detail" cols="30" rows="10" required></textarea>
            </li>
          </ul>
          <p class="privacy-policy-title">Privacy Policy</p>
          <div class="privacy-policy-wrapper">
            <p class="privacy-policy-detail">
              個人情報保護方針<br>
              株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、以下の基準に従って、適切な管理、保護に努めます。
            </p>
            <p class="privacy-policy-detail">
              1.個人情報の収集、利用<br>
              当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、収集した目的の範囲内で、個人情報を利用いたします。
            </p>
            <p class="privacy-policy-detail">
              2.個人情報の第三者への開示と提供<br>
              収集したお客様の個人情報は、法的な要請等によらない限り、お客様の承諾を得ない第三者に対して提供・開示はいたしません。<br>
              業務の都合上、業務委託先に個人情報を提供する場合は、機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、業務委託先が適切に個人情報を取り扱うように管理いたします。
            </p>
            <p class="privacy-policy-detail">
              3.個人情報の保護<br>
              当社では、個人情報の紛失、破壊、改ざん、不正アクセス、および漏えい等を防止するため、適切な対策を行います。
            </p>
            <p class="privacy-policy-detail">
              4.法令および関連規範の遵守<br>
              当社は、個人情報の取り扱いに関して、個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。
            </p>
            <p class="privacy-policy-detail">
              5.個人情報の開示・訂正・削除<br>
              当社では、個人情報の開示・訂正・削除等の依頼があった場合、情報提供者本人であることを確認の上、すみやかに対応いたします。
            </p>
            <p class="privacy-policy-detail">
              法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。
            </p>
            <p class="privacy-policy-detail">
              お問い合わせ窓口<br>
              当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。<br>
              株式会社ファイアープレイス<br>
              044-589-4333
            </p>
          </div>
          <div class="confirm">
            <input type="checkbox" name="checkbox" id="checkbox" class="checkbox" required>
            <label for="checkbox">個人情報の取り扱いについて同意のうえ送信します。</label>
          </div>
          <div class="btn-wrapper">
            <button type="submit" value="" class="submit-btn">送信</button>
          </div>
        </form>
      </div>
    </div>
    <!-- //contact -->

  </main>
  <?php get_footer(); ?>