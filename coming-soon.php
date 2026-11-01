<?php
declare(strict_types=1);
$soonLabel = trim((string)($_GET['t'] ?? 'Coming soon'));
if ($soonLabel === '') {
    $soonLabel = 'Coming soon';
}
$pageTitle = $soonLabel . ' | Tanui University';
$pageDescription = 'This section of Tanui University is coming soon.';
require __DIR__ . '/includes/header.php';
?>
<main id="main" class="page">
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / <?= h($soonLabel) ?></p>
        <p class="page-hero__eyebrow">Coming soon</p>
        <h1><?= h($soonLabel) ?></h1>
        <p>This section is still being prepared. Explore the live pages below, or open the E-Learning platform.</p>
      </div>
    </section>
    <section class="page-body">
      <div class="container">
        <div class="soon-card">
          <strong>Coming soon</strong>
          <p>Content for this area has not been published yet. Use the links below to continue browsing.</p>
          <ul class="link-list">
            <li><a href="about.php">About Tanui</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="opportunities.php">Postgraduate opportunities</a></li>
            <li><a href="admissions.php">Admissions</a></li>
            <li><a href="elearning.php">E-Learning platform</a></li>
          </ul>
        </div>
      </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>