$(function(){
   readyFn();
   
   add_to_nav();
   
});


function readyFn(){
    console.log('Custom.js loaded');
}

function add_to_nav(){
   var find_sub = $('#menu-main-menu>a');
    
    $(find_sub).last().addClass("dap_join");
    console.log('adding menu class');
}
