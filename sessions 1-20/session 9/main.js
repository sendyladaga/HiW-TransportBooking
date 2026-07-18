const btn = document.querySelector('#themeBtn');
const box = document.querySelector('#container');
 
btn.addEventListener('click', () => {
    // .toggle adds the class if it's missing, or removes it if it's there!
    box.classList.toggle('dark-theme');
});