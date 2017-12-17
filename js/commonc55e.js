// preload images - Usage:
// preloadImg([
//     '/i/imageName.jpg',
//     '/i/anotherOne.jpg',
//     '/i/blahblahblah.jpg'
// ]);

function preloadImg(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
    });
}


// Loader
var loader_degree = 0,
    loader_timer;

var loader_html = '	  	<div class="modal-loader">\
	  		<div class="modal-loader-icon">\
	  			<img src="/i/loader_line.png">\
	  		</div>\
	  		<div class="modal-loader-info"></div>\
	  	</div>';

function loader_go() {
	loader = $('.modal-loader-icon img');
    loader.css({ transform: 'rotate(' + loader_degree + 'deg)'});
    loader_timer = setTimeout(function() {
        loader_degree = loader_degree + 2;
        loader_go();
    }, 25);
}

function loader_start() {
    if ( $('.modal-body .modal-loader').length == 0 ) {
        $('.calculator_modal_body').append($(loader_html));
    }
	$('.modal-body').addClass('loading');
	loader = $('.modal-loader-icon img');
    loader_go();
}

function loader_stop() {
	$('.modal-body').removeClass('loading').find('modal-loader').remove();
    clearTimeout(loader_timer);
}


function renderClientUnreadedMessagesCount(count) {
    if ( typeof(count) == 'undefined' ) return false;
    var count = parseInt(count);
    var $el = $('.j-client-unreaded-messages-count');
    if ( $el.length ) {
        $el.text(count);
        if (count <= 0) {
            $el.addClass('hidden');
        }
        else {
            $el.removeClass('hidden');
        }
    }
}


$(document).ready(function(){

	//  custom_tabs
	$('.custom_tabs a').on('click', function(){
		var tabs         = $('.custom_tabs a'),
			active_class = 'btn-primary';
		if ($(this).hasClass(active_class)) return false;
		tabs.not($(this)).removeClass(active_class);
		$(this).addClass(active_class);
	});

    $('.j_toggle-month-table').on('click', function () {
        $(this).toggleClass('opened');
        $(this).next('tbody').toggleClass('hidden');
    });
});

function toGhs(value) {
    return value * BO2FO_CONVERT_MULTIPLIER;
}

function fromGhs(value) {
    return value / BO2FO_CONVERT_MULTIPLIER;
}

$.validator.addMethod("walletFormat", function(value, element) {
    return /^[a-zA-Z\d]{33,35}$/.test(value);
}, "Wrong format.");

$.validator.addMethod("forbiddenSymbols", function(value, element) {
    return !/(>|<|"|`)/.test(value);
}, "Forbidden symbols.");

function blinkInvalidInputBorder( css_class, callback ) {
    var f = true, n = 6, el = $(css_class);
    (function() {
        el.toggleClass('input-error', f);
        f = ! f;
        if ( --n <= 0 ) {
            if (callback) callback();
        }
        else {
            setTimeout( arguments.callee, 200 );
        }
    })();
}

var langFix = {
        ind: 'id',
        ch: 'zh-cn',
        vn: 'vi',
        jp: 'ja'
    },
    lang = langFix[$.cookie('lang')] || $.cookie('lang') || 'en';

moment.locale(lang);

function formatDT(datetime, format) {
    var tm = $.cookie('tm') || 0;

    return moment(datetime).add(tm, 'm').format(format);
}
