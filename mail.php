<?php
$to      = 'bhishaj.sharma@gmail.com';
$subject = 'Evacuate';
$message = 'Evacuate the Department Fast!!';
$headers = 'From: admin@gmail.com' . "\r\n" .
    'Reply-To: admin@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>