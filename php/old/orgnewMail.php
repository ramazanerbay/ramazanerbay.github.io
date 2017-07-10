<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
		if(mail("info@ramazanerbay.com", $_POST["subject"], $_POST["body"], $headers))
                     echo "E-Posta Gönderdildi.";
                else
                     echo "Mesajınız Gönderilemedi, lütfen tekrar deneyiniz.";
	}
?>