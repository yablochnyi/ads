
import $ from 'jquery'
window.jQuery = $
window.$ = $
import '~/app/libs/swiper-bundle.min.js'
import '~/app/libs/jquery.maskedinput.min.js'

document.addEventListener('DOMContentLoaded', () => {

	$(window).scroll(function() {
		var top = $(document).scrollTop();
		if (top < 300) {
			$(".header").removeClass('header--active');
		}
		else {
			$(".header").addClass('header--active');
		}
	});

	$('.nav__sidebar-item').on('mouseenter', function() {
		$('.nav__sidebar-item').removeClass('nav__sidebar-item--active');
		$(this).addClass('nav__sidebar-item--active');
		const id = $(this).attr('id').slice(4);
		$('.nav__content-item').removeClass('nav__content-item--active');
		$(`.nav__content-item[data-nav-id=${id}]`).addClass('nav__content-item--active');
	});

	const menuBtn = $('.menu-btn');
	const menu = $('.nav');
	let menuState = false;
	menuBtn.on('click', function() {
		return toggleMenu()
	});

	$('.nav__bg').on('click', function() {
		return toggleMenu()
	});

	const toggleMenu = () => {
		if (menuState) {
			$('body').removeClass('overflow');
			menuBtn.removeClass('menu-btn--active');
			menu.removeClass('nav--active');
		}
		else {
			$('body').addClass('overflow');
			menuBtn.addClass('menu-btn--active');
			menu.addClass('nav--active');
		}

		return menuState = !menuState;
	}
	
	$('.open-modal').on('click', function(e) {
		e.preventDefault();
		const id = $(this).data('modal');
		$(`#${id}`).addClass('modal--active')
	});

	$('.modal__reset-link').on('click', function(e) {
		e.preventDefault();
		$('#auth').removeClass('modal--active');
		$('#reset').addClass('modal--active');
	});

	$('.btn--reg').on('click', function(e) {
		e.preventDefault();
		$('#auth').removeClass('modal--active');
		$('#reg').addClass('modal--active');
	});

	$('.modal__auth-account a').on('click', function(e) {
		e.preventDefault();
		$('#reg').removeClass('modal--active');
		$('#auth').addClass('modal--active');
	});

	$('.modal__close').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.modal').removeClass('modal--active');
	});

	$('.modal__overlay').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.modal').removeClass('modal--active');
	});
	
	$('.modal__tab').on('click', function(e) {
		e.preventDefault();
		const id = $(this).attr('id').slice(-1);
		$('.modal__tab').removeClass('modal__tab--active');
		$(this).addClass('modal__tab--active');
		$('.modal__item').removeClass('modal__item--active');
		$(`.modal__item[data-modal-tab="${id}"]`).addClass('modal__item--active');
	});

	$('.modal__form-select__current').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.modal__form-select').toggleClass('modal__form-select--active');
	});

	const phoneMask = {
		ru: '+7 (999) 999-99-99',
		ua: '+38 (099) 999-99-99',
		tr: '+\\90 (999) 999-99-99',
	}
	$('.modal__form-select__list li').on('click', function(e) {
		e.preventDefault();
		const country = $(this).data('country') || 'ru';
		const mask = $(this).data('mask') || phoneMask.ru;
		const select = $(this).closest('.modal__form-select');
		const input = $(this).closest('.modal__form-select').parent().find('.phone-input');
		select.find('.modal__form-select__current img').attr('src', `images/icons/flag/${country}.svg`);
		select.find('.modal__form-select__current span').text(mask);
		select.removeClass('modal__form-select--active');
		input.inputmask(phoneMask[country]);
	});

	$('.card__more-btn').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.card__more').toggleClass('card__more--active');
	});

	$('.card__tooltip button').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.card__more').toggleClass('card__more--active');
	});

	$(document).mouseup(function (e) {
		if ($(e.target).closest(".card__more--active").length === 0) {
			$(".card__more").removeClass('card__more--active');
		}

		if ($(e.target).closest(".messages__select--active").length === 0) {
			$(".messages__select").removeClass('messages__select--active');
		}
	});

	$('.messages__select-toggle').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.messages__select').toggleClass('messages__select--active');
	});

	$('.messages__select-box__item').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.messages__select').toggleClass('messages__select--active');
	});

	$('.card__favorite').on('click', function(e) {
		$(this).toggleClass('card__favorite--active');
	});

	const promoSlider = new Swiper('.promo__slider-wrap', {
		slidesPerView: 7,
		spaceBetween: 3,
		navigation: {
			nextEl: '.promo__nav-arrow--next',
			prevEl: '.promo__nav-arrow--prev',
		  },
	});

	const productThumbs = new Swiper('.product__thumbs', {
		spaceBetween: 4,
		slidesPerView: 8,
		loop: false,
		watchSlidesProgress: true,
	});

	const productSlider = new Swiper('.product__gallery-slider-wrap', {
		slidesPerView: 1,
		loop: false,
		navigation: {
			nextEl: '.product__gallery-arrow--next',
			prevEl: '.product__gallery-arrow--prev',
		},
		thumbs: {
			swiper: productThumbs,
		},
	});

	$('.product__show-map').on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('product__show-map--active');
		$('.product__map').toggleClass('product__map--active');
	});

	$('.tab').on('click', function(e) {
		e.preventDefault();
		const id = $(this).attr('href');
		console.log(id);
		$('.tab').removeClass('tab--active');
		$(this).addClass('tab--active');
		$('.tab__item').removeClass('tab__item--active');
		$(`${id}`).addClass('tab__item--active');
	});

	$('.chat__show').on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('chat__show--active');
		$('.chat').toggleClass('chat--visible-chat');
	});

	$('.js-show-chat').on('click', function(e) {
		e.preventDefault();
		$('.chat').addClass('chat--active');
	});

	$('.chat__back').on('click', function(e) {
		e.preventDefault();
		$('.chat').removeClass('chat--active');
	});

	$('.chat__btn--attach').on('click', function(e) {
		e.preventDefault();
		$('.chat__tooltip').toggleClass('chat__tooltip--active');
	});

	$(".phone-input").inputmask("+7 (999) 999-99-99");
});
