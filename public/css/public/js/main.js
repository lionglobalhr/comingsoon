$(document).ready(function(){
    init_input_fields();
    init_select_fields();
    initSectionSlider()
});

/**
 * Event on input field focus
 *
 */
$(document).on('focusout', '.section_3 .input-text', function(){
    var textWidth = $(this).getTextWidth();
    $(this).css({
        width: textWidth
    });
});

/**
 * Attach files to form
 *
 */
$(document).on('change', '#attach', function(){
    var attachedDocument = $('#attach').prop('files')[0];

    var item = $('.icon-text');

    item.css('color', '#000').text(attachedDocument.name);
});

/**
 * First init input fields
 *
 */
function init_input_fields(){
    var targetElems = $('.section_3 .input-text');

    if( targetElems ){
        targetElems.each(function(){
            var textWidth = $(this).getTextWidth();
            $(this).css({
                width: textWidth
            });
        });
    }
}

/**
 * First init select fields
 *
 */
function init_select_fields(){
    var targetElems = $('.section_3 .input-select');
    targetElems.styledSelect();
}

/**
 * Init home section-slider
 *
 */
function initSectionSlider(){
    if( $('.section').length > 1 ){
        new fullpage('.sections', {
            section: '.section',
            scrollOverflow: true,
            normalScrollElements: '.section_3',
            responsiveWidth: 768,
            responsiveHeight: 600,
            responsiveSlides: true,
            onLeave: function( origin, destination, direction ){
                var header = $('.header');
                destination.index === 0 && header.hasClass('black') ?
                    header.removeClass('black') :
                    header.addClass('black');
            }
        });
    }

    $(document).on('click', '.go-top, #logo', function(){
        fullpage_api.moveTo(1);
    });

    $(document).on('click', '.scroller', function(){
        fullpage_api.moveTo(2);
    });
    
    $(document).on('click', '.submit-resume', function(){
        fullpage_api.moveTo(4);
    })
}


/**
 * jQuery plugin to get text width, from input field
 *
 */
$.fn.getTextWidth = function(custom_text){
    if( !$.fn.getTextWidth.fakeEl ){
        $.fn.getTextWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    }
    
    var text = custom_text || this.val() || this.text() || this.attr('placeholder');
    var font = this.css('font');

    $.fn.getTextWidth.fakeEl.text( text ).css( 'font', font );
    
    return $.fn.getTextWidth.fakeEl.width();
};

/**
 * jQuery plugin to stylize select
 *
 */
$.fn.styledSelect = function(){
    var selectElems = $(this);

    if( selectElems ){
        selectElems.each(function(){
            var targetElem = $(this);
            var targetOptionsElems = targetElem.find('option');
            var targetSelectedOption = targetElem.val();

            var styledSelectElem = $('<span>', {
                class: 'styled-select'
            });

            var styledSelectVal = $('<span>', {
                class: 'styled-select__val',
                text: targetSelectedOption
            });

            var styledSelecOptions = $('<span>', {
                class: 'styled-select__options',
            });

            //hide old select element
            targetElem.hide();
            
            //select options
            targetOptionsElems.each(function(){
                var optionClases =  $(this).text() === targetSelectedOption ? 'styled-select__options__val selected' : 'styled-select__options__val';
                $('<span>', {
                    class: optionClases,
                    text: $(this).text()
                }).appendTo(styledSelecOptions).click(function(){
                    
                    targetSelectedOption = $(this).text();
                    styledSelectVal.text( targetSelectedOption );
                    targetElem.val( targetSelectedOption );

                    $(this).parents('.styled-select')
                        .find('.styled-select__options__val.selected')
                        .removeClass('selected');
                    
                    $(this).addClass('selected');

                    styledSelectElem.removeClass('active');
                });
            });

            //generate new select element
            styledSelectVal.appendTo(styledSelectElem);
            styledSelectVal.click(function(){
                styledSelectElem.toggleClass('active');
            });
            styledSelecOptions.appendTo(styledSelectElem);
            styledSelectElem.insertBefore(targetElem);

            $(document).on('click', 'body', function(e){
                var styledSelectElement = targetElem.find('.styled-select');
                if( !styledSelectElem.is( e.target ) && styledSelectElem.has( e.target ).length === 0 && styledSelectElem.hasClass('active') ){
                    styledSelectElem.removeClass('active');
                }
            })
        });
    }
};

/**
 * Show/hide nav bar
 *
 */
function open_nav(){
    var header_menu = $('#header-menu');
    if( !header_menu.hasClass('open') ){

        anime({
            targets: '#nav-bar',
            translateX: ['100%', '0%'],
            easing: 'easeInOutCubic',
            duration: 600,
            begin: function(anim) {
                $('#navbar-overlay').addClass('open');
            },
            complete: function() {
                header_menu.addClass('open');
            }
        });

        
    }
}

function close_nav(){
    var header_menu = $('#header-menu');
    if( header_menu.hasClass('open') ){
        anime({
            targets: '#nav-bar',
            translateX: ['0%', '100%'],
            easing: 'easeInOutCubic',
            duration: 600,
            update: function(anim) {
                if(anim.progress > 50){
                    $('#navbar-overlay').removeClass('open');
                }
            },
            complete: function() {
                header_menu.removeClass('open');
            }
        });

        
    }
}

$(document).on('click', '#header-menu', open_nav);
$(document).on('click', '#close-nav', close_nav);
$(document).on('click', 'body', function(e){
    var header_menu = $('#header-menu');
    var nav_bar = $('#nav-bar');
    if( header_menu.hasClass('open') && !nav_bar.is( e.target ) && nav_bar.has( e.target ).length === 0 ){
        close_nav();
    }
});

/**
 * Navigation links
 *
 */

function go_to_slide( slide_num ){
    fullpage_api.moveTo( slide_num );
    close_nav();
}


/**
 * Show/hide popup
 *
 */
$(document).on('click', 'a.step-send', function(){
    var popup = $('#popup');

    popup.fadeIn();
});
$(document).on('click', 'a#close-nav-popup', function(){
    var popup = $('#popup');

    popup.fadeOut();
});
$(document).mouseup(function (e) {
    var popup = $("#popup");

    if (popup.has(e.target).length === 0){
        popup.fadeOut();
    }
});

/**
 * header style on mobile
 *
 */
$(window).scroll(function(e){
    var header = $('.header');
    var body = $('body');

    if ($(this).scrollTop() > 10 && body.hasClass('fp-responsive') ){
        header.addClass('black');
    }
    if ($(this).scrollTop() < 10 && body.hasClass('fp-responsive') ){
        header.removeClass('black')
    }
});

var vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', '${vh}px');
window.addEventListener('resize', function(){
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', '${vh}px');
});