<?php
declare(strict_types=1);
$pageTitle = 'Postgraduate Opportunities | Tanui University';
$pageDescription = 'Masters, doctoral study, scholarships, and career pathways at Tanui University.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / Opportunities</p>
      <p class="page-hero__eyebrow">Advance your study</p>
      <h1>Postgraduate opportunities</h1>
      <p>Masters and doctoral pathways across our four schools, with funding routes and graduate career support.</p>
    </div>
  </section>
  <section class="page-body">
    <div class="container prose prose--wide">
      <h2 id="masters">Masters by school</h2>
      <div class="programme-block">
        <h3>School of Computing</h3>
        <ul>
          <li>Master of Science in Computer Science</li>
          <li>Master of Science in Cybersecurity</li>
        </ul>
        <p><a href="school-computing.php">School of Computing</a></p>
      </div>
      <div class="programme-block">
        <h3>School of Applied Sciences</h3>
        <ul>
          <li>Master of Science in Applied Statistics</li>
          <li>Master of Science in Data Science</li>
        </ul>
        <p><a href="school-applied-sciences.php">School of Applied Sciences</a></p>
      </div>
      <div class="programme-block">
        <h3>School of Business</h3>
        <ul>
          <li>Master of Business Administration (MBA)</li>
          <li>Master of Science in Finance</li>
        </ul>
        <p><a href="school-business.php">School of Business</a></p>
      </div>
      <div class="programme-block">
        <h3>School of Education</h3>
        <ul>
          <li>Postgraduate Diploma in Education</li>
          <li>Master of Education</li>
          <li>Master of Education in Educational Technology</li>
        </ul>
        <p><a href="school-education.php">School of Education</a></p>
      </div>

      <h2 id="doctoral">Doctoral studies</h2>
      <p>PhD candidature is available in computing, applied statistics and data science, business and management research, and education. Applicants propose a topic with a prospective supervisor and follow a structured research proposal review.</p>
      <p><a href="research.php">Research overview</a></p>

      <h2>Funding</h2>
      <div class="programme-block">
        <h3>Scholarships</h3>
        <p>Merit and need-informed awards for postgraduate taught programmes. Priority areas currently include cybersecurity, data science, and teacher education.</p>
      </div>
      <div class="programme-block">
        <h3>Fellowships</h3>
        <p>Competitive fellowships for research students contributing to school research groups and publications.</p>
      </div>
      <div class="programme-block">
        <h3>Research assistantships</h3>
        <p>Paid assistant roles supporting faculty projects in labs, field studies, and E-Learning content development.</p>
      </div>

      <h2>Careers</h2>
      <p>Career services help postgraduate students with internships, graduate recruitment cycles, and academic job preparation. Teaching and research assistant vacancies are posted through the university opportunities desk.</p>
      <ul class="link-list">
        <li><a href="admissions.php">Postgraduate entry and admissions</a></li>
        <li><a href="students.php">Career services and student support</a></li>
        <li><a href="contact.php">Ask about funding deadlines</a></li>
        <li><a href="elearning.php">E-Learning for enrolled postgraduates</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
