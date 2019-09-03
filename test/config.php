<?
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$to="kirill.rybakow@yandex.ru";
	$subject = "Сообщение c сайта";
	$headers = "Content-type:text/html; charset = utf-8\r\n From:admin@vse-doma-prestarelyh.ru";
	$bot_protect_mess = "Защита от ботов не пройдена";
	$err_phone_mess = "Введите телефон";
	$valid_email_mess = "E-mail некорректен";
	$err_policy_mess = "Вы не приняли условия соглашения";
	$success_message = "Сообщение успешно отправлено!";

	$form = array();
	$err = array();
	$err_ids = array();
	foreach ($_POST["SEND"] as $n=>$val){
		$form[$n] = array("ID"=>$val["id"], "NAME"=>$val["name"], "VAL"=>$val["val"]);
	}
	foreach($form as $f)
	{
		if(empty($f["VAL"])&&$f["ID"]=="phone")
		{
			$err[] = "<div>".$err_phone_mess."</div>";
			$err_ids[] = $f["ID"];
		}
		if(!empty($f["VAL"])&&$f["ID"]=="email"&&!filter_var($f["VAL"], FILTER_VALIDATE_EMAIL))
		{
			$err[] = "<div>".$valid_email_mess."</div>";
			$err_ids[] = $f["ID"];
		}
		if(!empty($f["VAL"])&&$f["ID"]=="protect")
		{
			$err[] = "<div>".$bot_protect_mess."</div>";
			$err_ids[] = $f["ID"];
		}
		
		if(empty($f["VAL"])&&$f["ID"]=="policy")
		{
			$err[] = "<div>".$err_policy_mess."</div>";
			$err_ids[] = $f["ID"];
		}

		if($f["ID"]!="protect"&&$f["ID"]!="policy")
		{
			if(!empty($f["VAL"]))
				$message .= "<p><strong>".$f["NAME"]."</strong> — ".$f["VAL"]."</p>\n";
		}
	}
	if(empty($err))
	{
		mail($to,$subject,$message,$headers);
		$status = "OK";
		$answer = "<div>".$success_message."</div>";
	}
	else
	{
		foreach($err as $error)
			$answer .= "<div>".$error."</div>";
	}
	echo json_encode(array("answer" => $answer, "status" => $status, "errors"=>$err_ids));
}