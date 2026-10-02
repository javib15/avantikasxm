<?php
$name = trim(str_replace(["\r", "\n"], '', $_POST['demo-name'] ?? ''));
$mail = trim(str_replace(["\r", "\n"], '', $_POST['demo-email'] ?? ''));
$category = $_POST['people'] ?? '';
$indoor = $_POST['Indoor/Outdoor'] ?? '';
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$message1 = $_POST['message-text'] ?? '';

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	die('Invalid email address.');
}

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Reservation name: " . $name . " \r\n";
$message .= "Email: " . $mail . " \r\n";
$message .= "Amount of People: " . $category . " \r\n";
$message .= "Indoor or Outdoor : " . $indoor . " \r\n";
$message .= "Reservation date: " . $date . " \r\n";
$message .= "Reservation time: " . $time . " \r\n";
$message .= "Message: " . $message1 . " \r\n";

$message .= "Reservation request date: " . date('d/m/Y', time());

$para = "reservations@avantikasxm.com";
$asunto = 'Reservation Avantika sxm';


mail($para, $asunto, $message, $header);



?>
<h2 align="center">Thank you!</h2>

<p align="center">Your message has been sent correctly, we will contact you soon.</p>
<p align="center"> </p>

<p align="center">If it is not correct,

<script type='text/javascript'>

document.write('<a href="https://www.avantikasxm.com/">go Back</a>');

</script>

<noscript>go back</noscript> and send it again</p>

<script type='text/javascript'>

document.write('<p class="details"><a href="https://www.avantikasxm.com/">return to homepage.</a></p>');

</script>

<script type='text/javascript'>

setTimeout(function () { window.location.href = 'https://avantikasxm.com/'; }, 9000);

</script>

<noscript>

<p align="center" class="details">Press the "back" button on your browser to return to the previous page.</p>

</noscript>