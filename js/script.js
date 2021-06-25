jQuery( function() {
    jQuery(".c-menu-button__button, .c-drawer__icon ").on("click",function(){
        jQuery("body , .c-drawer__icon , .l-contents__right, .c-menu-button").toggleClass("is-active");
     });

    });