
$(document).ready(function() {
    $('.dataTable').DataTable();

});
var navHeader = document.getElementsByTagName("header");
$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if (scroll > 1) {
        $('header').addClass('bg-white shadow rounded-b-lg')
    }
    else{
        $('header').removeClass('bg-white shadow rounded-b-lg')
    }

});

