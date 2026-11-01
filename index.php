<?php
declare(strict_types=1);
$pageTitle = 'Tanui University';
$pageDescription = 'Tanui University is a teaching and research university focused on computing, applied sciences, and leadership for the public good.';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="hero" id="top">
      <div class="hero__media" aria-hidden="true">
        <img src="assets/images/hero-campus.png" alt="" data-img-fallback>
        <div class="hero__fallback" hidden></div>
      </div>
      <div class="hero__content">
        <h1>Knowledge that serves the public good</h1>
        <p class="hero__lede">A teaching and research university for computing, applied sciences, and leaders who build with care.</p>
        <div class="hero__actions">
          <a class="btn btn--primary" href="admissions.php">Explore admissions</a>
          <a class="btn btn--ghost" href="elearning.php">Enter E-Learning</a>
        </div>
      </div>
    </section>

    <section class="section" id="academics">
      <div class="container">
        <div class="section__head reveal">
          <p class="section__eyebrow">Academics</p>
          <h2>Study with purpose across our faculties</h2>
          <p>Programmes connect rigorous theory with studio, lab, and field practice so graduates can lead in industry, research, and public service.</p>
        </div>
        <div class="split reveal">
          <div class="split__media">
            <img src="assets/images/academics-lab.png" alt="" data-img-fallback>
          </div>
          <div class="split__copy">
            <h3>Schools built around modern practice</h3>
            <p>From databases and cybersecurity to statistics and machine learning, students learn by building real systems with faculty mentors.</p>
            <ul class="split__list">
              <li>School of Computing</li>
              <li>School of Applied Sciences</li>
              <li>School of Business and School of Education</li>
              <li>Undergraduate, postgraduate, and CPD pathways</li>
            </ul>
            <a class="btn btn--dark" href="academics.php">View programmes</a>
          </div>
        </div>
        <div class="pathways" style="margin-top: clamp(2.5rem, 5vw, 4rem);">
          <article class="pathway reveal">
            <h3>Undergraduate</h3>
            <p>Bachelor degrees across four schools with clear year structures and capstone or teaching practice.</p>
            <p><a href="undergraduate.php">Undergraduate programmes</a></p>
          </article>
          <article class="pathway reveal">
            <h3>Postgraduate</h3>
            <p>Masters, professional diplomas, and doctoral study with funding and research routes.</p>
            <p><a href="opportunities.php">Postgraduate opportunities</a></p>
          </article>
          <article class="pathway reveal">
            <h3>Continuing education</h3>
            <p>Short courses and certificates delivered online through the Tanui E-Learning platform.</p>
            <p><a href="short-courses.php">Short courses and CPD</a></p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--stone" id="campus">
      <div class="container">
        <div class="section__head reveal">
          <p class="section__eyebrow">Campus life</p>
          <h2>A place to think, practice, and belong</h2>
          <p>Quiet libraries, active labs, and open quads give students room to work hard and live well.</p>
        </div>
        <div class="mosaic reveal">
          <figure class="mosaic__item">
            <img src="assets/images/campus-library.png" alt="" data-img-fallback>
            <figcaption class="mosaic__caption">Library and quiet study</figcaption>
          </figure>
          <figure class="mosaic__item">
            <img src="assets/images/student-life.png" alt="" data-img-fallback>
            <figcaption class="mosaic__caption">Student life between classes</figcaption>
          </figure>
          <figure class="mosaic__item">
            <img src="assets/images/research-focus.png" alt="" data-img-fallback>
            <figcaption class="mosaic__caption">Research and making</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <section class="admissions" id="admissions">
      <div class="admissions__media" aria-hidden="true">
        <img src="assets/images/admissions-path.png" alt="" data-img-fallback>
        <div class="admissions__fallback" hidden></div>
      </div>
      <div class="admissions__content reveal">
        <p class="section__eyebrow" style="color:#ffb37a;">Admissions</p>
        <h2>Begin your application for the next intake</h2>
        <p>Review entry requirements, programme options, and timelines. Current students already enrolled can continue learning online today.</p>
        <div class="hero__actions" style="opacity:1;transform:none;animation:none;">
          <a class="btn btn--primary" href="admissions.php">Admissions overview</a>
          <a class="btn btn--ghost" href="elearning.php">Go to E-Learning</a>
        </div>
      </div>
    </section>

    <section class="section" id="news">
      <div class="container">
        <div class="section__head reveal">
          <p class="section__eyebrow">News</p>
          <h2>What is happening at Tanui</h2>
          <p>Updates from teaching, research, and student initiatives across the university.</p>
        </div>
        <div class="news-grid">
          <article class="news-item reveal">
            <div class="news-item__media">
              <img src="assets/images/news-thumb-1.png" alt="" data-img-fallback>
            </div>
            <time datetime="2026-10-20">20 Oct 2026</time>
            <h3>New machine learning pathway opens for undergraduates</h3>
            <p>Students can now follow a structured route from foundations through neural networks and applied projects.</p>
          </article>
          <article class="news-item reveal">
            <div class="news-item__media">
              <img src="assets/images/news-thumb-2.png" alt="" data-img-fallback>
            </div>
            <time datetime="2026-09-28">28 Sep 2026</time>
            <h3>Campus library hours extended through exam season</h3>
            <p>Quiet floors and collaborative rooms stay open later to support revision and group study.</p>
          </article>
          <article class="news-item reveal">
            <div class="news-item__media">
              <img src="assets/images/news-thumb-3.png" alt="" data-img-fallback>
            </div>
            <time datetime="2026-09-05">5 Sep 2026</time>
            <h3>E-Learning platform launches for enrolled students</h3>
            <p>Course materials, assignments, and announcements are available through the Tanui LMS.</p>
          </article>
        </div>
      </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>