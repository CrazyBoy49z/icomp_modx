$(function() {
	// MENU
	var mobileScreen = 990;
	var appScreen = $('#app').width();

	console.log(appScreen);

	var menu = $('#menu');
	var burger = $('.burger');
	var head = $('#menu > .head');

	burger.click(function() {
		$(this).toggleClass('active');
		menu.toggleClass('active');
	});

	head.children('.sub_nav').hide();

	(function toggleUIbyScreenWidth() {
		$(window).resize(function() {
			appScreen = $('#app').width();
		});

		if (appScreen >= mobileScreen) {
			// desktop
			head.on('mouseenter', function() {
				$(this).addClass('active');
				$(this).children('.sub_nav').show();
			});
			head.on('mouseleave', function() {
				$(this).removeClass('active');
				$(this).children('.sub_nav').hide();
			});
		} else {
			// mobile
			head.on('click', function(e) {
				var opo = $(this).children('ul').length;
				e.preventDefault();
				if (opo) {
					head.children('.sub_nav').hide();
					$(this).children('.sub_nav').show();
				} else {
					var link = $(this).children('a').attr('href');
					window.location.href = link;
				}
			});
			$('.sub_nav a').on('click', function(e) {
				e.stopPropagation();
				window.location.href = $(this).attr('href');
			});
		}
	})();

	// FEEDBACK
	(function() {
		var ModalForm = $('#send-form');
		var name = $('#your_name');
		var tel = $('#your_tel');
		var email = $('#your_email');
		var theme = $('#your_theme');
		var msg = $('#your_message');
		var modalFooter = $('.modal-footer');
		var formGroup = $('.form-group');

		function Validator(obj) {
			if (!obj.val()) {
				obj.addClass('error');
				obj.focus();
				return false;
			}
			return true;
		}

		$('#your_name, #your_email, #your_message').on('keydown', function() {
			$(this).removeClass('error');
		});

		$('#send_form_button').on('click', function() {
			if (Validator(name) && Validator(email) && Validator(msg)) {
				var dataString =
					'fromName=' +
					name.val() +
					'&tel=' +
					tel.val() +
					'&email=' +
					email.val() +
					'&subject=' +
					theme.val() +
					'&message=' +
					msg.val();
				ModalForm.append("<div id='loader'></div>");
				$('#loader').addClass('loader');

				formGroup.hide();
				modalFooter.hide();
				$('.modal-title').hide();
				$('#send_form').hide();
				$.ajax({
					type: 'POST',
					url: 'http://icompliance.ru/feedback.html',
					data: dataString,
					dataType: 'html',
					success: function() {
						$('#loader').removeClass('loader');
						ModalForm.html("<div id='message_success'></div>");
						$('#message_success')
							.hide()
							.fadeIn(1500, function() {
								$('#message_success').append('<i class="icon-ok"></i>');
							})
							.html('<h2>Отправлено!</h2>')
							.append('<p>Скоро мы с вами свяжемся</p>');
					},
					error: function(XMLHttpRequest, textStatus, errorThrown) {
						ModalForm.removeClass('loader');
						ModalForm.html("<div id='message_success'></div>");
						$('#message_success').hide().fadeIn(1500, function() {
							$('#message_success')
								.append('<i class="icon-ok"></i>')
								.html('<h2>Техническая ошибка!</h2>')
								.append('<p>Пожалуйста, повторите позже или свяжитесь с нами по телефонам</p>');
						});
					}
				});
			}
			return false;
		});
	})();
});
