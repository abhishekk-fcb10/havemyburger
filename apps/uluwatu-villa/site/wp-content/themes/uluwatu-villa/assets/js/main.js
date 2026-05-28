(function () {
  const header = document.querySelector(".header");
  const navToggle = document.querySelector(".nav__toggle");
  const navMobile = document.querySelector(".nav__mobile");

  window.addEventListener("scroll", () => {
    header.classList.toggle("scrolled", window.scrollY > 40);
  });

  navToggle.addEventListener("click", () => {
    navMobile.classList.toggle("open");
    document.body.style.overflow = navMobile.classList.contains("open") ? "hidden" : "";
  });

  navMobile.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navMobile.classList.remove("open");
      document.body.style.overflow = "";
    });
  });

  document.querySelector(".contact__form").addEventListener("submit", (e) => {
    e.preventDefault();
    const btn = e.target.querySelector('button[type="submit"]');
    const original = btn.textContent;
    btn.textContent = "Request Sent!";
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = original;
      btn.disabled = false;
      e.target.reset();
    }, 2500);
  });
})();
