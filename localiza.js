function inicaModal(modalID){
    const modal = document.getElementById(modalID);
    modal.classList.add('mostrar');
}

const local = document.querySelector('.local');
local.addEventListener('click', () => inicaModal('modal-localizacao'));


<script src="./localiza.js"></script>