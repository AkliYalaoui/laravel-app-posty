const menuBtn = document.getElementById('menuBtn');
if(menuBtn){
    menuBtn.addEventListener('click',_=> Array.from(document.querySelectorAll('.nav ul')).forEach(ul=>ul.classList.toggle('close')));
}
