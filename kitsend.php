<?php

	require_once("phpmail.php");
	$email_admin = "dimamulenok@yandex.ru";
	// $email_admin = "soc.taxi.35@gmail.com";

	if (!empty($_POST['MAIL'])) {
		echo "1";
		die();
	}

	$from = "“Автобезопасность”";
	$email_from = "robot@autosafe.ru";

	$deafult = array(
		"mark-bottom" => 'Марка',
		"model-bottom" => 'Модель',
		"engine-bottom" => 'Двигатель',
		"name"=>"Имя",
		"phone"=>"Телефон", 
		"email"=>"E-mail"
	);

	$fields = array();

	if( count($_POST) ){

		foreach ($deafult  as $key => $value){
			if( isset($_POST[$key]) ){
				$fields[$value] = $_POST[$key];
			}
		}

		$subject = $_POST["subject"]."\n";

		$title = $subject;

		$message = "<div><h3 style=\"color: #333;\">".$title."</h3>";
		$msgTelegram = $subject;

		foreach ($fields  as $key => $value){
			$message .= "<div><p><b>".$key.": </b>".$value."</p></div>";
			$msgTelegram .="<b>".$key.":</b> ".$value."\n";
		}
			
		$message .= "</div>";
		
		if(send_mime_mail("Сайт ".$from,$email_from,$name,$email_admin,'UTF-8','UTF-8',$subject,$message,true)){	
			sendMessage($msgTelegram);
			echo "1";
		}else{
			echo "0";
		}
	}

	function sendMessage($messaggio) {
		$chatID = "-1001442196705";
	    $token = "bot1202309466:AAFxFQ4eVuNLUHVL4jjLtpNC0DLSeQA255s";
	    $url = "https://api.telegram.org/" . $token . "/sendMessage?chat_id=" . $chatID;
	    $url = $url . "&parse_mode=HTML&text=" . urlencode($messaggio);
	    $ch = curl_init();
	    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
	    );
	    curl_setopt_array($ch, $optArray);
	    $result = curl_exec($ch);
	    curl_close($ch);
	}
?>