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
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะ";
}
else if($arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดี" || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรไปดี" 
       || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดีอ่ะ" || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรไปดีอ่ะ"){
 if($rand == 1){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันว่าเธอเหมาะกับชุดนี้มากเลยนะ...";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://s-media-cache-ak0.pinimg.com/736x/9b/9c/9d/9b9c9d645da3c8188c22f13f2f97111c--boho-holiday-style-bohemian-bohemian-style-dress.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://s-media-cache-ak0.pinimg.com/736x/9b/9c/9d/9b9c9d645da3c8188c22f13f2f97111c--boho-holiday-style-bohemian-bohemian-style-dress.jpg";
 }
 else if($rand == 2){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อย่าลืมใส่ชุดนี้มางาน BOHO Party ด้วยนะ ^^";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://wd.thaibuffer.com/o/photo/896/kapook_world-892837.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://wd.thaibuffer.com/o/photo/896/kapook_world-892837.jpg";
 }
 else if($rand == 3){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "นี่มันนางแบบชัดๆเลย!";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://women.mthai.com/app/uploads/2017/02/bohemian36.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://women.mthai.com/app/uploads/2017/02/bohemian36.jpg";
 }
 else if($rand == 4){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ปังอะไรเบอร์นี้??";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://ci.lnwfile.com/_/ci/_raw/dj/ad/jb.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://ci.lnwfile.com/_/ci/_raw/dj/ad/jb.jpg";
 }
 else if($rand == 5){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไปขุดชุดนี้มาจากถังขยะข้างบ้านได้เลยนะ :)";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://s3-ap-southeast-1.amazonaws.com/wpimages.mover.in.th/wp-content/uploads/2016/11/21104729/280.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://s3-ap-southeast-1.amazonaws.com/wpimages.mover.in.th/wp-content/uploads/2016/11/21104729/280.jpg";
 }
 else if($rand == 6){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ใส่ชุดนี้มาอวดที";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://fb1-ck.lnwfile.com/_/ck/_raw/zb/07/dy.png";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://fb1-ck.lnwfile.com/_/ck/_raw/zb/07/dy.png";
 }
 else if($rand == 7){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ใส่มาเป็นคู่เลยนะตัวเอง";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://e.lnwfile.com/_/e/_raw/kl/e3/i2.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://e.lnwfile.com/_/e/_raw/kl/e3/i2.jpg";
 }
 else if($rand == 8){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อ้าว จะมาทั้งครอบครัวก็ไม่บอก..";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://ae01.alicdn.com/kf/HTB1eOarQVXXXXc2apXXq6xXFXXXR/2017-Summer-Family-Set-Couple-font-b-Clothes-b-font-font-b-Men-b-font-Boy.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://ae01.alicdn.com/kf/HTB1eOarQVXXXXc2apXXq6xXFXXXR/2017-Summer-Family-Set-Couple-font-b-Clothes-b-font-font-b-Men-b-font-Boy.jpg";
 }
 else if($rand == 9){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "หลุดมาจากเผ่าไหนหรอ??";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://img.tarad.com/shop/l/leelavadeshop/img-lib/spd_20120918132028_b.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://img.tarad.com/shop/l/leelavadeshop/img-lib/spd_20120918132028_b.jpg";
 }
 else if($rand == 10){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ใส่ชุดนี้ไปงานเลย";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://ae01.alicdn.com/kf/HTB1gtKELVXXXXb.XVXXq6xXFXXXN/Fashionistas-URSMART-printing-font-b-Bohemian-b-font-fashion-font-b-men-s-b-font-long.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://ae01.alicdn.com/kf/HTB1gtKELVXXXXb.XVXXq6xXFXXXN/Fashionistas-URSMART-printing-font-b-Bohemian-b-font-fashion-font-b-men-s-b-font-long.jpg";
 }
 else if($rand == 11){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "จะไปกับกิ๊กหรออ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://static.weloveshopping.com/shop/client/000072/happyponyshop/extra/11871158.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://static.weloveshopping.com/shop/client/000072/happyponyshop/extra/11871158.jpg";
 }
 else if($rand == 12){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไม่ใส่ชุดนี้ ไม่ให้เข้างานนะเออ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://www.bygoods.com/media/catalog/product/2/3/2356.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://www.bygoods.com/media/catalog/product/2/3/2356.jpg";
 }
 else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไม่ใส่ชุดนี้ ไม่ให้เข้างานนะเออ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "http://www.bygoods.com/media/catalog/product/2/3/2356.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "http://www.bygoods.com/media/catalog/product/2/3/2356.jpg";
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
