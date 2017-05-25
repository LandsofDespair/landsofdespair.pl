<?php
$name= $_POST['name'];
$message= $_POST['message'];
$email= $_POST['email'];
$to = "kontakt@landsofdespair.pl";
$subject ="Kontakt ze strony";
$body="Od: $name \n email: $email \n Treść: $message";
$URL="http://landsofdespair.pl"; 
mail($to,$subject,$body);
echo '<script language="javascript">';
echo 'alert("Wysłano wiadomość! Dziękujemy!")';
echo '</script>';

?>
<script type=text/javascript>
	
	function wróć(){
		window.location.replace("http://landsofdespair.pl");
		
		
	}
	
	
	
</script>
<body onload="wróć()"> 