document.addEventListener('DOMContentLoaded', function () {
    const startNowButton = document.getElementById('startNowButton');
    const imagemExibidaTop = document.getElementById('imagemExibidaTop');
    const imagemExibidaPortf = document.getElementById('imagemExibidaPortf');

    startNowButton.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        if(imagemExibidaTop.src.endsWith('assets/img/bg/sec-shape2-top.png')){
            imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top-escuro.png';
        }else{
            imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top.png';
        }
        if(imagemExibidaPortf.src.endsWith('assets/portfolioComp.jpeg')){
            imagemExibidaPortf.src = 'assets/portfolioCompEscuro.png'
        }else{
            imagemExibidaPortf.src ='assets/portfolioComp.jpeg';
        }
    });
});
