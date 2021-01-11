<?php
    $email = "pchefea44@gmail.com";
    $name = "Joao";
    $body = "Hey man, how are you? <br><br><a href='https://google.com'>Google</a>";
    $subject = "Test email";

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email,
                        "name" => $name
                    )
                )
            )
        ),
        "from" => array(
            "email" => "dcsantos136@gmail.com"
        ),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body
            )
        )
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
?>