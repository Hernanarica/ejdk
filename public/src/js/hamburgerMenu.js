const closeMenu = document.getElementById('close-menu');
const openMenu  = document.getElementById('open-menu');
const menuMob   = document.getElementById('menu-mob');

closeMenu.addEventListener('click', () => {
	menuMob.classList.replace('md:hidden', 'hidden');
});

openMenu.addEventListener('click', () => {
	menuMob.classList.replace('hidden', 'md:hidden');
});