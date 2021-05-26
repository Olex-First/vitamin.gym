<?php

		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$txt = $_POST['txt'];


		$login = htmlspecialchars($login);
		$email = htmlspecialchars($email);
		$tel = htmlspecialchars($tel);
		$txt = htmlspecialchars($txt);

		$login = urldecode($login);
		$email = urldecode($email);
		$tel = urldecode($tel);
		$txt = urldecode($txt);

		$login = trim($login);
		$email = trim($email);
		$tel = trim($tel);
		$txt = trim($txt);







		if (mail("halk12073@gmail.com",
	              " Новое письмо с сайта",
	          	"Имя: ".$firstname."\n".
	          	"Email: ".$email."\n".
	          	"Телефон: ".$tel."\n".
	          	"Text: ".$txt."\n")
			    "From: no-reply@mydomain.ru \r\n")
			
			) {
			echo('Письмо успешно отправлено');
		}
		else {
			echo ('Есть ошибка! Проверте данные');
		}
?>