const trailContainer = document.getElementById('trail-container');

document.addEventListener('mousemove', (event) => {

    const trailDot = document.createElement('div');
    trailDot.classList.add('trail-dot');


    trailDot.style.left = `${event.pageX}px`;
    trailDot.style.top = `${event.pageY}px`;


    trailContainer.appendChild(trailDot);


    setTimeout(() => {
        trailDot.remove();
    }, 1000);
});


const themeToggle = document.getElementById('chk');


function applyTheme(isDark) {
  document.body.classList.toggle('dark', isDark);
}


document.addEventListener('DOMContentLoaded', () => {
  const isDark = localStorage.getItem('theme') === 'dark';
  applyTheme(isDark);
  themeToggle.checked = isDark;
});


themeToggle.addEventListener('change', () => {
  const isDark = themeToggle.checked;
  applyTheme(isDark);
  localStorage.setItem('theme', isDark ? 'dark' : 'light');
});


const checkbox = document.getElementById("chk");


checkbox.addEventListener("change", function () {
  document.body.classList.toggle("dark", checkbox.checked);
});


const img = document.getElementById('minhaImagem');


img.classList.add('grow');

