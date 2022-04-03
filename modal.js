function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);
    modal.classList.add('mostrar');
    modal.addEventListener('click', (e) => {
        if(e.target.id == modalID || e.target.className == 'fechar'){
            modal.classList.remove('mostrar');
        }
    });
}

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