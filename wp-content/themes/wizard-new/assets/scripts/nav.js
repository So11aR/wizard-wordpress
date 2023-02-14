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

let menuItem318 = document.querySelector('#menu-item-318')
console.log(menuItem318); 
let subMenu1 = menuItem318.querySelector('.element-wrapper');
subMenu1.classList.add('col4-4')

let menuItem319 = document.querySelector('#menu-item-319')
console.log(menuItem319); 
let subMenu2 = menuItem319.querySelector('.element-wrapper');
subMenu2.classList.add('col3-3')

let menuItem320 = document.querySelector('#menu-item-320')
console.log(menuItem320); 
let subMenu3 = menuItem320.querySelector('.element-wrapper');
subMenu3.classList.add('col3-3')
