let mooca = $("#mooca");
let matriz = $("#matriz");
let itaquera = $("#itaquera");

    function animacaoCascataEsquerda(elemento) {
       elemento.animate({marginLeft: "+=150px", opacity: "1"}, 3500);
       elemento.animate({marginLeft: "+=150px", opacity: "0"}, 1500);
       elemento.animate({marginLeft: "-=300"});
    }
    
    function animacaoCascataDireita(){
        matriz.animate({marginLeft: "-=150px", opacity: "1"}, 3500);
        matriz.animate({marginLeft: "-=150px", opacity: "0"}, 1500);
        matriz.animate({marginLeft: "+=300"});
    }
  
    
    setInterval( function() {animacaoCascataEsquerda(mooca), 3000});
    setInterval( function() {animacaoCascataEsquerda(itaquera), 6000});
    setInterval( animacaoCascataDireita, 5000);