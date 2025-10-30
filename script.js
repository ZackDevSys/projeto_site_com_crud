function openModal(id) {
    const modal = document.getElementById('modal-container' + id);
    modal.classList.add('mostrar');

    // Fecha o modal ao clicar fora dele ou no botão "fechar"
    modal.addEventListener('click', (e) => {
        if (e.target.id === 'modal-container' + id || e.target.id === 'fechar') {
            modal.classList.remove('mostrar');
        }
    });
}

setTimeout(() => {
    const msg = document.querySelector('.msg');
    if (msg) {
        msg.style.opacity = '0';
        setTimeout(() => msg.remove(), 500);
    }
}, 5000); // desaparece após 5 segundos
