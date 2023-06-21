jQuery(function($){
	//News
	//Клик по пагинации после смены года в новости
	function changeYear() {
		$('.page-numbers:not(.prev):not(.next)').click(function(e){
			let currentYear = $('.select-news-year').val(),
				currentPage = $(this).text(),
				data = {
					'action': 'loadmoreYear',
					'page' : currentPage,
					'year' : currentYear,
				};
			$.ajax({
				url:'/wp-admin/admin-ajax.php', // обработчик
				data:data, // данные
				type:'POST', // тип запроса
				beforeSend:function(data){
					$('.news-list a').remove();
					$('.pagination').remove();
					$('.pagination-list').remove();
				},
				success:function(data){
					$(data).prependTo('.news-list');
				}
			});
			e.preventDefault();
		});
	};
	//
	//Смена года в новости
	$('.select-news-year').change(function(){
		let currentYear = $('.select-news-year').val(),
			data = {
				'action': 'loadmore',
				'year' : currentYear,
			};
		$.ajax({
			url:'/wp-admin/admin-ajax.php', // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			beforeSend:function(data){
				$('.news-list a').remove();
				$('.pagination').remove();
				$('.pagination-list').remove();
			},
			success:function(data){
				$(data).prependTo('.news-list');
				changeYear();
			}
		});
	});
	//News End
});