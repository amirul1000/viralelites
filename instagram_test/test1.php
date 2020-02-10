<?php
function generate_sig($endpoint, $params, $secret) {
  $sig = $endpoint;
  ksort($params);
  foreach ($params as $key => $val) {
    $sig .= "|$key=$val";
  }
  return hash_hmac('sha256', $sig, $secret, false);
}

$endpoint = '/media/657988443280050001_25025320';
$params = array(
  'access_token' => '8514123780.76268f8.975071258e3cf127023c',
  'count' => 10,
);
$secret = '9b891a1b5d044a7bb35aef576ab61360';

$sig = generate_sig($endpoint, $params, $secret);
echo $sig;


?>