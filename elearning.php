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
      <p>A short walkthrough of the Tanui Moodle LMS: student login, My courses, and weekly course content.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <div class="demo-video">
        <video
          controls
          playsinline
          preload="metadata"
          poster="<?= h(asset('video/elearning-poster.png')) ?>"
          aria-label="Tanui University E-Learning platform demo video"
        >
          <source src="<?= h(asset('video/tanui-lms-demo.mp4')) ?>" type="video/mp4">
          Your browser does not support embedded video.
        </video>
      </div>

      <div class="prose prose--wide" style="margin-top: 2rem;">
        <h2>What this demo shows</h2>
        <ul>
          <li>Student sign-in on the branded Tanui LMS</li>
          <li>My courses with enrolled units</li>
          <li>Opening Machine Learning and Database Systems course pages</li>
          <li>Weekly topics, readings, and activities</li>
        </ul>
        <p>The full Moodle installation is kept local for development and is not deployed with this marketing site, so hosting stays light. The live platform can be demonstrated on request.</p>
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
