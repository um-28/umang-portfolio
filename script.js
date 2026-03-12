// Toggle Dark Mode
const hero = document.querySelector('.card-3d');
const revealEls = document.querySelectorAll('.reveal');
const typedText = document.getElementById('typed-text');

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

if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  revealEls.forEach((el) => observer.observe(el));
} else {
  revealEls.forEach((el) => el.classList.add('visible'));
}

if (typedText) {
  const words = ['Laravel APIs', 'Flutter Apps', 'Modern UI', 'Secure Backend'];
  let wordIndex = 0;

  setInterval(() => {
    wordIndex = (wordIndex + 1) % words.length;
    typedText.textContent = words[wordIndex];
  }, 1700);
}
