$(function(){

	// Показать tooltip логина
	$('.login__link').on('click', (e) => {
		console.log($(e.target).parent().toggleClass('active'));
	});


	// Скрыть tooltip
	$(document).on('click', function(e) {
		if (!$(e.target).closest(".login").length) {
			$('.login').removeClass('active');
		}

		e.stopPropagation();
	});


	// Фильтр
	$('#all-brands').on('change', function(e) {
		$(this).closest('form').trigger('reset');
	});

	$('.checkbox__input').not($('#all-brands')).on('change', function(e) {
		if($('#all-brands').prop('checked')) {
			$('#all-brands').prop('checked', false);
		}
	});


	// Табуляция
	$('.tabs__link').on('click', function(e) {
		e.preventDefault();

		var tabs = $(this).closest(".tabs")[0],
		content = $(tabs).find(".tabs__content"),
		caption = $(tabs).find(".tabs__link");

		// переключить вкладку
		$(content).removeClass('active');
		$(content.filter(this.hash)[0]).addClass('active');

		// переключить нафигацию
		$(caption).removeClass('active');
		$(caption.filter(this.hash)[0]).addClass('active');
		$(this).addClass('active');

		return;
	});


	/**/
	/** Календарь
	/**/
	var dayclick = function(cl, date, evt) {
		if(!evt) return;

		if($.isArray(evt)) {
			$(evt).each(function(i, el) {
				show_event(cl, el.object);
			});
		} else {
			show_event(cl, evt.object);
		}
	}

	var load_events = function(mes) {
		novembro = [
			{
				date: new Date('2013', '10', '01'),
				object: {
					'img': '/img/estel_logo.png',
					'desc': 'Презентация новинок! Тестирование! Управление цветом. Седина. Работа с осветляющими средствами и тонирование (DL, HCE). Техники окрашивания.',
					'date': '10:00, четверг',
					'link': 'http://yandex.ru'
				},
			},

			{
				date: new Date('2013', '10', '12'),
				object: {
					'img': '/img/estel_logo.png',
					'desc': 'Презентация новинок! Тестирование! Управление цветом. Седина. Работа с осветляющими средствами и тонирование (DL, HCE). Техники окрашивания.',
					'date': '10:00, четверг',
					'link': 'http://yandex.ru'
				},
			},

			{
				date: new Date('2013', '10', '19'),
				object: {
					'img': '/img/estel_logo.png',
					'desc': 'Презентация новинок! Тестирование! Управление цветом. Седина. Работа с осветляющими средствами и тонирование (DL, HCE). Техники окрашивания.',
					'date': '10:00, четверг',
					'link': 'http://yandex.ru'
				},
			},
			
			{
				date: new Date('2013', '10', '21'),
				object: {
					'img': '/img/estel_logo.png',
					'desc': 'Презентация новинок! Тестирование! Управление цветом. Седина. Работа с осветляющими средствами и тонирование (DL, HCE). Техники окрашивания.',
					'date': '10:00, четверг',
					'link': 'http://yandex.ru'
				},
			}
		]

		dezembro = [
			{
				date: new Date('2013', '11', '25'),
				object: {
					'img': '/img/estel_logo.png',
					'desc': 'Презентация новинок! Тестирование! Управление цветом. Седина. Работа с осветляющими средствами и тонирование (DL, HCE). Техники окрашивания.',
					'date': '10:00, четверг',
					'link': 'http://yandex.ru'
				},
			},
			
			{
				date: new Date('2013', '11', '31'),
				object: {
					'img': '/img/estel_logo.png',
					'desc': 'Презентация новинок! Тестирование! Управление цветом. Седина. Работа с осветляющими средствами и тонирование (DL, HCE). Техники окрашивания.',
					'date': '10:00, четверг',
					'link': 'http://yandex.ru'
				},
			},
		]

		if( mes == 10 ) {
			return novembro;
		} else if( mes == 11 ) {
			return dezembro
		} else {
			return []
		}
	}

	var show_event = function(cl, evt) {
		var elem = $(cl).find('.calendar__event')[0];
		$(elem).html('');
		$(elem).append('<img src="' + evt.img + '" class="calendar__img" alt="" />');
		$(elem).append('<p class="calendar__desc">' + evt.desc + '</p>');
		$(elem).append('<span class="calendar__data-time">' + evt.date + '</span>');
		$(elem).append('<a href="' + evt.link + '" class="calendar__more">Записаться</span>');
	}


	var calendar = $('.calendar').calendarjs({
		width: "100%",
		height: "auto",
		
		day_click_cb: dayclick,
		month_change_cb: function() {}
	});
		
	calendar.set_events(load_events(10));

	// Получить json
	// $.getJSON( "/ajax/events.json", function(data) {
	// 	var json = calendar.set_events(data);
	// });
});