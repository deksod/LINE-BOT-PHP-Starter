<?php
 
$strAccessToken = "nkNwh0ENuXMxsOv6bC0u/lK/gEm8IHfk2s832s3d+IuApqDUBDoS2UKaquyfXjwfBUhOvsBWE3Iupe8wHOu4gWGETNzI/tYP8vEFdg58fGpYN0XP0/ow645TPfcChnhDM5OvGQNN0P18rTs7vYE/LwdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$rand = rand(1,12);
 
if($arrJson['events'][0]['message']['text'] == "สวัสดีบอท"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะ ".$arrJson['events'][0]['source']['name'];
}
else if($arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดี"){
 if($rand > 1){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันว่า".$arrJson['events'][0]['source']['displayName']."เหมาะกับชุดนี้มากเลยนะ...";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://s-media-cache-ak0.pinimg.com/736x/9b/9c/9d/9b9c9d645da3c8188c22f13f2f97111c--boho-holiday-style-bohemian-bohemian-style-dress.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://s-media-cache-ak0.pinimg.com/736x/9b/9c/9d/9b9c9d645da3c8188c22f13f2f97111c--boho-holiday-style-bohemian-bohemian-style-dress.jpg";
 }
 else if($rand == 15){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันว่าคุณเหมาะกับชุดนี้มากเลยนะ...";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "";
  $arrPostData['messages'][1]['previewImageUrl'] = "";
 }
 else if($rand == 16){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันว่าคุณเหมาะกับชุดนี้มากเลยนะ...";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "";
  $arrPostData['messages'][1]['previewImageUrl'] = "";
 }
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
echo "OK";
