<?php
 
$strAccessToken = "EDRjdEljIpcgBC6/GRP3y90WSbdJcAKmMp0QAHcsAdNvs5u1yCI2dri9FEdL8Dph5kSoF9jkOa8lSRx3vlSWn4QFbYibfEL+GHnf7Ci7uCdK7HL9IpBS0BxuVFp+5LDkNBpyiEB3rGMkN24OOIxSrQdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$rand = rand(1,13);
$rand2 = rand(1,11);
 
if($arrJson['events'][0]['message']['text'] == "สวัสดีบอท"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะ";
}
else if($arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดี" || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรไปดี" 
       || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดีอ่ะ" || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรไปดีอ่ะ"
       || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดีครับ" || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรไปดีคับ"
       || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรดีคะ" || $arrJson['events'][0]['message']['text'] == "ใส่ชุดอะไรไปดีนะ"
       || $arrJson['events'][0]['message']['text'] == "มีชุดรึยัง" || $arrJson['events'][0]['message']['text'] == "มีชุดยัง"){
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
  $arrPostData['messages'][0]['text'] = "โลกต้องการให้คุณใส่แบบนี้แหละ...";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://image.ibb.co/koaNek/05.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://image.ibb.co/koaNek/05.jpg";
 }
 else if($rand == 6){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไปงานเสร็จแล้ว ไปเดินแบบได้เลยนะ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://image.ibb.co/iEbTKk/06.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://image.ibb.co/iEbTKk/06.jpg";
 }
 else if($rand == 7){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ใส่มาเป็นคู่เลยนะตัวเอง";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://image.ibb.co/mDYiKk/12.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://image.ibb.co/mDYiKk/12.jpg";
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
  $arrPostData['messages'][0]['text'] = "ใส่แบบนี้มารับรองชนะเลิศ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://image.ibb.co/jhRZs5/09.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://image.ibb.co/jhRZs5/09.jpg";
 }
 else if($rand == '10'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เรารอเธออยู่นะ :P";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://preview.ibb.co/eSM0X5/10.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://preview.ibb.co/eSM0X5/10.jpg";
 }
 else if($rand == '11'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไม่ใส่ชุดนี้ ไม่ให้เข้างานนะเออ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://preview.ibb.co/cnnDkQ/11.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://preview.ibb.co/cnnDkQ/11.jpg";
 }
 else if($rand == '12'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "จะไปกับกิ๊กหรออ";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://image.ibb.co/mDYiKk/12.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://image.ibb.co/mDYiKk/12.jpg";
 }
 else if($rand == '13'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ใส่ชุดนี้ รับรองเลิศค่าาา";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://preview.ibb.co/bujJkQ/13.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://preview.ibb.co/bujJkQ/13.jpg";
 }
}
else if($arrJson['events'][0]['message']['text'] == "คำคม" || $arrJson['events'][0]['message']['text'] == "มุกเสี่ยว"
       || $arrJson['events'][0]['message']['text'] == "เสี่ยวว่ะ" || $arrJson['events'][0]['message']['text'] == "เสี่ยวมาก"){
 if ($rand2 == '1'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "มองหน้าแค่รู้ตา...
แต่ถ้าลองมา แล้วจะติดใจ...

#BOHOPARTY
#GREENITE";
 }
 else if ($rand2 == '2'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "หน้าตาก็ไม่โหด... แต่ทำไมโสดก็ไม่รู้
  #BOHOPARTY
  #GREENITE";
 }
 else if ($rand2 == '3'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โดนเทก็เซไป...
  แต่ถ้าโดนใจก็เซมา...
  #BOHOPARTY
  #GREENITE";
 }
 else if ($rand2 == '4'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กินอยู่กับปาก...
  อยากอยู่กับเธอ <3
  #BOHO PARTY
  #GREENITE";
 }
 else if ($rand2 == '5'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ส้มตำที่ว่าเผ็ด
  จะเด็ดเหมือนเรามั๊ย?
  #BOHO PARTY
  #GREENITE";
 }
  else if ($rand2 == '6'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "น้ำดื่มต้องใส่แก้ว
  แต่ถ้าเป็นแฟนแล้ว ต้องใส่ใจ นะจ๊ะ
  #BOHO PARTY
  #GREENITE";
 }
  else if ($rand2 == '7'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "น้ำไหลเปลี่ยนใจปลา
  กาลเวลาเปลี่ยนใจคน
  
  #อกหักมาทางนี้
  #BOHO PARTY
  #GREENITE";
 }
  else if ($rand2 == '8'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อกหัก รักคุด ตุ๊ดเมิน เดินมาหาเรา
  #BOHO PARTY
  #GREENITE";
 }
  else if ($rand2 == '9'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ถ้าร้อนให้เปิดแอร์ แต่ถ้าอยากมีคนเทคแคร์ให้เปิดใจ
  
  ...แล้วก็มางาน
  #BOHO PARTY
  #GREENITE";
 }
  else if ($rand2 == '10'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โตแล้วอยากคบนานๆ...
  ไม่อยากขึ้นคานเพราะกลัวความสูง
  
  #BOHO PARTY
  #GREENITE";
 }
 else if ($rand2 == '11'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อยากเป็นแว่นให้เธอใส่
  ถึงแม้จะไม่ได้อยู่ในใจ
  แต่ก็ยังอยู่ในสายตา...
  
  #BOHOPARTY
  #GREENITE";
 }
 else if ($rand2 == '12'){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
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
