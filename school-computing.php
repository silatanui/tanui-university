<?php
declare(strict_types=1);
$pageTitle = 'School of Computing | Tanui University';
$pageDescription = 'Undergraduate and postgraduate computing programmes at Tanui University, including software, databases, web, cybersecurity, and machine learning.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumb"><a href="index.php">Home</a> / <a href="academics.php">Academics</a> / School of Computing</p>
      <p class="page-hero__eyebrow">School</p>
      <h1>School of Computing</h1>
      <p>Software systems, data, networks, and intelligent applications taught through studio practice, labs, and project work.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container prose prose--wide">
      <h2>About the school</h2>
      <p>The School of Computing prepares students to design, build, and secure digital systems. Teaching blends theory with weekly labs, code reviews, and portfolio projects so graduates can contribute quickly in industry, research, or public service.</p>
      <p>Enrolled students access course materials, assignments, and announcements through the Tanui E-Learning platform.</p>

      <h2>Undergraduate programmes</h2>
      <div class="programme-block">
        <h3>Bachelor of Science in Computer Science</h3>
        <p>A four-year pathway covering programming, algorithms, databases, networks, and software engineering. Students complete a final-year project with faculty mentorship.</p>
        <ul>
          <li>Core years in computing foundations and systems</li>
          <li>Electives in web engineering, security, and data</li>
          <li>Capstone project and industry-style assessment</li>
        </ul>
      </div>
      <div class="programme-block">
        <h3>Bachelor of Science in Software Engineering</h3>
        <p>Focused on building reliable applications at scale: requirements, architecture, testing, DevOps practices, and team delivery.</p>
        <ul>
          <li>Studio-based software projects each year</li>
          <li>Emphasis on quality, documentation, and collaboration</li>
          <li>Optional industrial attachment in the third year</li>
        </ul>
      </div>
      <div class="programme-block">
        <h3>Bachelor of Science in Information Technology</h3>
        <p>Applied computing for enterprise systems, infrastructure, and digital services, with strong grounding in databases and web technologies.</p>
      </div>

      <h2>Featured courses in E-Learning</h2>
      <p>These units are live on the Tanui LMS and illustrate how school teaching is delivered online.</p>
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
            <td>COMP101</td>
            <td>Introduction to Computing</td>
            <td>Computing foundations for first-year students</td>
          </tr>
          <tr>
            <td>WEB220</td>
            <td>Web Development</td>
            <td>HTML, CSS, JavaScript, PHP, and secure web apps</td>
          </tr>
          <tr>
            <td>DB201</td>
            <td>Database Systems</td>
            <td>Relational design, SQL, transactions, and analytics queries</td>
          </tr>
          <tr>
            <td>CYB301</td>
            <td>Cybersecurity Fundamentals</td>
            <td>Threat models, cryptography basics, and secure operations</td>
          </tr>
          <tr>
            <td>ML101</td>
            <td>Machine Learning</td>
            <td>Foundations through applied models and projects</td>
          </tr>
        </tbody>
      </table>
      <p><a class="btn btn--dark" href="elearning.php">Open E-Learning</a></p>

      <h2>Postgraduate study</h2>
      <div class="programme-block">
        <h3>Master of Science in Computer Science</h3>
        <p>Advanced study in algorithms, systems, and applied research, with a dissertation option for students preparing for doctoral work or specialist industry roles.</p>
      </div>
      <div class="programme-block">
        <h3>Master of Science in Cybersecurity</h3>
        <p>Security architecture, risk, and incident response for organisations that depend on trustworthy digital services.</p>
      </div>
      <ul class="link-list">
        <li><a href="opportunities.php">Postgraduate opportunities and funding</a></li>
        <li><a href="research.php">Research at Tanui</a></li>
        <li><a href="admissions.php">Admissions overview</a></li>
        <li><a href="school-applied-sciences.php">School of Applied Sciences</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
