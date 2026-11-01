<?php
declare(strict_types=1);
$pageTitle = 'School of Applied Sciences | Tanui University';
$pageDescription = 'Applied sciences programmes at Tanui University covering statistics, data science, and quantitative methods for research and industry.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / <a href="academics.php">Academics</a> / School of Applied Sciences</p>
      <p class="page-hero__eyebrow">School</p>
      <h1>School of Applied Sciences</h1>
      <p>Quantitative reasoning, data analysis, and scientific problem-solving for research, policy, and industry.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container prose prose--wide">
      <h2>About the school</h2>
      <p>The School of Applied Sciences develops graduates who can collect evidence, model uncertainty, and communicate results clearly. Programmes sit at the intersection of mathematics, statistics, and computing, with lab and project work throughout.</p>
      <p>Students often collaborate with the School of Computing on data and machine learning pathways, while keeping a strong foundation in scientific method.</p>

      <h2>Undergraduate programmes</h2>
      <div class="programme-block">
        <h3>Bachelor of Science in Applied Statistics</h3>
        <p>Training in probability, inference, regression, and experimental design, with applications in health, business, and public policy.</p>
        <ul>
          <li>Core modules in probability and statistical modelling</li>
          <li>Applied projects using real and simulated datasets</li>
          <li>Preparation for analytics roles or postgraduate research</li>
        </ul>
      </div>
      <div class="programme-block">
        <h3>Bachelor of Science in Data Science</h3>
        <p>A multidisciplinary degree combining statistics, programming, and domain electives so students can turn data into decisions.</p>
        <ul>
          <li>Shared computing modules with the School of Computing</li>
          <li>Visualisation, machine learning introductions, and ethics of data use</li>
          <li>Capstone analytics project in the final year</li>
        </ul>
      </div>
      <div class="programme-block">
        <h3>Bachelor of Science in Applied Mathematics</h3>
        <p>Mathematical modelling and computational methods for engineering, finance, and scientific computing contexts.</p>
      </div>

      <h2>Featured courses in E-Learning</h2>
      <table class="course-table">
        <thead>
          <tr>
            <th>Code</th>
            <th>Course</th>
            <th>Focus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STAT110</td>
            <td>Introductory Statistics</td>
            <td>Descriptive statistics, probability, sampling, and inference</td>
          </tr>
          <tr>
            <td>ML101</td>
            <td>Machine Learning</td>
            <td>Shared pathway with Computing for applied modelling</td>
          </tr>
          <tr>
            <td>DB201</td>
            <td>Database Systems</td>
            <td>Data organisation and analytical querying for science projects</td>
          </tr>
        </tbody>
      </table>
      <p><a class="btn btn--dark" href="elearning.php">Browse courses in E-Learning</a></p>

      <h2>Postgraduate study</h2>
      <div class="programme-block">
        <h3>Master of Science in Applied Statistics</h3>
        <p>Advanced inference, multivariate methods, and research practice for analysts and aspiring researchers.</p>
      </div>
      <div class="programme-block">
        <h3>Master of Science in Data Science</h3>
        <p>Statistical learning, large-scale data workflows, and a supervised project with faculty from Applied Sciences and Computing.</p>
      </div>
      <ul class="link-list">
        <li><a href="opportunities.php">Postgraduate opportunities</a></li>
        <li><a href="school-computing.php">School of Computing</a></li>
        <li><a href="research.php">Research overview</a></li>
        <li><a href="library.php">University Library</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
