 $(document).ready(function(){
            
    //Function para o clique do menu Mobile
    $('#iconeMenu').click(function(){
      $('#menuMobile').fadeToggle(1000);
    });

    $('.itemMenuMobile').click(function(){
      $('#menuMobile').fadeToggle();

    })
});