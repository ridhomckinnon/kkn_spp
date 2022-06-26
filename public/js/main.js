
$(document).ready(function() {
    $.fn.DataTable.ext.pager.numbers_length = 4;
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
           .columns.adjust();
     });
    $('.dataTable').DataTable({
        scrollX: true,
        pagingType: 'simple_numbers',
        lengthChange: false,
    });

});
var navHeader = document.getElementsByTagName("header");
$(window).scroll(function(){
    var viewport_width = window.innerWidth;
	var scroll = $(window).scrollTop();
	if (scroll > 1) {
        $('header').addClass('bg-white shadow rounded-b-lg')
    }
    else{
        $('header').removeClass('bg-white shadow rounded-b-lg')

    }


});

