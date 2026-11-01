<?php
declare(strict_types=1);
$pageTitle = 'Short Courses and CPD | Tanui University';
$pageDescription = 'Short courses and continuing professional development at Tanui University, delivered through E-Learning.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / <a href="academics.php">Academics</a> / Short courses</p>
      <p class="page-hero__eyebrow">Continuing education</p>
      <h1>Short courses and CPD</h1>
      <p>Focused certificates for professionals updating technical and pedagogical skills without enrolling in a full degree.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container prose prose--wide">
      <h2>Current short course themes</h2>
      <div class="programme-block">
        <h3>Web Development Essentials</h3>
        <p>HTML, CSS, JavaScript, and introductory PHP for building small multi-page sites. Aligns with topics from WEB220.</p>
      </div>
      <div class="programme-block">
        <h3>Statistics for Decision Makers</h3>
        <p>Descriptive statistics, confidence intervals, and reading research results, drawn from STAT110 for non-specialists.</p>
      </div>
      <div class="programme-block">
        <h3>Cybersecurity Awareness</h3>
        <p>Threat basics, authentication hygiene, and incident reporting for staff and students, mapped to CYB301 foundations.</p>
      </div>
      <div class="programme-block">
        <h3>Teaching with E-Learning</h3>
        <p>For educators: structuring weekly online topics, assignments, and feedback using the Tanui LMS.</p>
      </div>

      <h2>Delivery</h2>
      <p>Short courses run in intensive blocks or evening cohorts. Materials, quizzes, and certificates of completion are issued through E-Learning for registered participants.</p>
      <ul class="link-list">
        <li><a href="elearning.php">Go to E-Learning</a></li>
        <li><a href="academics.php">Back to academics</a></li>
        <li><a href="contact.php">Ask about upcoming intakes</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
