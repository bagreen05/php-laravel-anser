$(document).foundation({
        orbit: {
            animation: 'fade',
            timer_speed: 3000,
            animation_speed: 1000,
            navigation_arrows: false,
            bullets: false,
            next_on_click: true,
            slide_number: false,
            pause_on_hover: false
        }
    }

);

jQuery.fn.getClasses = function(){
    var ca = this.attr('class');
    var rval = [];
    if(ca && ca.length && ca.split){
        ca = jQuery.trim(ca); /* strip leading and trailing spaces */
        ca = ca.replace(/\s+/g,' '); /* remove doube spaces */
        rval = ca.split(' ');
    }
    return rval;

}

$('#logo-image').addClass('animated flip');

setTimeout(function(){
    $('#header-contact').addClass('animated tada');
}, 3000)
