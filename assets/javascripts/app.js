$(window).on("scroll", function () {
    if ($(window).scrollTop() > 75) {
        $("header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("header").removeClass("active");
    }
});

// Calculating portfolio images wrapper width
function setupPortfolioImagesWidth() {
    var windowWidth = $(window).width();
    var wrapperPaddingLeft = 4;
    var imageRightMargin = 4;
    var wrapper = $('.portfolio-wrapper');
    var imageWrapper =  wrapper.find('a');
    var newQuantity;
    var newWidth;
    function imageWrapperSizes (size) {
        newQuantity = parseInt((wrapper.width() - wrapperPaddingLeft)/(size + imageRightMargin));   
        newWidth = ((wrapper.width() - wrapperPaddingLeft)-(newQuantity*4))/(newQuantity);
        imageWrapper.width(newWidth);
        imageWrapper.height(newWidth);        
    }
    if (windowWidth > 767) {
        imageWrapperSizes(200);
    }
    else {
        imageWrapperSizes(150);
    }
    if ((newQuantity*3)<imageWrapper.length) {
        var imageWrapperLength = imageWrapper.length;
        var variableQuantity = newQuantity*3;
        imageWrapper.css('display', 'none');
        imageWrapper.slice(0, variableQuantity).css('display', 'inline-block');
        var i = 2;
        $('.btn-more').on('click', function() {
            var clickNumbers = parseInt(i++);
            imageWrapper.slice(0, variableQuantity*clickNumbers).css('display', 'inline-block');
            
            var portfolioImgWrapper = $(this).closest('.portfolio-wrapper').find('.row-fluid a');
            portfolioImgWrapper.each(function () {
                var portfolioImg = $(this).find('img');
                portfolioImg.css({ 'width': 'auto', 'height': '100%' });
                if (portfolioImg.width() < portfolioImgWrapper.width()) {
                    portfolioImg.css({ 'width': '100%', 'height': 'auto' });
                }
            });  
            if ((variableQuantity*clickNumbers) > imageWrapperLength) {
                setTimeout(function(){
                    $('.btn-more').addClass('btn-off');
                }, 1600);
            }
            imageWrapper.slice(variableQuantity*(clickNumbers-1), variableQuantity*clickNumbers).hide().show(1500);
        });
    }
}

// Filling images
function fillImages() {
    var portfolioImgWrapper = $('.portfolio .portfolio-wrapper .row-fluid a');
    portfolioImgWrapper.each(function () {
        var portfolioImg = $(this).find('img');
        if (portfolioImg.width() < portfolioImgWrapper.width()) {
            portfolioImg.css({ 'width': '100%', 'height': 'auto' });
        }
    });        
}

// Active section link on scroll
function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('nav.navbar li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('nav.navbar li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}

$(window).on('resize', function () {
    setupPortfolioImagesWidth();
    fillImages();
});

$(document).ready(function () {
    fillImages();
    setupPortfolioImagesWidth();


    var maxHeight = 0;
    $('.teservice-box-image').each(function() {
      maxHeight = $(this).outerHeight() > maxHeight ? $(this).outerHeight() : maxHeight;
    }).outerHeight(maxHeight);

    $(".carousel").swiperight(function() {
        $(this).carousel('prev');
    });
    $(".carousel").swipeleft(function() {
        $(this).carousel('next');
    });

    $.reject({
        imagePath: 'assets/images/browser-reject/', 
        reject: { 
            all: false,
            msie: 8 
        }, 
        // Reject all renderers for demo  
        display: ['chrome', 'firefox', 'msie', 'safari'] // Displays only firefox, chrome, and opera  
    });  

    $(document).on("scroll", onScroll);

    $('.navbar-nav ul li a').smoothScroll({ speed: 400, offset: -63 });

    $('.nav li').each(function () {
        $(this).on('click', function () {
            $(this).closest('.nav').find('li').removeClass('active');
            $(this).addClass('active');
        })
    });

    $('.carousel').carousel({
        pause: true,
        interval: false
    });

    $('.portfolio-wrapper .row-fluid').each(function () {
        // event.preventDefault();
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            closeBtnInside: 'true',
            gallery: {
                enabled: true
            }
        });
    });
});

// End of horisontal scroll

$('.navbar-nav li a').click(function () {
    $('.navbar-collapse').removeClass('in');
});


// gooogle map api

var map;

function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 40.674, lng: -73.945 },
        zoom: 12,
        zoomControl: false,
        scrollwheel: false,
        disableDefaultUI: true,

        styles: [
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ]
    });
}


