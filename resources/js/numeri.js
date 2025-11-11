document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll("[data-counter]");


  const animateCounter = (el) => {
    const target = +el.getAttribute("data-target");
    const duration = 1200; 
    const start = performance.now();

    const tick = (now) => {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(target * easeOutCubic(progress));
      el.textContent = value.toLocaleString("it-IT");

      if (progress < 1) requestAnimationFrame(tick);
    };

    requestAnimationFrame(tick);
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        const el = entry.target.querySelector(".counter");
        animateCounter(el);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 }); 

  counters.forEach(counter => observer.observe(counter));
});


function easeOutCubic(x) {
  return 1 - Math.pow(1 - x, 3);
}
