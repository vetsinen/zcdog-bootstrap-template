$(function() {
    $('#sidebox-velaro a').clone().appendTo('#f-products-velaro'); 
 });

if ($('.f-tab-header').length > 0) {
    $('.f-tab-header').click(function(e) {
        $(e.target).toggleClass('f-tab-header-active');
        $('#' + e.target.dataset.fdt).toggleClass('f-tab-body-active');
    });
}

if ($('.f-question-header').length > 0) {
    $('.f-question-header').click(function(e) {
        $(e.target).toggleClass('f-question-header-active');
        $('#' + e.target.dataset.fdt).toggleClass('f-question-body-active');
    }); 
}

if ($('.f-short-tab-link').length > 0) {
    $('.f-short-tab-link').click(function(e) {
        $('.f-short-tab-link').removeClass('f-short-tab-link-active');
        $('.f-short-tab-content').removeClass('f-short-tab-content-active');
        $(e.target).addClass('f-short-tab-link-active');
        $('#' + e.target.dataset.fdt).addClass('f-short-tab-content-active');
    });  
}

if ($('.products-bar').length > 0) {
    $('.products-bar').appendTo($('.stuck-nav'));
}

if ($('.products-bar_btn').length > 0) {
    $('.products-bar_btn').click(function() {
        $('.button_in_cart, .buybtn_input').click();    
    });
}

if ($('.products-bar-fixed').length > 0) {
    if ($('#productAttributes').length > 0) {
        $('.products-bar-fixed-text').text('Select options');
    } else {
        $('.products-bar-fixed-text').text('Add to cart');
    }
    $('.products-bar-fixed-btn').click(function() {
        if ($('#productAttributes').length > 0) {
            var top = $('#productAttributes').offset().top - $('.stuck-nav').height();
            $("body,html").animate({scrollTop: top}, 1500);
		    return false;
        } else {
            $('.button_in_cart, .buybtn_input').click(); 
        }
    });
}

function changeProductsBar(element) {
    switch (element.type) {
        case 'select':
        case 'select-one':
            changeIdTagField(element);
            $('#' + element.id + '-top span').text(element.options[element.selectedIndex].text);
            break;
        case 'text':
        case 'number':
            if ($(element).hasClass('quantity-input')) {
                $('.products-bar__qty span').text(element.value);  
            } else {
                $('#' + element.id + '-top span').text(element.value);    
            }
            break;
        case 'checkbox':
        case 'radio':
            $('#' + element.id + '-top span').text(element.value);
            break;
    }
}

function changeIdTagField(element) {
    var tagValue = element.options[element.selectedIndex].text;
    
    if (tagValue == 'blank id tag') {
        $('.products-bar').find('p').each(function() {
            if ($(this).text().indexOf('Engraving line') + 1) {
                $(this).addClass('hide');
            }    
        });
    } else if (tagValue == 'please engrave my id tag') {
        $('.products-bar').find('p').each(function() {
            if ($(this).text().indexOf('Engraving line') + 1) {
                $(this).removeClass('hide');
            }    
        }); 
    }
}
