$(document).ready(function () {




$(window).scroll(function (e) {




// Detect how far are we from the top of the page
let windowTop = $(this).scrollTop();
// Loop through every navigation menu item
$('.main-navigation a').each(function (event) {

    // Check for the current navigation item associated section
    // Check how far the associated section is from the top
    // If the associated section is as far as the user have scrolled, add 'active' class to the item.
    if (windowTop >= $($(this).attr('href')).offset().top - 100) {
        // Remove 'active' from previously highlighted menu items
        $('.main-navigation .active').removeClass('active');

        // Highlight the current menu item by adding 'active' class
        $(this).addClass('active');
    }
});





});
    // Our code will go here
});





$(document).ready(function() {
    $(".fancybox").fancybox({
        type: 'iframe',
        beforeLoad: function() {
            var caption = this.element.attr('data-caption');
            this.tpl.wrap = '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div><p>'+caption+'</p></div></div></div>'
                
        },
        
        helpers:  {
            title : {
                type : 'inside',
                position: 'top'
            }
        }
    });
});