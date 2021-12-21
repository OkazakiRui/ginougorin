<?php get_header(); ?>


<div id="wrapper" class="hfeed bg-gray-100">
<header class="shadow" id="header" role="banner">
  <img src="<?php echo get_theme_file_uri(); ?>/img/logo.svg" alt="tokyo tourのロゴです">
  <ul>
    <li><a href="#ninki">人気の観光名所</a></li>
    <li><a href="#contact">お問い合わせ</a></li>
  </ul>
</header>
<div id="container">
<main id="content" role="main">
  <div class="main-view">
    <img src="<?php echo get_theme_file_uri(); ?>/img/dummy.jpg" alt="aaaの写真です">
    <section class="text-gray-100">
      <h2>Tokyo Tour</h2>
      <p>東京観光の見どころスポットをエリア別にまとめてご紹介。<br>
      下町情緒が残る名所からおしゃれな最新スポットまで東京旅行や都内デートで外せない観光スポット・遊び場を完全網羅。<br>
      有名どころだけじゃない穴場スポットも押さえよう。</p>
    </section>
  </div>

  <div id="ninki" class="l-contents all3 text-gray-900">
    <h3>人気の観光名所</h3>
    <div class="items">
      <div class="item">
        <img src="<?php echo get_theme_file_uri(); ?>/img/dummy.jpg" alt="">
        <div class="tag-wrap">
          <p class="tag text-gray-50 bg-green-500">東京南部</p>
          <p class="tag text-gray-50 bg-blue-500">見る</p>
        </div>
        <h4>タイトル</h4>
        <p class="text">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
        <a href="/post" class="text-green-500">詳細を見る</a>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_file_uri(); ?>/img/dummy.jpg" alt="">
        <div class="tag-wrap">
          <p class="tag text-gray-50 bg-green-500">東京南部</p>
          <p class="tag text-gray-50 bg-blue-500">見る</p>
        </div>
        <h4>タイトル</h4>
        <p class="text">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
        <a href="/post" class="text-green-500">詳細を見る</a>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_file_uri(); ?>/img/dummy.jpg" alt="">
        <div class="tag-wrap">
          <p class="tag text-gray-50 bg-green-500">東京南部</p>
          <p class="tag text-gray-50 bg-blue-500">見る</p>
        </div>
        <h4>タイトル</h4>
        <p class="text">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
        <a href="/post" class="text-green-500">詳細を見る</a>
      </div>
    </div>
  </div>

  <div id="contact" class="l-contents contact text-gray-900">
    <h3>お問い合わせ</h3>
    <?php
    $page = get_page_by_path("contact");
    echo do_shortcode($page->post_content);
    ?>
  </div>
</main>
</div>
<footer id="footer" class="bg-gray-500" role="contentinfo">
  <img src="<?php echo get_theme_file_uri(); ?>/img/logo.svg" alt="tokyo tourのロゴです">
  <small>&copy;2021 Tokyo Tour</small>
  <?php
    // echo wp_link_pages();
    wp_link_pages();
  ?>
</footer>
</div>
<?php get_footer(); ?>