//INICIO SCRIPT PARA HEADER
const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});


function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);
    modal.classList.add('mostrar');
    modal.addEventListener('click', (e) => {
        if(e.target.id == modalID || e.target.className == 'fechar'){
            modal.classList.remove('mostrar');
        }
    });
}

//FIM SCRIPT PARA HEADER

//INICIO SCRIPT PARA MODAL

const loca = document.querySelector('.local');
loca.addEventListener('click', () => iniciaModal('modal-localizacao'));

const fotoTahiti = document.querySelector('.imgTahiti');
fotoTahiti.addEventListener('click', () => iniciaModal('modal-tahiti'));

const fotoNiauFet = document.querySelector('.imgNiauFet');
fotoNiauFet.addEventListener('click', () => iniciaModal('modal-niau-fet'));

const fotoNiau = document.querySelector('.imgNiau');
fotoNiau.addEventListener('click', () => iniciaModal('modal-niau'));

const fotoBora = document.querySelector('.imgBora');
fotoBora.addEventListener('click', () => iniciaModal('modal-bora'));

const fotoManiniFet = document.querySelector('.imgManiniFet');
fotoManiniFet.addEventListener('click', () => iniciaModal('modal-manini-fet'));

const fotoManini = document.querySelector('.imgManini');
fotoManini.addEventListener('click', () => iniciaModal('modal-manini'));

const fotoPapeete = document.querySelector('.imgPapeete');
fotoPapeete.addEventListener('click', () => iniciaModal('modal-papeete'));

const fotoMoorea = document.querySelector('.imgMoorea');
fotoMoorea.addEventListener('click', () => iniciaModal('modal-moorea'));

const fotoTikeau = document.querySelector('.imgTikehau');
fotoTikeau.addEventListener('click', () => iniciaModal('modal-tikehau'));

//FIM SCRIPT PARA MODAL

//INICIO SCRIPT PARA COOKIES

const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

//FIM SCRIPT PARA COOKIES

//INICIO SCRIPT SLIDE

var interval = 0;
var maxSlider = document.querySelectorAll('.box-image').length - 1;

sumir();

function sumir(){
  
  let img = document.querySelectorAll('.box-image img');

  img[1].style.display = 'none';
  img[2].style.display = 'none';
}

acao();

function acao(){

  let img = document.querySelectorAll('.box-image img');

  setInterval(function(){

    img[interval].style.display =  'none';
    interval++;

    if(interval > maxSlider){
      interval = 0;
    }

    img[interval].style.display = 'block';

  },3000)
}

//FIM SCRIPT SLIDE
