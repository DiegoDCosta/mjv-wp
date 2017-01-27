/* 
 * Scripts customizados do site
 */

jQuery(window).on("load", function () {

//exibe e esconde o input de busca
    jQuery('#search').on('click', function () {
        jQuery(".header__form_busca").toggleClass("visible");
    });
    
    // modal da busca
     jQuery('#myModal').modal();
   
});
