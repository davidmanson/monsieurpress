/*
 * MonsieurPress Script file
 * Author: David MANSON
 */


;(function(){
    
    // Variables declarations
    var $body,
        $menuButtons,
        $mobileMenu,
        toggleMenu,
        onLoad;
    
    
    
    /*********************
     * On document ready 
     *********************/
    onLoad = function(){
        
        // Getting needed DOM
        $body        = document.getElementsByTagName('body')[0];
        $menuButtons = document.getElementsByClassName('js-menu-toggle');

        
        // Binding buttons to toggle
        var i = $menuButtons.length;
        while(i--) $menuButtons[i].addEventListener('click', toggleMenu);
        
    }
    
    
    /**********************
     * Toggle mobile menu
     **********************/
    toggleMenu = function(){
        console.log($body);
        $body.classList.toggle("is-menu-on");
    }
    
    
    // Binding page load
    document.addEventListener('DOMContentLoaded', onLoad);
})();






/***********************************************
    jQuery equivalent if you wants (you might)
************************************************/
/*
jQuery(document).ready(function($) {
    
    $('.js-menu-toggle').on('click', function(){
        $('.site-nav').slideToggle();
        $('body').toggleClass('menu-on');
    });
    
});
*/