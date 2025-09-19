function adicionarEvento(){
    const novoEvento = document.getElementById('TableEventos');

    novoEvento.classList.add('TableEventos');

    const ProximosEventos = document.querySelector('.ProximosEventos');
    ProximosEventos.appendChild(novoEvento);
}