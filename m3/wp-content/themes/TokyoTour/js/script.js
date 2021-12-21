const temp = (data) => (`
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
`)

fetch("/wp/wp-json/wp/v2/posts?categories=4")
  .then(res => res.json())
  .then(data => {
    data.forEach()
  })