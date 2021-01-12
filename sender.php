<?php
// use actual sendgrid username and password in this section

$url = 'https://api.sendgrid.com/';
$pass ='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'; // place SG password here
// grabs HTML form's post data; if you customize the form.html parameters then you will need to reference their new new names here
$name = $_POST['nome']; 
$email = $_POST['email']; 
$message = $_POST['messagem'];
// note the above parameters now referenced in the 'subject', 'html', and 'text' sections
// make the to email be your own address or where ever you would like the contact form info sent
$params = array(
    'api_key'   => "$pass",
    'to'        => "pchefea44@gmail.com", // set TO address to have the contact form's email content sent to
    'html'      => "<html><head><title> This message was sent through your website form</title><body>
    Name: $nome\n<br>
    Email: $email\n<br>
    Message: $messagem <body></title></head></html>", // Set HTML here.  Will still need to make sure to reference post data names
    'text'      => "
    Name: $nome\n
    Email: $email\n
    $messagem",
    'from'      => "pchefea44@gmail.com", // set from address here, it can really be anything
  );
curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
$request =  $url.'api/mail.send.json';
// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
// obtain response
$response = curl_exec($session);
curl_close($session);
// Redirect to thank you page upon successfull completion, will want to build one if you don't alreday have one available
header('Location: ../index.html'); // feel free to use whatever title you wish for thank you landing page, but will need to reference that file name in place of the present 'thanks.html'
exit();
// print everything out
print_r($response);
?>