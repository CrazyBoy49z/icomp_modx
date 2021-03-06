<?php
/**
* Default lexicon topic for SPForm package, Russian translation (UTF-8)
* @author Sergey Simonyan
* 6/13/11
*
* @package spform
* @subpackage lexicon
* @language ru
*/

/* Russian language file for SPForm package */

/* form field labels */
$_lang['hidden-last-name'] = 'Пожалуйста, НЕ вводите сюда свою фамилию';
$_lang['send-to'] = 'Адресат';
$_lang['your-name'] = 'Ваше имя';
$_lang['email-address'] = 'Email';
$_lang['subject'] = 'Тема';
$_lang['math-problem'] = 'Пожалуйста, решите задачу.';
$_lang['veri-string'] = 'Пожалуйста, введите проверочную строку.';
$_lang['verification'] = 'Проверка';
$_lang['enter-comments'] = 'Пожалуйста, введите текст сообщения и нажмите на кнопку "Отправить"';
$_lang['submit'] = 'Отправить';
$_lang['reset'] = 'Очистить';
$_lang['wrote'] = "написал(а):\n\n";
/* error messages */
$_lang['bad-referer'] = 'Ошибка: Недопустимый HTTP Referer!';
$_lang['cookies-required'] = 'Чтобы воспользоваться этой формой, в вашем браузере должны быть включены cookies';
$_lang['form-errors'] = 'При отправке формы возникли ошибки. Пожалуйста, вернитесь на предыдующую страницу и исправьте их:';
$_lang['could-not-initiate-mail-service'] = 'Ошибка: не удалось инициализировать службу почты';
$_lang['unauthorized'] = 'Ошибка: доступ запрещен';
$_lang['no-captcha'] = 'Ошибка: Чтобы использовать в spform капчу, необходимо установить плагин captcha.';
$_lang['no-config'] = 'Ошибка: Не установлены свойства сниппета';
$_lang['no-js'] = 'Файл не найден: ';
$_lang['no-template'] = "Не удается найти чанк шаблона: ";
$_lang['set-email'] = 'Пожалуйста, в системных настройках введите в поле emailsender ваш адрес электронной почты';

/* email errors */
$_lang['fatal1'] = 'При отправке вашего сообщения возникли ошибки.';
$_lang['fatal2'] = 'Скорее всего, это не связано с вашими действиями, и, вероятно, немедленно устранить проблему не получится.<br />Пожалуйста, вернитесь позже и попробуйте снова.';
$_lang['unauthorized-server'] = 'Доступ к этой форме был осуществлен с неавторизованного сервера!';
$_lang['banned'] = 'Попытка доступа с забаненного адреса электронной почты, хоста или домена: ';
$_lang['form-problem'] = 'Ошибка обработки формы';
$_lang['form-problem-content'] = 'В ходе обработки контактной формы возникли следующие ошибки:';
$_lang['bad-file'] = "Не удается открыть файл с данными: ";
$_lang['bad-destination'] = ' является некорректным адресом назначения.';
$_lang['no-email'] = "Вы не ввели свой адрес электронной почты.";
$_lang['bad-email'] = "не является корректным адресом электронной почты";
$_lang['no-name'] = "Вы не ввели имя отправителя.";
$_lang['no-subject'] = "Вы не ввели тему сообщения.";
$_lang['no-comments'] = "Вы не ввели текст сообщения.";
$_lang['mouse-kb-warning'] = 'При вводе не использовалась клавиатура и/или мышь';
$_lang['mouse-warning'] = 'При вводе не использовалась мышь';
$_lang['kb-warning'] = 'При вводе не использовалась клавиатура';
$_lang['last-name'] = 'Не заполняйте поле "Фамилия"';
$_lang['timeout1'] = 'Вы заполнили форму слишком медленно - или слишком быстро.';
$_lang['timer-violation'] = 'Ошибка таймера';
$_lang['no-time'] = 'Включено использование таймера, но время получено не было';
$_lang['bad-verification'] = 'Ошибка в проверочной строке.';
$_lang['bad-recipient'] = 'Некорректное значение в поле "Получатель": ';
$_lang['bad-recipient-length'] = 'Значение в поле "Получатель" слишком длинное';
$_lang['bad-subject-length'] = 'Значение в поле "Тема" слишком длинное';
$_lang['illegal-subject'] = 'Недопустимое содержимое в поле "Тема": ';
$_lang['illegal-message'] = 'Недопустимое содержимое в тексте сообщения: ';
$_lang['content-links'] = 'Слишком много ссылок в тексте сообщения: ';
$_lang['mail-failure'] = 'Просим прощения. Почтовая подсистема сообщает об ошибке отправки сообщения.<br />Скорее всего, неверно указан обратный адрес электронной почты.<br /><br />Примечание: Если функция mail() на сервер заблокирована, вебмастер должен использовать SMTP.';
/* response messages */
$_lang['thank-you'] = 'Спасибо за ваше сообщение!';
$_lang['came-from'] = 'Воспользуйтесь расположенной ниже ссылкой, чтобы вернуться на страницу, с которой вы пришли.';
$_lang['back'] = 'Назад';