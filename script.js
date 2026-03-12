const hero = document.querySelector('.card-3d');
const revealEls = document.querySelectorAll('.reveal');

if (hero) {
  hero.addEventListener('mousemove', (event) => {
    const rect = hero.getBoundingClientRect();
    const x = event.clientX - rect.left;
    const y = event.clientY - rect.top;

    const rotateY = ((x / rect.width) - 0.5) * 10;
    const rotateX = (0.5 - (y / rect.height)) * 8;

    hero.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });

  hero.addEventListener('mouseleave', () => {
    hero.style.transform = 'perspective(900px) rotateX(0deg) rotateY(0deg)';
  });
}

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  },
  { threshold: 0.15 }
);

revealEls.forEach((el) => observer.observe(el));
