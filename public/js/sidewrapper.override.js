$(document).ready(function(){
    if($(document).width() < 576){
        if(!$('#page-top').hasClass('sidebar-toggled')){
            $('#page-top').addClass('sidebar-toggled');
            $('#accordionSidebar').addClass('toggled');
        }
    }
})

$(window).resize(function(){
    if($(document).width() < 576){
        if(!$('#page-top').hasClass('sidebar-toggled')){
            $('#page-top').addClass('sidebar-toggled');
            $('#accordionSidebar').addClass('toggled');
        }
    }
});