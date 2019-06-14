(function($) {

    var $container = $('#portfolioItems');

    $container.isotope({
      itemSelector: '.portfolio-item',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer'
      }
    });

    $('#filters').on('click', "a", function() {
        $(this).siblings().removeClass("active").end().addClass("active");
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        return false;
    })

})(jQuery);
