<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail. " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Email send by: " . $name. " \r\n";
$message .= "Email: " . $mail. " \r\n";
$message .= "Message: " . $_POST['message'] . " \r\n";
$message .= "Fue enviado... " . date('d/m/Y', time());

$para = "reservations@astrasxm.com";
$asunto = 'Web Contact';


mail($para, $asunto, utf8_decode($message), $header);


?>
</h2>
<h2 align="center">Thank you!</h2>

<p align="center">Your message has been sent correctly, we will contact you soon.</p>
<p align="center"> </p>
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p>

<p align="center">If it is not correct,

<script type='text/javascript'>

document.write('<a href="https://www.astrasxm.com/">Go Back</a>');

</script>

<noscript>go back</noscript> and send it again</p>

<script type='text/javascript'>

document.write('<p class="details"><a href="https://www.astrasxm.com/">return to homepage.</a></p>');

</script>

<script type='text/javascript'>

setTimeout('https://www.astrasxm.com/', 9000);

</script>

<noscript>

<p align="center" class="details">Press the "back" button on your browser to return to the previous page.</p>

</noscript>