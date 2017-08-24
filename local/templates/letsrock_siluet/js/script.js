$(function(){

	// Показать tooltip логина
	$('.login__link').on('click', function(e) {
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
    function getDiv(html){
    	txt = html.split('<!--start-->');  txt = txt[1];
    	txt = txt.split('<!--end-->');  return txt[0];}
    $(document).on('submit', '#formtran', function() {
    	var data=$(this).serialize();
    	$.ajax({
			url: $(this).attr('action')+'?'+data+'&set_filter=Y',
			success: function(data) {
				$('.treners').html(getDiv(''+data+''));
			}
    	});
    	return false;
    });

    $(document).on('submit', '.setting', function() {
        var data=$(this).serialize();
        $.ajax({
            url: $(this).attr('action')+'?'+data+'&set_filter=Y',
            success: function(data) {
                $('.programs').html(getDiv(''+data+''));
            }
        });
        return false;
    });
$('.button_gray').on('click', function(e) {
		$.ajax({
			success: function(data) {
				$('.form_op').html('<h4 style="color:#F50057">Сообщение отправлено</h4>');
				resetSelect();
			}
    	});	
		return;
	});


	// КОСТЫЛИЩЕ!!1!1!!!!1!!!!
	function resetSelect() {
		setTimeout(function() {
			$("select").selectmenu();
		}, 400);
	}


	
	

    var loading = false;
    $(window).scroll(function() {
        if ($(document).find('[name=pages]').length > 0 && !loading) {
            var a=$(document).find(".brand:last-child").offset();


            if($(document).scrollTop()+$(window).height()-$(".footer").height()-$(".copyright").height()>=a.top)  {
                loading = true;
                $.ajax({
                    url: $(document).find('[name = pages]').val(),
                    success: function(data) {
                        $(document).find('[name = pages]').remove();
                        $('.b-brand').append(getDiv(''+data+''));
                        loading =false;
                    }
                });
            }
        }
    });

	// Табуляция
	function getDiv2(html){
    	txt = html.split('<!--start2-->');  txt = txt[1];
    	txt = txt.split('<!--end2-->');  return txt[0];}

	// Табуляция
	$('.tabs__link').on('click', function(e) {
		e.preventDefault();
		$(this).addClass('active').parent('li').siblings('li').find('a').removeClass('active');
		$.ajax({
			url: $(this).attr('href'),
			success: function(data) {
				$('.tabs__content').html(getDiv2(''+data+''));
			}
    	});	
		return;
	});


$('.event').on('click', function(e) {
		e.preventDefault();

		var tabs = $(this).closest(".tabs")[0],
		content = $(tabs).find(".tabs__content"),
		caption = $(tabs).find(".classic-tab__link");

		// переключить вкладку
		$(content).removeClass('active');
		$(content.filter(this.hash)[0]).addClass('active');

		// переключить нафигацию
		$(caption).removeClass('active');
		$(caption.filter(this.hash)[0]).addClass('active');
		$(this).addClass('active');

		return;
	});

	// Модалки
	$("a[data-modal]").on('click', function(e) {
		var modal = $(this).data('modal');

		$("[data-modal=" + modal + "]").toggleClass('active');
		//$('body').toggleClass('hidden');
	});

	$(".modal__close").on('click', function(e) {
		$(this).closest('.g-modal').removeClass("active");
		//$('body').removeClass('hidden');
	});

	$('.g-modal__inner').on('click', function(e) {
		if($(e.target).closest('.modal, .tag-i').length) {
			return;
		}

		$(this).closest('.g-modal').removeClass("active");
		//$('body').removeClass('hidden');
	});

	$('body').keyup(function(e) {
		var symbol = e.key;

		if (e.which == 27) {
			$('.g-modal').removeClass("active");
			//$('body').removeClass('hidden');
		}
	});


	/**/
	/** Запись на семинар
	/**/
	if($(document).find(".semin_h").length>0) {
        $(document).find("[name=form_text_13]").val($(document).find(".semin_h").text());
	}

$('.mobile-link, .mobile-nav__clear').on('click', function(e) {
		$('body').toggleClass('hidden');
		$('.mobile-nav').toggleClass('active');
	});

});
