<?php
declare(strict_types=1);
$pageTitle = 'News | Tanui University';
$pageDescription = 'News and events from Tanui University.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / News</p>
        <p class="page-hero__eyebrow">Updates</p>
        <h1>News and events</h1>
        <p>Stories from teaching, research, library services, and student initiatives across the university.</p>
      </div>
    </section>
    <section class="page-body">
      <div class="container">
        <div class="news-grid">
          <article class="news-item">
            <div class="news-item__media">
              <img src="assets/images/news-thumb-1.png" alt="" data-img-fallback>
            </div>
            <time datetime="2026-10-20">20 Oct 2026</time>
            <h3>New machine learning pathway opens for undergraduates</h3>
            <p>Students can now follow a structured route from foundations through neural networks and applied projects.</p>
          </article>
          <article class="news-item">
            <div class="news-item__media">
              <img src="assets/images/news-thumb-2.png" alt="" data-img-fallback>
            </div>
            <time datetime="2026-09-28">28 Sep 2026</time>
            <h3>Campus library hours extended through exam season</h3>
            <p>Quiet floors and collaborative rooms stay open later to support revision and group study.</p>
          </article>
          <article class="news-item">
            <div class="news-item__media">
              <img src="assets/images/news-thumb-3.png" alt="" data-img-fallback>
            </div>
            <time datetime="2026-09-05">5 Sep 2026</time>
            <h3>E-Learning platform launches for enrolled students</h3>
            <p>Course materials, assignments, and announcements are available through the Tanui LMS.</p>
          </article>
        </div>
      </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>