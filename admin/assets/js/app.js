const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');




openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close(){
    mainMenu.style.top = '-100%';
    mainMenu.style.display = 'none';
}
		window.addEventListener("scroll", function(){
			var nav = document.querySelector("nav");
			nav.classList.toggle("sticky", window.scrollY > 0)

	});
