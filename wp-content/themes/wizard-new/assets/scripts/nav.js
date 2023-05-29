$(function(){
	$('.nav-menu li.dop').hover(function() {
			$(this).addClass('active-menu');
			$(this).find('ul').addClass('showme1');
			$('.bg-black').addClass('showme2');
		},
		function() {
			$(this).removeClass("active-menu");
			$(this).find('ul').removeClass('showme1');
			$('.bg-black').removeClass('showme2');
		});
});

let menuItem319 = document.querySelector('#menu-item-319')
let subMenu1 = menuItem319.querySelector('.element-wrapper');
subMenu1.classList.add('col4-4')

let menuItem324 = document.querySelector('#menu-item-324')
let subMenu2 = menuItem324.querySelector('.element-wrapper');
subMenu2.classList.add('col3-3')

let menuItem326 = document.querySelector('#menu-item-326')
let subMenu3 = menuItem326.querySelector('.element-wrapper');
subMenu3.classList.add('col3-3')

let menuItem358 = document.querySelector('#menu-item-358')
let subMenu4 = menuItem358.querySelector('.element-wrapper');
subMenu4.classList.add('col4-4')

let menuItem381 = document.querySelector('#menu-item-381')
let subMenu5 = menuItem381.querySelector('.element-wrapper');
subMenu5.classList.add('col2-2')

let footerMenuItem404 = document.querySelector('#menu-item-404')
let footerMenuItem404Group = footerMenuItem404.querySelector('.footer-mobile');
footerMenuItem404Group.classList.add('col2-2', 'grid', 'custom-gap')