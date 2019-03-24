$('[data-target="modal"]').on('click', function(event) {
    event.preventDefault();
    $('.modal').show();
});

$('.close').on('click', function(event) {
    event.preventDefault();
    $('.modal').hide();
});

$('.direction-blocks').slick({
    arrows: false,
    dots: true,
    slidesToShow: 4,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }

    ]
});

$(document).ready(function() {
    $( ".top-nav_btn" ).click(function(){ 
     $( ".top-nav_menu" ).slideToggle(); 
    });

    $( ".left-sidebar_btn" ).click(function(){ 
         $( ".left-sidebar_menu" ).slideToggle(); 
    });
});
