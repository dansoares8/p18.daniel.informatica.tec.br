//abrir e fechar o nav.mobile pelo botao-menu-mobile:
$(function(){
    /*$('.botao-menu-mobile').click(function(){
        $('nav.mobile ul').fadeToggle();
    });*/

    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');

    if(listaMenu.is(':hidden') == true){
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-bars');
        icone.addClass('fa-times');
        listaMenu.slideToggle();
    }
    else{
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-times');
        icone.addClass('fa-bars');
        listaMenu.slideToggle();
    }


});
})