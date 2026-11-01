<?php
declare(strict_types=1);
$pageTitle = 'About | Tanui University';
$pageDescription = 'About Tanui University, its teaching mission, schools, and campus community.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / About</p>
      <p class="page-hero__eyebrow">The University</p>
      <h1>About Tanui University</h1>
      <p>A teaching and research university focused on computing, applied sciences, business, education, and leadership for the public good.</p>
    </div>
  </section>
  <section class="page-body">
    <div class="container prose prose--wide">
      <h2>Who we are</h2>
      <p>Tanui University brings together four schools, a research community, and a campus library under one academic mission: knowledge that serves the public good. Admissions, student services, and a live Moodle E-Learning platform keep teaching connected from first enquiry to graduation.</p>

      <h2>Our schools</h2>
      <p>Academic life is organised through specialised schools that share facilities, electives, and online course spaces.</p>
      <div class="school-links">
        <a href="school-computing.php">
          <strong>School of Computing</strong>
          <span>Software, data systems, cybersecurity, and intelligent applications.</span>
        </a>
        <a href="school-applied-sciences.php">
          <strong>School of Applied Sciences</strong>
          <span>Statistics, data science, and quantitative methods.</span>
        </a>
        <a href="school-business.php">
          <strong>School of Business</strong>
          <span>Commerce, management, entrepreneurship, and digital commerce.</span>
        </a>
        <a href="school-education.php">
          <strong>School of Education</strong>
          <span>Teacher education, leadership, and educational technology.</span>
        </a>
      </div>

      <h2>How we teach</h2>
      <p>Programmes emphasise rigorous foundations, studio and lab practice, and projects that serve communities. Students move between lectures, collaborative work, school or industry placements where required, and online course spaces in E-Learning.</p>
      <ul>
        <li>Undergraduate pathways with clear year structures</li>
        <li>Postgraduate taught and research options</li>
        <li>Short courses for continuing professional development</li>
      </ul>

      <h2>Explore further</h2>
      <ul class="link-list">
        <li><a href="academics.php">Academics and programmes</a></li>
        <li><a href="undergraduate.php">Undergraduate programmes</a></li>
        <li><a href="library.php">University Library</a></li>
        <li><a href="opportunities.php">Postgraduate opportunities</a></li>
        <li><a href="contact.php">Contact and location</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
