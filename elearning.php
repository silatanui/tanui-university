<?php
declare(strict_types=1);
$pageTitle = 'E-Learning Demo | Tanui University';
$pageDescription = 'Watch a short walkthrough of the Tanui University Moodle E-Learning platform.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / E-Learning</p>
      <p class="page-hero__eyebrow">Platform demo</p>
      <h1>E-Learning preview</h1>
      <p>From the university website to student login and course content. Watch why we use a video here instead of hosting the full LMS on shared hosting.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <div class="demo-video">
        <video
          controls
          playsinline
          preload="metadata"
          poster="<?= h(media('video/elearning-poster.png')) ?>"
          aria-label="Tanui University E-Learning platform demo video"
        >
          <source src="<?= h(media('video/tanui-lms-demo.mp4')) ?>" type="video/mp4">
          Your browser does not support embedded video.
        </video>
      </div>

      <div class="prose prose--wide" style="margin-top: 2rem;">
        <h2>Why a video instead of a live LMS?</h2>
        <p>A full Moodle installation needs a lot of hosting space. Shared cPanel plans are limited, so this portfolio site uses a short walkthrough instead of hosting the whole application online. The live platform can still be shown on request.</p>
        <h2>What this demo shows</h2>
        <ul>
          <li>Tanui University marketing site as the starting point</li>
          <li>Student login on the branded E-Learning platform</li>
          <li>Course catalogue and Machine Learning weekly content</li>
        </ul>
        <ul class="link-list">
          <li><a href="academics.php">Browse academic programmes</a></li>
          <li><a href="school-computing.php">School of Computing</a></li>
          <li><a href="contact.php">Contact for a live walkthrough</a></li>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
