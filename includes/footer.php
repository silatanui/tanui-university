<?php
declare(strict_types=1);
?>
  <footer class="site-footer">
    <div class="container site-footer__grid">
      <div>
        <a class="brand" href="<?= h(page('index.php')) ?>" aria-label="Tanui University home">
          <img class="brand__mark" src="<?= h(asset('brand/tanui-shield.jpg')) ?>" alt="">
          <span class="brand__text">
            <span class="brand__name">Tanui</span>
            <span class="brand__suffix">University</span>
          </span>
        </a>
        <p class="site-footer__note">Teaching and research for computing, applied sciences, and public-minded leadership.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="<?= h(page('academics.php')) ?>">Academics</a></li>
          <li><a href="<?= h(page('library.php')) ?>">Library</a></li>
          <li><a href="<?= h(page('opportunities.php')) ?>">Postgraduate opportunities</a></li>
          <li><a href="<?= h($LMS) ?>">E-Learning</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <ul>
          <li>Admissions Office</li>
          <li>admissions@tanui.ac.example</li>
          <li>+254 700 000 000</li>
          <li><a href="<?= h(page('contact.php')) ?>">Contact page</a></li>
        </ul>
      </div>
    </div>
    <div class="container site-footer__bottom">
      <span>&copy; <?= date('Y') ?> Tanui University</span>
      <span>Mock portfolio project by Tanui Sila</span>
    </div>
  </footer>

  <script src="<?= h(asset('js/main.js')) ?>"></script>
</body>
</html>
