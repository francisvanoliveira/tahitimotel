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

function slideTahiti(){

  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideTahiti').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideTahiti img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideTahiti img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideNiauFet(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideNiauFet').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideNiauFet img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';
    img[3].style.display = 'none';
    img[4].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideNiauFet img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideNiau(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideNiau').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideNiau img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';
    img[3].style.display = 'none';
    img[4].style.display = 'none';
    img[5].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideNiau img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideBora(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideBora').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideBora img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';
    img[3].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideBora img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideManihiFet(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideManihiFet').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideManihiFet img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';
    img[3].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideManihiFet img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideManihi(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideManihi').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideManihi img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';
    img[3].style.display = 'none';
    img[4].style.display = 'none';
    img[5].style.display = 'none';
    img[6].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideManihi img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slidePapeete(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slidePapeete').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slidePapeete img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slidePapeete img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideMoorea(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideMoorea').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideMoorea img');

    img[1].style.display = 'none';
    img[2].style.display = 'none';
    img[3].style.display = 'none';
    img[4].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideMoorea img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

function slideTikehau(){
  var interval = 0;
  var maxSlider = document.querySelectorAll('.slideTikehau').length - 1;

  sumir();

  function sumir(){
  
    let img = document.querySelectorAll('.slideTikehau img');

    img[1].style.display = 'none';

  }

  acao();

  function acao(){

    let img = document.querySelectorAll('.slideTikehau img');

    setInterval(function(){

      img[interval].style.display =  'none';
      interval++;

      if(interval > maxSlider){
        interval = 0;
      }

      img[interval].style.display = 'block';

    },3000)
  }
}

slideTahiti();
slideNiauFet();
slideNiau();
slideBora();
slideManihiFet();
slideManihi();
slidePapeete();
slideMoorea();
slideTikehau();

//FIM SCRIPT SLIDE
