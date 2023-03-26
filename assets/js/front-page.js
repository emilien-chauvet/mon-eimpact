function chiffreAnimation(chiffreElement, chiffreFinal, vitesse) {
  const duree = 2000;
  const increment = chiffreFinal / (duree / vitesse);
  let chiffreActuel = 0;
  const animation = setInterval(() => {
    chiffreActuel += increment;
    chiffreElement.textContent = Math.round(chiffreActuel);
    if (chiffreActuel >= chiffreFinal) {
      clearInterval(animation);
      chiffreElement.textContent = chiffreFinal;
    }
  }, vitesse);
}

function callback(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const chiffreElement = entry.target;
      chiffreAnimation(chiffreElement, parseInt(chiffreElement.dataset.chiffre), parseInt(chiffreElement.dataset.vitesse));
      observer.unobserve(chiffreElement);
    }
  });
}

const observer = new IntersectionObserver(callback);

const chiffre1 = document.querySelector('#equipe');
const chiffre2 = document.querySelector('#simu');
const chiffre3 = document.querySelector('#inscrits');

observer.observe(chiffre1);
observer.observe(chiffre2);
observer.observe(chiffre3);