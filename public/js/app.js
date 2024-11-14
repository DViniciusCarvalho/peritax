import bootstrap from 'bootstrap';

const documentBody = document.querySelector('body');
const navMenu = document.querySelector('#nav-menu');
const toggleMenu = document.querySelector('#toggle-menu');

toggleMenu.addEventListener('click', function() {
    const navMenuClassList = navMenu.classList;
    const menuIsNotOpen = !navMenuClassList.contains('open');

    if (menuIsNotOpen) {
        window.scrollTo(0, 0);
        documentBody.style.height = '100vh';
        documentBody.style.overflowY = 'hidden';
    }
    else {
        documentBody.style.height = '100%';
        documentBody.style.overflowY = 'visible';
    }

    navMenuClassList.toggle('open');
});

