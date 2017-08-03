$channelSecret = '3e7d8e441b2f259a75232751c642d9e0'; // Channel secret string
$httpRequestBody = ''; // Request body string
$hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
$signature = base64_encode($hash);
// Compare X-Line-Signature request header string and the signature
echo $httpRequestBody;