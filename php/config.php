<?
	//define the receiver of the email
	
	define('TO_NAME','Rbista');
	define('TO_EMAIL','rbista.team@gmail.com');
	define('SUBJECT','Contact from your website');	
	
	define('TEMPLATE_PATH','template/default.php');
 
	define('SMTP_ENABLE',false); // True to enable SMTP
	define('SMTP_HOST','');
	define('SMTP_USERNAME','');
	define('SMTP_PASSWORD','');

	// Messages
	define('MSG_INVALID_NAME','Por favor, introduce tu nombre.');
	define('MSG_INVALID_EMAIL','Por favor, inserte un e-mail válido.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>