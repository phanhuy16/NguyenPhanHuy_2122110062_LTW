<?php

use App\Models\Post;

$post = Post::where([['type', '=', 'post'], ['status', '=', 1]])->get()
?>


<section class="hdl-lastpost bg-main mt-3 py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h3>BÀI VIẾT MỚI</h3>
        <div class="row">
          <div class="col-md-6">
            <a href="post_detail.html">
              <img class="img-fluid" src="public/images/post/post-4.jpg" />
            </a>
            <h3 class="post-title fs-4 py-2">
              <a href="post_detail.html">
                Tieu đề bài viết mói nhất 1
              </a>
            </h3>
            <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài
              viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất
              1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
          </div>
          <div class="col-md-6">
            <?php foreach ($post as $value) : ?>
              <div class="row mb-3">
                <div class="col-md-4">
                  <a href="post_detail.html">
                    <img class="img-fluid" src="public/images/post/<?= $value->image; ?>" />
                  </a>
                </div>
                <div class="col-md-8">
                  <h3 class="post-title fs-5">
                    <a href="post_detail.html">
                      <?= $value->title; ?>
                    </a>
                  </h3>
                  <p><?= $value->detail; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-md-3">FACEBOOK</div>
    </div>
  </div>
</section>