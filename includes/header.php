<?php
declare(strict_types=1);
require_once __DIR__ . '/init.php';

$pageTitle = $pageTitle ?? 'Tanui University';
$pageDescription = $pageDescription ?? 'Tanui University is a teaching and research university focused on computing, applied sciences, and leadership for the public good.';
$bodyClass = $bodyClass ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= h($pageTitle) ?></title>
  <meta name="description" content="<?= h($pageDescription) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700&family=Merriweather:wght@700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= h(asset('css/styles.css')) ?>">
  <link rel="icon" href="<?= h(asset('brand/tanui-shield.jpg')) ?>">
</head>
<body<?= $bodyClass !== '' ? ' class="' . h($bodyClass) . '"' : '' ?>>
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="site-chrome" data-chrome>
  <div class="topbar" data-topbar>
    <div class="topbar__inner">
      <p class="topbar__notice">
        <strong>Mock portfolio project.</strong>
        Demonstration website by Tanui Sila. Not an official institution.
      </p>
      <div class="topbar__links">
        <a href="<?= h(page('contact.php')) ?>">Contact</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=Staff%20Portal">Staff portal</a>
        <a href="<?= h($LMS) ?>">Student portal</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=Alumni">Alumni</a>
      </div>
    </div>
  </div>

  <header class="site-header" data-header>
    <div class="site-header__inner">
      <a class="brand" href="<?= h(page('index.php')) ?>" aria-label="Tanui University home">
        <img class="brand__mark" src="<?= h(asset('brand/tanui-shield.jpg')) ?>" alt="">
        <span class="brand__text">
          <span class="brand__name">Tanui</span>
          <span class="brand__suffix">University</span>
        </span>
      </a>

      <nav class="nav" aria-label="Primary">
        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">About</button>
          <div class="mega" role="region" aria-label="About menu">
            <div class="mega__grid mega__grid--3">
              <div>
                <h3>The University</h3>
                <a href="<?= h(page('about.php')) ?>">About Tanui</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=History%20and%20Heritage">History and heritage</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Vision%20and%20Mission">Vision and mission</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Governance">Governance and leadership</a>
              </div>
              <div>
                <h3>Our Campus</h3>
                <a href="<?= h(page('index.php')) ?>#campus">Campus life</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Facilities">Facilities</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Health%20Services">Health services</a>
                <a href="<?= h(page('contact.php')) ?>">Contact and location</a>
              </div>
              <div>
                <h3>Quick links</h3>
                <a href="<?= h(page('news.php')) ?>">News and events</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Tenders">Tenders</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Jobs">Careers at Tanui</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">Academics</button>
          <div class="mega" role="region" aria-label="Academics menu">
            <div class="mega__grid mega__grid--4">
              <div>
                <h3>Programmes</h3>
                <a href="<?= h(page('academics.php')) ?>">All programmes</a>
                <a href="<?= h(page('undergraduate.php')) ?>">Undergraduate</a>
                <a href="<?= h(page('opportunities.php')) ?>">Postgraduate opportunities</a>
                <a href="<?= h(page('short-courses.php')) ?>">Short courses and CPD</a>
              </div>
              <div>
                <h3>Schools</h3>
                <a href="<?= h(page('school-computing.php')) ?>">School of Computing</a>
                <a href="<?= h(page('school-applied-sciences.php')) ?>">School of Applied Sciences</a>
                <a href="<?= h(page('school-business.php')) ?>">School of Business</a>
                <a href="<?= h(page('school-education.php')) ?>">School of Education</a>
              </div>
              <div>
                <h3>Academic support</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Academic%20Calendar">Academic calendar</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Examinations">Examinations</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Timetables">Timetables</a>
                <a href="<?= h(page('library.php')) ?>">Library</a>
              </div>
              <div>
                <h3>Online learning</h3>
                <a class="mega__accent" href="<?= h($LMS) ?>">E-Learning platform</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Course%20Catalogue">Course catalogue</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Open%20Educational%20Resources">Open educational resources</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">Admissions</button>
          <div class="mega" role="region" aria-label="Admissions menu">
            <div class="mega__grid mega__grid--3">
              <div>
                <h3>Apply</h3>
                <a href="<?= h(page('admissions.php')) ?>">Admissions overview</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=How%20to%20Apply">How to apply</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Undergraduate%20Entry">Undergraduate entry</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Postgraduate%20Entry">Postgraduate entry</a>
              </div>
              <div>
                <h3>Fees and funding</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Fees%20Structure">Fees structure</a>
                <a href="<?= h(page('opportunities.php')) ?>">Scholarships</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Financial%20Aid">Financial aid</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=International%20Students">International students</a>
              </div>
              <div>
                <h3>Next steps</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Open%20Day">Open day</a>
                <a href="<?= h(page('contact.php')) ?>">Ask admissions</a>
                <a class="mega__accent" href="<?= h($LMS) ?>">Start learning online</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">Research</button>
          <div class="mega" role="region" aria-label="Research menu">
            <div class="mega__grid mega__grid--3">
              <div>
                <h3>Research at Tanui</h3>
                <a href="<?= h(page('research.php')) ?>">Research overview</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Research%20Centres">Research centres</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Publications">Publications</a>
              </div>
              <div>
                <h3>Innovation</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Innovation%20Hub">Innovation hub</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Industry%20Partnerships">Industry partnerships</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Grants">Grants and funding</a>
              </div>
              <div>
                <h3>Ethics and integrity</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Research%20Ethics">Research ethics</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Intellectual%20Property">Intellectual property</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">Library</button>
          <div class="mega" role="region" aria-label="Library menu">
            <div class="mega__grid mega__grid--3">
              <div>
                <h3>Library services</h3>
                <a href="<?= h(page('library.php')) ?>">University Library</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Digital%20Library">Digital library</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Opening%20Hours">Opening hours</a>
              </div>
              <div>
                <h3>Resources</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=E-Journals">E-journals and databases</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Repository">Institutional repository</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Research%20Guides">Research guides</a>
              </div>
              <div>
                <h3>Support</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Information%20Literacy">Information literacy</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Interlibrary%20Loans">Interlibrary loans</a>
                <a class="mega__accent" href="<?= h($LMS) ?>">Access course readings</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">Students</button>
          <div class="mega" role="region" aria-label="Students menu">
            <div class="mega__grid mega__grid--3">
              <div>
                <h3>Student life</h3>
                <a href="<?= h(page('students.php')) ?>">Students home</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Student%20Affairs">Student affairs</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Clubs%20and%20Societies">Clubs and societies</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Sports">Sports and recreation</a>
              </div>
              <div>
                <h3>Support services</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Accommodation">Accommodation</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Counselling">Counselling</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Disability%20Support">Disability support</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Career%20Services">Career services</a>
              </div>
              <div>
                <h3>Portals</h3>
                <a class="mega__accent" href="<?= h($LMS) ?>">E-Learning</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Student%20Email">Student email</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Fee%20Statements">Fee statements</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav__item has-mega">
          <button type="button" class="nav__trigger" aria-expanded="false">Opportunities</button>
          <div class="mega" role="region" aria-label="Opportunities menu">
            <div class="mega__grid mega__grid--3">
              <div>
                <h3>Postgraduate</h3>
                <a href="<?= h(page('opportunities.php')) ?>">Postgraduate opportunities</a>
                <a href="<?= h(page('opportunities.php')) ?>#masters">Masters programmes</a>
                <a href="<?= h(page('opportunities.php')) ?>#doctoral">Doctoral studies</a>
              </div>
              <div>
                <h3>Funding</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Scholarships">Scholarships</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Fellowships">Fellowships</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Research%20Assistantships">Research assistantships</a>
              </div>
              <div>
                <h3>Careers</h3>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Internships">Internships</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Graduate%20Recruitment">Graduate recruitment</a>
                <a href="<?= h(page('coming-soon.php')) ?>?t=Jobs%20at%20Tanui">Jobs at Tanui</a>
              </div>
            </div>
          </div>
        </div>

        <a class="nav__link" href="<?= h(page('news.php')) ?>">News</a>
        <a class="nav__link is-accent" href="<?= h($LMS) ?>">E-Learning</a>
      </nav>

      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" data-nav-toggle>
        <span></span>
        <span class="sr-only">Menu</span>
      </button>
    </div>

    <div class="nav-panel" id="mobile-nav" data-nav-panel>
      <details>
        <summary>About</summary>
        <a href="<?= h(page('about.php')) ?>">About Tanui</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=History%20and%20Heritage">History and heritage</a>
        <a href="<?= h(page('contact.php')) ?>">Contact</a>
      </details>
      <details>
        <summary>Academics</summary>
        <a href="<?= h(page('academics.php')) ?>">All programmes</a>
        <a href="<?= h(page('undergraduate.php')) ?>">Undergraduate</a>
        <a href="<?= h(page('school-computing.php')) ?>">School of Computing</a>
        <a href="<?= h(page('school-applied-sciences.php')) ?>">School of Applied Sciences</a>
        <a href="<?= h(page('school-business.php')) ?>">School of Business</a>
        <a href="<?= h(page('school-education.php')) ?>">School of Education</a>
        <a href="<?= h(page('opportunities.php')) ?>">Postgraduate opportunities</a>
        <a href="<?= h(page('library.php')) ?>">Library</a>
        <a href="<?= h($LMS) ?>">E-Learning platform</a>
      </details>
      <details>
        <summary>Admissions</summary>
        <a href="<?= h(page('admissions.php')) ?>">Admissions overview</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=How%20to%20Apply">How to apply</a>
        <a href="<?= h(page('opportunities.php')) ?>">Scholarships</a>
      </details>
      <details>
        <summary>Research</summary>
        <a href="<?= h(page('research.php')) ?>">Research overview</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=Research%20Centres">Research centres</a>
      </details>
      <details>
        <summary>Library</summary>
        <a href="<?= h(page('library.php')) ?>">University Library</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=Digital%20Library">Digital library</a>
      </details>
      <details>
        <summary>Students</summary>
        <a href="<?= h(page('students.php')) ?>">Students home</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=Student%20Affairs">Student affairs</a>
        <a href="<?= h($LMS) ?>">E-Learning</a>
      </details>
      <details>
        <summary>Opportunities</summary>
        <a href="<?= h(page('opportunities.php')) ?>">Postgraduate opportunities</a>
        <a href="<?= h(page('coming-soon.php')) ?>?t=Internships">Internships</a>
      </details>
      <a href="<?= h(page('news.php')) ?>">News</a>
      <a class="is-accent" href="<?= h($LMS) ?>">E-Learning</a>
    </div>
  </header>
  </div>
