(function ($, root, undefined) {
	
	$(function () {

        $('.dropdown').hover(function() {
            $(this).toggleClass('open');
        });

        $('.dropdown').click(function(){
            window.location = $(this).children("a").attr('href');
        })
		
	});
	
})(jQuery, this);

