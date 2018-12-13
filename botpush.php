<?php



require "vendor/autoload.php";

$access_token = 'nxaCamU8iNqJ6IbQE2cXR8NWjXNWUQmtJy1HB9wb4aDWYa7Xxm/+uWAt2JNXr+Skxv4fYl/sSExsHAksnbxCChEKHdx2sZgFrB1thQbTUfZfGvBYrY2rM44CkHuhaESvKIstQEw1eb1BGjAMIjNsewdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6c8a10d0968592481b9e15fe67decaeb';

$pushID = '58b19fc71890';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







