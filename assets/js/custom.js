$(function(){
   readyFn();
   
   add_to_nav();
   
   add_cart_to_nav();
   
});


function readyFn(){
    console.log('Custom.js loaded');
}

function add_to_nav(){
   var find_sub = $('#menu-main-menu>a');
    
    $(find_sub).last().addClass("dap_join");
    console.log('adding menu class');
}

function add_cart_to_nav(){
    var get_cart = $('.dap_top_link');

    
    $(get_cart).first().prepend("hello worlds");
    console.log('getting cart');
}

// function appendText() {
//     var txt1 = "<a class="dap_top_link dap_cart" href="<?php echo edd_get_checkout_uri(); ?>Cart (<span class="header-cart edd-cart-quantity"><?php echo edd_get_cart_quantity(); ?></span>)
//     </a>";"               // Create element with HTML  
//     var txt2 = $("<p></p>").text("Text.");   // Create with jQuery
//     var txt3 = document.createElement("p");  // Create with DOM
//     txt3.innerHTML = "Text.";
//     $("body").append(txt1, txt2, txt3);      // Append the new elements 
// }

//   <a class="dap_top_link dap_cart" href="<?php echo edd_get_checkout_uri(); ?>">
//     	Cart (<span class="header-cart edd-cart-quantity"><?php echo edd_get_cart_quantity(); ?></span>)
//     </a>