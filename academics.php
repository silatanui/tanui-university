<?php
declare(strict_types=1);
$pageTitle = 'Academics | Tanui University';
$pageDescription = 'Undergraduate and postgraduate programmes across Computing, Applied Sciences, Business, and Education at Tanui University.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / Academics</p>
      <p class="page-hero__eyebrow">Programmes</p>
      <h1>Academics</h1>
      <p>Four schools deliver undergraduate, postgraduate, and continuing education pathways with shared access to the Tanui E-Learning platform.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container prose prose--wide">
      <h2>Our schools</h2>
      <p>Each school combines rigorous teaching with studio, lab, or field practice. Explore a school for programme structures, sample courses, and postgraduate options.</p>

      <div class="school-links">
        <a href="school-computing.php">
          <strong>School of Computing</strong>
          <span>Computer science, software engineering, web, databases, cybersecurity, and machine learning.</span>
        </a>
        <a href="school-applied-sciences.php">
          <strong>School of Applied Sciences</strong>
          <span>Statistics, data science, and applied mathematics for research and industry analysis.</span>
        </a>
        <a href="school-business.php">
          <strong>School of Business</strong>
          <span>Commerce, management, entrepreneurship, finance, and digital commerce.</span>
        </a>
        <a href="school-education.php">
          <strong>School of Education</strong>
          <span>Teacher education, educational leadership, and educational technology.</span>
        </a>
      </div>

      <h2>Programme levels</h2>
      <div class="programme-block">
        <h3>Undergraduate</h3>
        <p>Four-year bachelor degrees with clear year structures, advising, and early research or attachment options. See the full undergraduate guide for entry notes and school pathways.</p>
        <p><a href="undergraduate.php">Undergraduate programmes</a></p>
      </div>
      <div class="programme-block">
        <h3>Postgraduate</h3>
        <p>Taught masters, research degrees, and professional diplomas for specialists and educators deepening their practice.</p>
        <p><a href="opportunities.php">Postgraduate opportunities</a></p>
      </div>
      <div class="programme-block">
        <h3>Short courses and CPD</h3>
        <p>Focused certificates in areas such as web development, statistics for decision makers, and cybersecurity awareness, delivered online through E-Learning.</p>
        <p><a href="short-courses.php">Short courses and CPD</a></p>
      </div>

      <h2>Learning online</h2>
      <p>Enrolled students use the Tanui LMS for weekly topics, readings, assignments, and announcements. Live demonstration courses currently include COMP101, WEB220, DB201, STAT110, CYB301, and ML101.</p>

      <h2>Academic support</h2>
      <ul class="link-list">
        <li><a href="library.php">University Library</a></li>
        <li><a href="coming-soon.php?t=Academic%20Calendar">Academic calendar</a></li>
        <li><a href="coming-soon.php?t=Examinations">Examinations</a></li>
        <li><a href="elearning.php">Enter E-Learning</a></li>
        <li><a href="admissions.php">Admissions overview</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
