function abrir(carregarModal){
    console.log("Carregou : " + carregarModal)
    var modal = document.getElementById(carregarModal);

    modal.style.display = 'block'
    document.body.style.overflow = 'hidden';
}

function fechar(fechouModal) {
    console.log("fechou : " + fechouModal)

    let modal = document.getElementById(fechouModal);

    modal.style.display = 'none';
    document.body.style.overflow = 'auto';


}

