<?php
$name = $_POST['demo-name'];
$mail = $_POST['demo-email'];
$fecha = $_POST['fecha'];
$category = $_POST['people'];
$indoor = $_POST['Indoor/Outdoor'];
$date = $_POST['date'];
$time = $_POST['time'];
$message1 = $_POST['message-text'];

$header .= 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message .= "Reservation name: " . $_POST['demo-name']. " \r\n";
$message .= "Email: " . $_POST['demo-email']. " \r\n";
$message .= "Amount of People: " . $_POST['people'] . " \r\n";
$message .= "Indoor or Outdoor : " . $_POST['Indoor/Outdoor'] . " \r\n";
$message .= "Reservation date: " . $_POST['date'] . " \r\n";
$message .= "Reservation time: " . $_POST['time'] . " \r\n";
$message .= "Message: " . $_POST['message-text'] . " \r\n";

$message .= "Reservation request date: " . date('d/m/Y', time());

$para = "reservations@avantikasxm.com";
$asunto = 'Reservation Avantika sxm';


mail($para, $asunto, utf8_decode($message), $header);



?>
</h2>
<h2 align="center">Thank you!</h2>

<p align="center">Your message has been sent correctly, we will contact you soon.</p>
<p align="center"> </p>
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p>

<p align="center">If it is not correct,

<script type='text/javascript'>

document.write('<a href="https://www.avantikasxm.com/">go Back</a>');

</script>

<noscript>go back</noscript> and send it again</p>

<script type='text/javascript'>

document.write('<p class="details"><a href="https://www.avantikasxm.com/">return to homepage.</a></p>');

</script>

<script type='text/javascript'>

setTimeout('https://avantikasxm.com/', 9000);

</script>

<noscript>

<p align="center" class="details">Press the "back" button on your browser to return to the previous page.</p>

</noscript>