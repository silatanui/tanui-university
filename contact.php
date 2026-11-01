<?php
declare(strict_types=1);
$pageTitle = 'Contact | Tanui University';
$pageDescription = 'Contact Tanui University admissions and campus offices.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Contact</p>
        <p class="page-hero__eyebrow">Get in touch</p>
        <h1>Contact</h1>
        <p>Reach admissions, the library, or general university enquiries.</p>
      </div>
    </section>
    <section class="page-body">
      <div class="container prose">
        <h2>Admissions Office</h2>
        <ul>
          <li>Email: admissions@tanui.ac.example</li>
          <li>Phone: +254 700 000 000</li>
          <li>Hours: Monday to Friday, 8:00 to 17:00 EAT</li>
        </ul>
        <h2>University Library</h2>
        <ul>
          <li>Email: library@tanui.ac.example</li>
          <li><a href="library.php">Library services</a></li>
        </ul>
        <h2>Campus</h2>
        <p>Tanui University Main Campus, Nairobi County, Kenya.</p>
        <ul class="link-list">
          <li><a href="admissions.php">Admissions overview</a></li>
          <li><a href="elearning.php">Student portal (E-Learning)</a></li>
        </ul>
      </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>