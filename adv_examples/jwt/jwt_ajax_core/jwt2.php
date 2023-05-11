<?php


function generate_jwt($header, $payload, $secret = 'secret') {
    $headers_encoded = base64url_encode(json_encode($header));

    $payload_encoded = base64url_encode(json_encode($payload));

    $signature = hash_hmac('SHA256',"$headers_encoded.$payload_encoded", $secret, true);
    $signature_encoded = base64url_encode($signature);

    $jwt = "$headers_encoded.$payload_encoded.$signature_encoded";

    return $jwt;
}

function base64url_encode($str) {    
    return rtrim(strtr(base64_encode($str), '+/', '-_'), '=');

}

$headers = array('alg'=>'HS256','typ'=>'JWT');
$payload = array('sub'=>'1234567890','name'=>'John Doe', 'admin'=>true, 'exp'=>(time() + 60));

$jwt = generate_jwt($headers, $payload);

echo $jwt;
?>