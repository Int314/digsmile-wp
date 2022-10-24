<?php get_header(); ?>
  <main>
    <!-- fv -->
    <div class="fv">
      <div class="kv-wrapper">
        <div class="copy-wrapper">
          <p class="copy_jp">デザインで人を笑顔にする会社</p>
          <p class="copy_company">DIGSMILE INC.</p>
          <p class="main-copy">
            Design<br>
            For<br>
            Smile.
          </p>
        </div>
      </div>
    </div>
    <!-- //fv -->

    <!-- about -->
    <section class="section-wrapper">
      <div class="content-wrapper about-bg">
        <div class="about-content">
          <h2 class="section-title">About us</h2>
          <p class="section-text">
            DIGSMILEは、デザインで人を笑顔にする会社。<br>
            なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。<br>
            DIGSMILEの社名にはそんな想いが込められています。
          </p>
          <a href="./about/" class="link-btn">READ MORE</a>
        </div>
      </div>
    </section>
    <!-- //about -->

    <div class="gray-bg l-section-wrapper">
      <div class="flex-box l-content-wrapper">
        <!-- works -->
        <section class="s-section-wrapper">
          <div class="s-content-wrapper">
            <h2 class="section-title">Works</h2>
            <div class="works-img-wrapper">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/works-img.jpg'); ?>" alt="works" class="section-img">
            </div>
            <p class="section-text">DIGSMILEの制作実績を紹介します。</p>
            <a href="#!" class="link-btn">READ MORE</a>
          </div>
        </section>
        <!-- //works -->
        <!-- culture -->
        <section class="s-section-wrapper">
          <div class="s-content-wrapper">
            <h2 class="section-title">Culture</h2>
            <div class="culture-img-wrapper">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/culture-img.jpg'); ?>" alt="culture" class="section-img">
            </div>
            <p class="section-text">DIGSMILEの社内文化について紹介します。</p>
            <a href="#!" class="link-btn">READ MORE</a>
          </div>
        </section>
        <!-- //culture -->
      </div>
    </div>

    <!-- topics -->
    <section class="section-wrapper">
      <div class="content-wrapper">
        <h2 class="section-title">Latest Topics</h2>
        <ul class="topics-list">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <!-- 個々の投稿を出力する処理（ループ内）-->
              <li class="topics-item">
                <a href="<?php the_permalink(); ?>">
                  <time class="topics-date"><?php the_date(); ?></time>
                  <h3 class="topics-title"><?php the_title(); ?></h3>
                </a>
              </li>
            <?php endwhile; ?> 
          <?php endif; ?> 

        </ul>
        <div class="topics-link-btn-wrapper">
          <a href="#!" class="link-btn">READ MORE</a>
        </div>
      </div>
    </section>
    <!-- //topics -->

    <!-- contact -->
    <section class="section-wrapper gray-bg">
      <div class="content-wrapper flex-box">
        <div class="contact-content">
          <h2 class="section-title">Contact</h2>
          <p class="section-text">
            制作の依頼、取材の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。<br>
            まずはお気軽にご連絡ください。担当者から改めて返信いたします。
          </p>
          <a href="./contact/" class="link-btn">READ MORE</a>
        </div>
        <div class="contact-img-wrapper">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/contact-img.jpg'); ?>" alt="contact" class="contact-img">
        </div>
      </div>
    </section>
    <!-- //contact -->
  </main>
  <?php get_footer(); ?>