const scroll = document.querySelector('aside');

scroll.onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'})
};

function contar(qtd, classe) {
    var i = 0;

    function exibir() {
        if (i <= qtd) {
            document.querySelector(classe).innerHTML = "+" + i;
            i++;
            setTimeout(exibir, 10);
        }
    }

    exibir();
}
function contar3000() {
    var i = 0;

    function exibir() {
        if (i <= 3000) {
            document.querySelector('.text3').innerHTML = "+" + i + "m²";
            i++;
            setTimeout(exibir, 0.5);
        }
    }

    exibir(); 
}

contar(700, '.text1');
contar(600, '.text2');
contar3000();
