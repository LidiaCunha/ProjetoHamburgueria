// on - Mudança para funcionamento no Internet Explorer

$(document).ready(function () {

    // - Quantidade de imagens que aparecem
    let numImages = 1;
    // - Quantidade de margin
    let marginPadding = 59;
    // - Localização do carossel
    let ident = 0;
    // - Contador indica a posição máximo que um item pode chegar
    let count = ($(".itensSlider").length / numImages) - 1;

   // Funções
   
   // Muda imagem do slide
   function mudaSlide (option) {

       switch(option) {

        // Posterior
           case "posterior":
               if (ident < count) {
                   ident++;
                   $("#slider").animate({'marginLeft':"-=" + proximoSlide + 'px'}, 500)
       
               } else {
                   ident = 0;
                   $("#slider").animate({'marginLeft':"+=" + slideFinalComeco + 'px'}, 500)
               }
               break;
        
        // Anterior
           case "anterior":
               if (ident > 0) {
                   ident--;
                   $("#slider").animate({'marginLeft':"+=" + proximoSlide + 'px'}, 500)
       
               } else {
                   ident = ($(".itensSlider").length - 1);
                   $("#slider").animate({'marginLeft':"-=" + slideFinalComeco + 'px'}, 500)
               }
               break;

           default:
               alert("ERRO");
               break;
       }
   }

   // Ajuste do tamanho do Carroussel em largura
   let width = (
       parseInt($(".itensSlider").outerWidth()) + 
       parseInt($(".itensSlider").css("margin-right")) + 
       parseInt($(".itensSlider").css("margin-left"))) * 
       $(".itensSlider").length;
   
   $("#slider").css("width", width);
   
   // Calculos somando todos os Margin e Padding dos itens do Carroussel
   let proximoSlide = (numImages + marginPadding) + $(".itensSlider").outerWidth();
   let slideFinalComeco = proximoSlide * ($(".itensSlider").length - 1);
    
   // Clique do usuário para posterior do slider
   $("#posterior").on("click", function() {mudaSlide("posterior")});

   // Clique do usuário para anterior do slider 
   $("#anterior").on("click", function() {mudaSlide("anterior")});
    
    
    setInterval(function (){
        mudaSlide("posterior")
    },3000);

});