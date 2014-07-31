(function ($, root, undefined) {
	
	$(function () {

        $('.dropdown').hover(function() {
            $(this).toggleClass('open');
        });

        $('.dropdown').click(function(){
            window.location = $(this).children("a").attr('href');
        })

        $("#slider-wrapper").after($("#meteor-buttons"));

        var slider = $('#sliderp').bxSlider({
            slideWidth: 175,
            minSlides: 5,
            maxSlides: 5,
            slideMargin: 30,
            moveSlides: 1,
            pager: false,
            auto: true,
            autoStart: true,
            autoHover: true,
            controls: false
        });

        $("#doLeft").click(function(){
            slider.goToNextSlide();
        });

        $("#doRight").click(function(){
            slider.goToPrevSlide();
        })

        $(".news-header").click(function(){
            $(this).parent('div').find('.news-description').toggle('slow');
            $(this).parent('div').find('.img-h').toggle();
            $(this).parent('div').find('.img-o').toggle();
        });

	});
	
})(jQuery, this);

