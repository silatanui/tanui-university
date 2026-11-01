<?php
declare(strict_types=1);
$pageTitle = 'Library | Tanui University';
$pageDescription = 'Tanui University Library services, digital resources, and study spaces.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Library</p>
        <p class="page-hero__eyebrow">Learning resources</p>
        <h1>University Library</h1>
        <p>Quiet study floors, collaborative rooms, and digital collections that support teaching and research across the university.</p>
      </div>
    </section>
    <section class="page-body">
      <div class="container prose">
        <h2>Services</h2>
        <p>The library helps students and staff find scholarly materials, build information literacy, and access course readings linked from E-Learning.</p>
        <ul>
          <li>Print and digital collections</li>
          <li>Reference and research consultations</li>
          <li>Group study booking (coming soon)</li>
        </ul>
        <h2>Digital access</h2>
        <ul>
          <li><a href="coming-soon.php?t=Digital%20Library">Digital library</a></li>
          <li><a href="coming-soon.php?t=E-Journals">E-journals and databases</a></li>
          <li><a href="coming-soon.php?t=Repository">Institutional repository</a></li>
          <li><a href="coming-soon.php?t=Opening%20Hours">Opening hours</a></li>
        </ul>
        <h2>Support</h2>
        <ul class="link-list">
          <li><a href="coming-soon.php?t=Information%20Literacy">Information literacy</a></li>
          <li><a href="coming-soon.php?t=Interlibrary%20Loans">Interlibrary loans</a></li>
          <li><a href="elearning.php">Access course readings in E-Learning</a></li>
        </ul>
      </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>