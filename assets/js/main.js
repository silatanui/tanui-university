(() => {
  const chrome = () => document.querySelector("[data-chrome]");
  const header = () => document.querySelector("[data-header]");
  const toggle = () => document.querySelector("[data-nav-toggle]");
  const panel = () => document.querySelector("[data-nav-panel]");

  const syncChromeHeight = () => {
    const bar = chrome() || header();
    if (!bar) return;
    const top = Math.round(bar.getBoundingClientRect().bottom);
    document.documentElement.style.setProperty("--chrome-h", `${top}px`);
  };

  const onScroll = () => {
    const h = header();
    if (!h) return;
    h.classList.toggle("is-scrolled", window.scrollY > 24);
    syncChromeHeight();
  };

  const closeMegas = (except) => {
    document.querySelectorAll(".nav__item.is-open").forEach((item) => {
      if (item !== except) {
        item.classList.remove("is-open");
        const btn = item.querySelector(".nav__trigger");
        if (btn) btn.setAttribute("aria-expanded", "false");
      }
    });
  };

  const bindChrome = () => {
    onScroll();
    syncChromeHeight();

    const t = toggle();
    const p = panel();
    if (t && p) {
      t.addEventListener("click", () => {
        const open = p.classList.toggle("is-open");
        t.setAttribute("aria-expanded", open ? "true" : "false");
        closeMegas();
      });

      p.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
          p.classList.remove("is-open");
          t.setAttribute("aria-expanded", "false");
        });
      });
    }

    let closeTimer = null;
    const canHover = () => window.matchMedia("(hover: hover) and (pointer: fine)").matches;

    const openMega = (item) => {
      if (closeTimer) {
        clearTimeout(closeTimer);
        closeTimer = null;
      }
      closeMegas(item);
      item.classList.add("is-open");
      const btn = item.querySelector(".nav__trigger");
      if (btn) btn.setAttribute("aria-expanded", "true");
    };

    const scheduleClose = (item) => {
      if (closeTimer) clearTimeout(closeTimer);
      closeTimer = setTimeout(() => {
        item.classList.remove("is-open");
        const btn = item.querySelector(".nav__trigger");
        if (btn) btn.setAttribute("aria-expanded", "false");
        closeTimer = null;
      }, 160);
    };

    document.querySelectorAll(".nav__item.has-mega").forEach((item) => {
      const btn = item.querySelector(".nav__trigger");
      const mega = item.querySelector(".mega");
      if (!btn) return;

      btn.addEventListener("click", (e) => {
        e.preventDefault();
        const willOpen = !item.classList.contains("is-open");
        closeMegas(item);
        item.classList.toggle("is-open", willOpen);
        btn.setAttribute("aria-expanded", willOpen ? "true" : "false");
      });

      item.addEventListener("mouseenter", () => {
        if (canHover()) openMega(item);
      });

      item.addEventListener("mouseleave", () => {
        if (canHover()) scheduleClose(item);
      });

      if (mega) {
        mega.addEventListener("mouseenter", () => {
          if (canHover()) openMega(item);
        });
        mega.addEventListener("mouseleave", () => {
          if (canHover()) scheduleClose(item);
        });
      }
    });

    document.addEventListener("click", (e) => {
      if (!e.target.closest(".nav__item.has-mega") && !e.target.closest("[data-nav-toggle]")) {
        closeMegas();
      }
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        closeMegas();
        const pEl = panel();
        const tEl = toggle();
        if (pEl) pEl.classList.remove("is-open");
        if (tEl) tEl.setAttribute("aria-expanded", "false");
      }
    });

    window.addEventListener("resize", syncChromeHeight);
  };

  bindChrome();
  window.addEventListener("scroll", onScroll, { passive: true });

  const reveals = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.16, rootMargin: "0px 0px -8% 0px" }
    );
    reveals.forEach((el) => io.observe(el));
  } else {
    reveals.forEach((el) => el.classList.add("is-visible"));
  }

  const markImageReady = (img) => {
    const parent = img.parentElement;
    if (parent) parent.classList.add("has-image");
    const ph = parent && parent.querySelector(":scope > .ph");
    if (ph) ph.remove();
  };

  document.querySelectorAll("[data-img-fallback]").forEach((img) => {
    const showFallback = () => {
      img.style.display = "none";
      const parent = img.parentElement;
      if (!parent) return;
      const fallback = parent.querySelector(".hero__fallback, .admissions__fallback");
      if (fallback) fallback.hidden = false;
      parent.classList.remove("has-image");
    };

    if (img.complete) {
      if (img.naturalWidth === 0) showFallback();
      else markImageReady(img);
      return;
    }

    img.addEventListener("error", showFallback);
    img.addEventListener("load", () => markImageReady(img));
  });
})();
