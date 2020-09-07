$(document).ready(function() {
	var cls = {
		hidden   : '--hidden',
		toggle   : '--toggle',
		scroll   : '--scroll',
		unhover  : '--unhover',
		selected : '--selected',
		checked  : '--checked',
		show     : '--show',
		error    : '--error',
		hover    : '--hover',
		focus    : '--focus',
		filled   : '--filed'
	}

	var c = {
		state: {
			active: 'active',
			filled: 'filled',
			valid: 'valid',
			error: 'error',
			focus: 'focus',
			checked: 'checked',
			required: 'required'
		},
		sElem: '__',
		sMode: '_'

	};

	$('.services__head').on('click', function () {
		var item = $(this).parents('.services__item');

		item.toggleClass(cls.toggle);
		item.siblings().removeClass(cls.toggle);
	});

	var input = {
		class: {
			block: 'input',
			area: 'area'
		},
		block: null,
		placeholder: null,
		area: null,
		value: null,
		Vars: function(block){
			this.block = block.parents('.' + this.class.block);
		},
		Filled: function(block){
			this.Vars(block);
			this.value = block.val();
			if (this.value != ''){
				this.block.addClass(cls.filled)
			}
			else {
				this.block.removeClass(cls.filled)
			}
		},
		OnFocus: function(block){
			this.Vars(block);
			this.block.addClass(cls.focus).removeClass(this.class.block + c.sMode + c.state.error);
		},
		UnFocus: function(block){
			this.block = block.parents('.' + this.class.block);
			this.block.removeClass(cls.focus);
		},
		Init: function () {
			this.area = '.' + input.class.block + c.sElem + input.class.area;
			$(window).on('load', function () {
				$('body').find(input.area).each(function () {
					input.Filled($(this));
				})
			});
			$(this.area).on('focusin', function () {
				input.OnFocus($(this));
			});
			$(this.area).on('focusout', function () {
				input.UnFocus($(this));
			});
			$(this.area).on('keyup', function () {
				input.Filled($(this));
			});
			$('.' + this.class.block + '_phone ' + this.area).mask('+7 (000) 000-00-00'); // phone mask
		}
	};

	function valueElementForm(nameElement, nameBlock) {
		var newNameElement = '.' + nameElement;
			element = $(newNameElement);
		element.each(function(index, el) {
			var elementInput = $(this).find($(nameBlock)),
				elementLabel = $(this).find($('label')),
				elementValue = index + 1;
			elementInput.attr('id', nameElement + '-' + elementValue);
			elementLabel.attr('for', nameElement + '-' + elementValue);
		});

	}
	valueElementForm('input', 'input');

	input.Init();
	$('.input.--phone .input__area').mask('+7 (000) 000-00-00');



	$('.slider__list').slick({
		fade: true
	});

	$('.team__list').slick({
		slidesToScroll: 4,
		slidesToShow: 4,
		dots: true,
			responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToScroll: 2,
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 767,
				settings: {
					dots: false,
					slidesToScroll: 1,
					slidesToShow: 1,
				}
			}
			]
	});

	$('.photos__list').slick({
		slidesToScroll: 1,
		variableWidth: true,
		arrows: false,
		rows: 2,
		dots: true,
		// responsive: [
		// 	{
		// 		breakpoint: 767,
		// 		settings: {
		// 			arrows: true
		// 		}
		// 	},
		// ]
	});

	
	function toggler(block) {
		var body = block.find('.problems__body');
		if(block.hasClass(cls.toggle)){
			body.slideDown(300);
		} else{
			body.slideUp(300);
		}
	}

	$('.problems__item').each(function () {
		toggler($(this));
	})
	

	$('.problems__head').on('click', function () {
		var item = $(this).parents('.problems__item'),
				imgs = item.find('.imgs__list');
		item.toggleClass(cls.toggle);
		toggler(item);
	});


	var hum = $('.hum'),
			nav = $('.header__inner'),
			inner = $('html, body'),
			innerClass = '--scroll-none'

	function toggleNav() {
		hum.toggleClass(cls.toggle);
		nav.toggleClass(cls.toggle);
		inner.toggleClass(innerClass);
	}

	hum.on('click', function () {
		toggleNav();
	});
	
	$('.nav__list li.--subnav > a').on('click', function () {
	    event.preventDefault();
	    if($(window).width() < 768){
			var ul = $(this).siblings('ul');
			if (ul.length == 1) {
				ul.slideToggle(300);
			}
		}
	});

	$('.nav__list li.--subnav > a > span').on('click', function () {
	    var link = $(this).parents('a');
	    window.location = link.attr('href');
	});

	$(window).on('resize', function () {
		if($(window).width() > 767){
			$('.nav__list li.--subnav ul').removeAttr('style');
		}
	})
	
	$(document).on('af_complete', function(event, resp) {
	    if(resp.success){
	        $.fancybox.close();
            $.fancybox.open({src  : '#popup-thanks',type : 'inline'});

	    }
	});
	$("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 1500);
        return false;
    });

});
