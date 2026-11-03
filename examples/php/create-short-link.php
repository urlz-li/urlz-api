<?php

$apiKey = getenv('URLZ_API_KEY');

if (!$apiKey) {
    throw new RuntimeException('Set URLZ_API_KEY before running this example.');
}

$endpoint = 'https://api.urlz.li/url/create?apikey=' . rawurlencode($apiKey);
$payload = http_build_query([
    'apikey' => $apiKey,
    'fullUrl' => 'https://example.com/private-report',
]);

$curl = curl_init($endpoint);
curl_setopt_array($curl, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
]);

$body = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

if ($body === false) {
    throw new RuntimeException(curl_error($curl));
}

curl_close($curl);

if ($status < 200 || $status >= 300) {
    throw new RuntimeException("URLZ request failed with HTTP {$status}: {$body}");
}

echo $body . PHP_EOL;

