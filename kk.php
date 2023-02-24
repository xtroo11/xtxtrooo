<?php

$admin = "5341982995";
$Df = your id; 
$token = "6129609023:AAHdJIaBQ4YOFrlrupAQAKW4FJv5fx3xOoI";
$user_bots = "@Userr7bot";
$kalsbots = "☆︙";
define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function SendChatAction($chat_id, $action)
{
    return bot('sendChatAction', [
        'chat_id' => $chat_id,
        'action' => $action
    ]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
#-----------(carlos)-----------#
mkdir("data");
#-----------(carlos)-----------#
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$chat_id = $message->chat->id;
$message_ch = $update->channel_post;
$message_ch_photo = $message_ch->photo;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$chat_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
#-----------(carlos)-----------#
mkdir("data");
$carlos = json_decode(file_get_contents("data/carlos.json"),true);
$json = json_decode(file_get_contents("data/bot.json"),true);
$chat = json_decode(file_get_contents("data/chat.json"),true);
$canaleech = $chat['ok'];
$Chal3 = count($chat['ok']);
if($carlos['gch'] == null){
$carlos['gch'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['d6'] == null){
$carlos['d6'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['bot'] == null){
$carlos['bot'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['d7'] == null){
$carlos['d7'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$xch = $carlos['ch'];
$xcch = $carlos['cch'];
#-----------(carlos)-----------#
$meca = json_decode(file_get_contents("data/members.json"),true);
$members = $meca['members'];
$count = count($meca['members']);
$md3 = count($meca['members']);
$md4 = count($meca['banbots']) - 1;
if($tc == 'private' and !in_array($from_id,$members)){
$meca['members'][] = $from_id;
file_put_contents("data/members.json",json_encode($meca,32|128|265));
}
$dd = date('D');
if($dd == "Sat"){
unlink("Fri.json");
}
if($dd == "Sun"){
unlink("Fri.json");
}
if($dd == "Mon"){
unlink("Sun.json");
}
if($dd == "Tue"){
unlink("Mon.json");
}
if($dd == "Wed"){
unlink("Tue.json");
}
if($dd == "Thu"){
unlink("Wed.json");
}
if($dd == "Fri"){
unlink("Thu.json");
}
$mecaa = json_decode(file_get_contents("data/".$dd.".json"),true);
$tateems = count($mecaa['members']);
$tanambrse = $mecaa['members'];
if($message and !in_array($from_id, $tanambrse)){ 
$mecaa['members'][] = $from_id;
file_put_contents("data/".$dd.".json",json_encode($mecaa,32|128|265));
}
if(!$carlos['sudo']){
$iidsod = $Df;
}elseif($carlos['sudo']){
$iidsod = $carlos['sudo'];
}
$admin = $iidsod;
$al = $carlos['addmessage'];
$ab = $carlos['messagee'];
$all = $al + $ab;
if($message and $from_id != $admin){
$carlos['messagee'] = $carlos['messagee']+1;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($message and $from_id == $admin){
$carlos['addmessage'] = $carlos['addmessage']+1;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#-----------(carlos)-----------#
if($message and $carlos['bot'] == "✅" and $from_id != $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
A‼️: البوت معطل ❎
 — — — — — — — — —
*",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
#-----------(carlos)-----------#
$ch11 = $carlos['ch1'];
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch11."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"'))!== false){
$a = str_replace("@","",$carlos['ch1']);
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch1']); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$a)
 — — — — — — — — —"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>"https://t.me/$a"]]]
])
]);return false;
}
$ch22 = $carlos['ch2'];
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch22."&user_id=".$from_id);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get2 = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch2']); 
$js2 = json_decode($get2); 
$res2 = $js2->result;
$a = str_replace("@","",$carlos['ch2']);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$a)
 — — — — — — — — —"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>"https://t.me/$a"]]]
])
]);return false;
}
$ch111 = $carlos['ch1p'];
$ch222 = $carlos['ch2p'];
$chp = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch111."&user_id=".$from_id);
$ch2p = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch222."&user_id=".$from_id);
if($message && (strpos($chp,'"status":"left"') or strpos($chp,'"status":"kicked"') or strpos($chp,'"Bad Request: USER_ID_INVALID"'))!== false){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch1p']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $carlos['ch1pp'];
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$chi)
 — — — — — — — — —
",
'parse_mode'=>"MarkDown",
"disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$carlos['ch1pp']]]]
])
]);return false;
}
if($message && (strpos($ch2p,'"status":"kicked"') or strpos($ch2p,'"status":"left"') or strpos($ch2p,'"Bad Request: USER_ID_INVALID"') or strpos($ch2p,'"status":"kicked"'))!== false){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch2p']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $carlos['ch2pp'];
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$chi)
 — — — — — — — — —
"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$carlos['ch2pp']]]]
])
]);return false;
}

#-----------(carlos)-----------#
if ($message && in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"عزيزي - [$name](tg://user?id=$from_id)
تم انت محظور من قبل المطور",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
#-----------(carlos)-----------#
if($carlos['start'] == null){
$start = "*- اهــلأ عـزيـزي :* #name
*- الـيك بوت فحص معرفات و صنع لستة*
*- يمكنك صنع لستة معرفات و معرف فردي*
*- و يمكنك فحص معرفات من خلال البوت*";
}elseif($carlos['start'] != null){
$start = $carlos['start'];
}
#-----------(carlos)-----------#
$ban_id = $message->reply_to_message->forward_from->id;
if($ban_id && $text == "حظر"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙العضو - [$banname](tg://user?id=$banid)
⋄︙تم حـظـرهه بـنـجاح",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$carlos['ban'][] = "$ban_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if ($ban_id && $text == "الغاء حظر"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙العضو - [$banname](tg://user?id=$banid)
⋄︙تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_id,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($carlos['addahs'] == null){$ahs = "قسم الاحصائيات";}elseif($carlos['addahs'] != null){$ahs = $carlos['addahs'];}
if($carlos['addcah'] == null){$cahadd = "قسم الاشتراك الاجباري";}elseif($carlos['addcah'] != null){$cahadd = $carlos['addcah'];}
if($carlos['addsta'] == null){$staadd = "رساله الترحيب (start)";}elseif($carlos['addsta'] != null){$staadd = $carlos['addsta'];}
if($carlos['addadm'] == null){$admadd = "قسم الادمنية";}elseif($carlos['addadm'] != null){$admadd = $carlos['addadm'];}
if($carlos['addna'] == null){$naadd = "قسم الاذاعة";}elseif($carlos['addna'] != null){$naadd = $carlos['addna'];}
if($carlos['addns'] == null){$nsadd = "قسم النسخة الاحتياطية";}elseif($carlos['addns'] != null){$nsadd = $carlos['addns'];}
if($carlos["addamrban"] == null){$banamradd = "قسم المحظورين";}elseif($carlos["addamrban"] != null){$banamradd = $carlos["addamrban"];}
#-----------(carlos)-----------#
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
#-----------(carlos)-----------#
if($text == "/start" and $from_id == $admin){
	$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
قائمة الادمن 🔽
⎯ ⎯ ⎯ ⎯
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$ahs,'callback_data'=>"1"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$nsadd,'callback_data'=>"Open"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
]])
]);
}
#-----------(carlos)-----------#
if($data == "back"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
قائمة الادمن 🔽
⎯ ⎯ ⎯ ⎯
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$ahs,'callback_data'=>"1"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$nsadd,'callback_data'=>"Open"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
]])
]);
$carlos['addfiles'] = "off";
$carlos['Openstengs'] = "off";
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#-----------(carlos)-----------#
if($data == "d6" ){
if($carlos['d6']!="✅"){
$dp = "✅";
}else{
$dp ="❎";
}
$carlos['d6'] = $dp;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$ahs,'callback_data'=>"1"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$nsadd,'callback_data'=>"Open"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
]])
]);}
if($data == "d7" ){
if($carlos['d7']!="✅"){
$as = "✅";
}else{
$as ="❎";
}
$carlos['d7'] = $as;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$ahs,'callback_data'=>"1"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$nsadd,'callback_data'=>"Open"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
]])
]);}
if($data == "bot3" ){
if($carlos['bot']!="✅"){
$bot = "✅";
}else{
$bot ="❎";
}
$carlos['bot'] = $bot;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$ahs,'callback_data'=>"1"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$nsadd,'callback_data'=>"Open"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
]])
]);}
#-----------(carlos)-----------#
if($data == "AddAdmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"‼ ارسل الان ايدي المطور الجديد ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "Addadmin";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if(preg_match("/[0-9]/i",$text)){
if($carlos['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم رفع الادمن وتم التنزيل ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$carlos['sudo'] = "$text";
unset($carlos['data']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}}
if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:اهلا بك في قسم الاشتراك الاجباري ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضف قناة اولى' ,'callback_data'=>"AddCh1"],['text'=>'حذف القناة الولى' ,'callback_data'=>"DelCh1"]],
[['text'=>'اضف قناة ثانيه' ,'callback_data'=>"AddCh2"],['text'=>'حذف القناة الثانيه' ,'callback_data'=>"DelCh2"]],
[['text'=>' عرض قنوات الاشتراك العامة' ,'callback_data'=>"ALLCH"]],
[['text'=>'⬆️ اعدادات القنوات العامة ⚙' ,'callback_data'=>"."]],
[['text'=>'⬇️ اعدادات القنوات الخاصة ⚙' ,'callback_data'=>"."]],
[['text'=>'اضف قناة اولى ' ,'callback_data'=>"AddCh1p"],['text'=>'حذف القناة الاولى ' ,'callback_data'=>"DelCh1p"]],
[['text'=>'اضف قناة ثانية' ,'callback_data'=>"AddCh2p"],['text'=>'حذف القناة الثانية' ,'callback_data'=>"DelCh2p"]],
[['text'=>'عرض قنوات الاشتراك الخاصه' ,'callback_data'=>"ALLCHp"]],
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "AddCh1p"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،(،🖇:ارسل ايدي القناة -100)',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "okch1p";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "addp1" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة 
،🖇:قم برفع البوت مشرف",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['ch1pp'] = "$text";
$carlos['data'] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "okch1p" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة
،🖇:قم بأرسال رابط القناة الخاصة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['ch1p'] = "$text";
$carlos['data'] = "addp1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh1p"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'back'],['text'=>'تأكيد','callback_data'=>'OKDelCh1p']],
]])
]);
}
if($data == "OKDelCh1p"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
unset($carlos['ch1p']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "AddCh2p"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'(،🖇:ارسل ايدي القناة -100)',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "okch2p";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "setaddp" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة
،🖇:قم برفع البوت مشرف",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['ch2pp'] = "$text";
$carlos['data'] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "okch2p" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة 
،🖇:قم بأرسال رابط القناة الخاصة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['ch2p'] = "$text";
$carlos['data'] = "setaddp";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh2p"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'back'],['text'=>'تأكيد','callback_data'=>'OKDelCh2p']],
]])
]);
}
if($data == "OKDelCh2p"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
unset($carlos['ch2p']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "ALLCHp"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"،🖇:هذه قائمة القنوات الأشتراك الاجباري 
،🖇:القناة الاولى ".$carlos['ch1p']."
،🖇:القناة الثانية  ".$carlos['ch2p'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "AddCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇 ارسل معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "okch1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "okch1" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة [$text]
،🖇:قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['ch1'] = "$text";
$carlos['data'] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'back'],['text'=>'تاكيد','callback_data'=>'OKDelCh1']],
]])
]);
}
if($data == "OKDelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
unset($carlos['ch1']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "AddCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇 ارسل معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "okch2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "okch2" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة [$text]
،🖇:قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['ch2'] = "$text";
$carlos['data'] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'back'],['text'=>'تاكيد','callback_data'=>'OKDelCh2']],
]])
]);
}
if($data == "OKDelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
unset($carlos['ch2']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"،🖇:هذه قائمة القنوات الأشتراك الاجباري 
،🖇:القناة الاولى ".$carlos['ch1']."
،🖇:القناة الثانية  ".$carlos['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
}
#-----------(carlos)-----------#
$addbanlst = count($carlos['ban']);
if($data == "lastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قسم المحظورين.
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'المحظورين ( '.$addbanlst.' )' ,'callback_data'=>"##"]],
[['text'=>'حظر' ,'callback_data'=>"bannambar"],['text'=>'الغاء حظر' ,'callback_data'=>"unbannambar"]],
[['text'=>'عرض المحظورين' ,'callback_data'=>"lstesban"]],
[['text'=>'مسح المحظورين' ,'callback_data'=>"dellastban"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['okunban'] = "done";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstesban" and $carlos['ban'] != null){
$banlast = $carlos['ban'];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."- [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
exit();
}
if($data == "lstesban" and $carlos['ban'] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لايوجد محظور حاليأ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
}
if($data == "dellastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم مسح قائمة المحظورين",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['ban'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "bannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو - [$banname](tg://user?id=$banid)
تم حـظـرهه بـنـجاح",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$carlos['ban'][] = "$text";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "unbannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okunban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okunban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
العضو - [$banname](tg://user?id=$banid)
تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($text,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
$carlos['okunban'] = "done";
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($data == "Open"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
اليك قسم النسخة للبوت 🗂
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'نسخة الاعضاء ➡️' ,'callback_data'=>"##"],['text'=>'جلب نسخة ✳' ,'callback_data'=>"OpenCopy"]],
[['text'=>'نسخة الاعدادات ➡️' ,'callback_data'=>"##"],['text'=>'جلب نسخة ✳' ,'callback_data'=>"Openstengs"]],
[['text'=>'رفع نسخة 📤' ,'callback_data'=>"addfiles"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "OpenCopy"){
bot('senddocument', [
'chat_id' =>$admin,
'document' =>new CURLFile("data/members.json"),
'caption'=>"اليك النسخة الحتياطية للعضاء 🗂
عدد الاعضاء ( $md3 ).
⎯ ⎯ ⎯ ⎯",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data == "Openstengs"){
bot('senddocument', [
'chat_id' =>$admin,
'document' =>new CURLFile("data/carlos.json"),
'caption'=>"اليك النسخة الحتياطية الاعدادات 🗂
⎯ ⎯ ⎯ ⎯",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data == "addfiles"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل لي الملف المطلوب 📤
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['addfiles'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$name_id = $message->document->file_name;
if($message->document and $carlos['addfiles'] == "no"){
if($name_id == "members.json" or $name_id == "carlos.json"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->document->file_id])->result->file_path;
file_put_contents("data/$name_id",file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفعة نسخة الاعضاء بنجاح 📤
الملف ( `$name_id` ).
",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['addfiles'] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"عدد القنوات المفعلة : *$Chal3*
عدد الاعضاء : *$count*
المتفاعلين اليوم  : $tateems
عدد الرسائل المرسله : ".$carlos['addmessage']."
عدد الرسائل المستلمه : ".$carlos['messagee']."
مجموع الرسائل : $all
  ⎯ ⎯ ⎯ ⎯
اخر خمس مشتركين :
1- [".$members[count($meca['members'])-2]."](tg://user?id=".$members[count($meca['members'])-2].")
2- ️[".$members[count($meca['members'])-3]."](tg://user?id=".$members[count($meca['members'])-3].")
3- ️[".$members[count($meca['members'])-4]."](tg://user?id=".$members[count($meca['members'])-4].")
4- ️[".$members[count($meca['members'])-5]."](tg://user?id=".$members[count($meca['members'])-5].")
5- ️[".$members[count($meca['members'])-6]."](tg://user?id=".$members[count($meca['members'])-6].")
  ⎯ ⎯ ⎯ ⎯
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تصفير الاحصائيات 🗑.' ,'callback_data'=>"lstadel"]],
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "lstadel"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
حسنأ عزيزي انته متأكد من حذف الاحصائيات 🗑.
عذرأ اولأ عليك ضغط علي نسخ الاحصائيات 🗂.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'نسخ الاحصائيات 🗂.' ,'callback_data'=>"Copyahs"]],
[['text'=>'استعادة الاحصائيات ♻️.' ,'callback_data'=>"asahs"]],
[['text'=>'نعم انا متأكد ✅.' ,'callback_data'=>"dellahs"],['text'=>'لا لست متأكد ❎.' ,'callback_data'=>"1"]],
[['text'=>'رجوع ↩' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "dellahs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم تنظيف جميع الاحصائيات 🗑.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
$meca['members'] = okdell;
file_put_contents("data/members.json",json_encode($meca));
}
if($data == "Copyahs"){
$cc = file_get_contents('data/members.json');
file_put_contents("data/Copy.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم نسخ جميع الاحصائيات 🗂.
يمكنك ب اي وقت استعادة الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
if($data == "asahs"){
$cc = file_get_contents('data/Copy.json');
file_put_contents("data/members.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم استعادة جميع الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
#-----------(carlos)-----------#
if($data == "4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'اهلا بك في قسم رساله(start)',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عرض رساله (start)' ,'callback_data'=>"startsho"],['text'=>'مسح رساله (start)' ,'callback_data'=>"unset start"]],
[['text'=>'تغير رساله (start)' ,'callback_data'=>"setstart"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "startsho" and $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⬇️رسالة الستارت هيه\n---------------\n $start",'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "unset start"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم حذف الاستارت
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['start'] = unll;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "setstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
يمكنك الان ارسال رسالة الـstart ⏳
- لعرض الاسم : #name
- لعرض الايدي : #id
- لعرض المعرف : #user
رسالة الـstart الحالية : $start
",'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "ok_start";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['ok'] == "ok_start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم تغير رسالة الـstart الى ℹ️:
$text
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "no";
$carlos['start'] = $text;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$addbanlst = count($carlos['ban']);
if($data == "lastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قسم المحظورين.
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'المحظورين ( '.$addbanlst.' )' ,'callback_data'=>"##"]],
[['text'=>'حظر' ,'callback_data'=>"bannambar"],['text'=>'الغاء حظر' ,'callback_data'=>"unbannambar"]],
[['text'=>'عرض المحظورين' ,'callback_data'=>"lstesban"]],
[['text'=>'مسح المحظورين' ,'callback_data'=>"dellastban"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['okunban'] = "done";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstesban" and $carlos['ban'] != null){
$banlast = $carlos['ban'];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."- [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
exit();
}
if($data == "lstesban" and $carlos['ban'] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لايوجد محظور حاليأ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
}
if($data == "dellastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم مسح قائمة المحظورين",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['ban'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "bannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو - [$banname](tg://user?id=$banid)
تم حـظـرهه بـنـجاح",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$carlos['ban'][] = "$text";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "unbannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okunban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okunban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
العضو - [$banname](tg://user?id=$banid)
تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($text,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
$carlos['okunban'] = "done";
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($data == "dellahs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم تنظيف جميع الاحصائيات 🗑.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
$meca['members'] = okdell;
file_put_contents("data/members.json",json_encode($meca));
}
if($data == "Copyahs"){
$cc = file_get_contents('data/members.json');
file_put_contents("data/Copy.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم نسخ جميع الاحصائيات 🗂.
يمكنك ب اي وقت استعادة الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
if($data == "asahs"){
$cc = file_get_contents('data/Copy.json');
file_put_contents("data/members.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم استعادة جميع الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
if($data == "5"){
$key=[];
foreach ($carlos['admin'] as $ad){
$key[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$key[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$key[inline_keyboard][]=[[text=>"رجوع ↪️",callback_data=>"back"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
يمكنك رفع ادمن وحذف ادمن عن طريق الازرار 🔽
⎯ ⎯ ⎯ ⎯
يمكن للادمن التحقق من الاحصائيات فقط ⚠️
",
reply_markup=>json_encode($key)
]);
}
$ex = explode("#", $data);
if($ex[0] == "del"){
$ser = array_search($ex[1],$carlos["admin"]);
unset($carlos["admin"][$ser]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$key=[];
foreach ($carlos['admin'] as $ad){
$key[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$key[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$key[inline_keyboard][]=[[text=>"رجوع ↪️",callback_data=>"back"]];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
reply_markup=>json_encode($key)
]);
}
if($data == "add_admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
الان ارسل ايدي الشخص ℹ️
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "ok_admin";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['ok'] == "ok_admin" and !in_array($text,$members)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text ليس عضو بالبوت ⚠️
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
}
$test = $carlos['admin'];
if($text and $carlos['ok'] == "ok_admin" and in_array($text,$test)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
العضو مرفوع ادمن ⚠️
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if($text and $carlos['ok'] == "ok_admin" and in_array($text,$members)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم اضافه $text ادمن ✅
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['admin'][] = $text;
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['ok'] == "ok_admin" and in_array($text,$members)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم اضافه $text ادمن ✅
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['admin'][] = $text;
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text== "/start" and in_array($from_id,$carlos['admin'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
عدد الاعضاء : *$count*
  ⎯ ⎯ ⎯ ⎯
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
if($message and $text != "/start" and $from_id != $admin and $d7 == "✅" and !$data and !in_array($from_id,$carlos['ban'])){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($user == null){
$user = "None";
}elseif($user != null){
$user = "[@$user]";
}
if($text == "/start" and $from_id != $admin and $d6 == "✅" and !in_array($from_id,$members) and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم دخول عضو جديد الى البوت ℹ️ :
الاسم : [$name]
المعرف : $user
الايدي : [$from_id](tg://user?id=$from_id)
⎯ ⎯ ⎯ ⎯
",
'parse_mode'=>"Markdown",
]);
}
if($data == "10"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
اختر نوع الاذاعة 🔽
⎯ ⎯ ⎯ ⎯
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعة خاص 🔽' ,'callback_data'=>"##"]],
[['text'=>'اذاعة (نص)' ,'callback_data'=>"send_text"],['text'=>'اذاعة (ميديا)' ,'callback_data'=>"send_midea"]],
[['text'=>'اذاعة (ماركدوان)' ,'callback_data'=>"send_textmark"]],
[['text'=>'رجوع ↩' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "send_text"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
ارسل رسالتك ليتم الاذاعة الي ( $md3 )
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"10"]],
]])
]);
$carlos['ok'] = "send_text";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_textmark"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
ارسل رسالتك ليتم الاذاعة الي ( $md3 )
كمثال علي الماركدوان 
`*نص*` للكتابة غامق 
*[نص](الرابط)* كمثال [carlos](t.me/QQ2_Q)
*`نص`* للكتابة المرمزه
",
'parse_mode'=>"Markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"10"]],
]])
]);
$carlos['ok'] = "send_textmark";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_midea"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
ارسل الميديا المطلوبة ليتم الاذاعة الي ( $md3 )
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"10"]],
]])
]);
$carlos['ok'] = "send_midea";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if(!$data and $text != "/start" and $carlos['ok'] == 'send_text' and $from_id == $admin){
for($i=0;$i<count($members); $i++){
if($text)
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
]);
}
$mabad = $md3;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
تم الانتهاء من الاذاعة ✅
⎯ ⎯ ⎯ ⎯
تم ارسالها الى $md3
⎯ ⎯ ⎯ ⎯
نوع الاذاعة : نص
",
'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
]);
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if(!$data and $text != "/start" and $carlos['ok'] == 'send_textmark' and $from_id == $admin){
for($i=0;$i<count($members); $i++){
if($text)
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
$mabad = $md3;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
تم الانتهاء من الاذاعة ✅
⎯ ⎯ ⎯ ⎯
تم ارسالها الى $md3
⎯ ⎯ ⎯ ⎯
نوع الاذاعة : Markdown
",
'parse_mode'=>"Markdown",
'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
]);
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if(!$data and !$text and $carlos['ok'] == 'send_midea' and $from_id == $admin){
for($i=0;$i<count($members); $i++){
if($photo)
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$members[$i],
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($document)
bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($audio)
bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
}
$mabad = $md3;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
تم الانتهاء من الاذاعة ✅
⎯ ⎯ ⎯ ⎯
تم ارسالها الى $md3
⎯ ⎯ ⎯ ⎯
نوع الاذاعة : ميديا
",
'parse_mode'=>"Markdown",
'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
]);
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#----------(carlos)----------#
if($text == "/start"){
if(!@$user){$users = "*لايوجد يوزر*";}
elseif(@$user){$users = "[@$username]";}
$start = str_replace('#name',"$name",$start);
$start = str_replace('#id',"$from_id",$start);
$start = str_replace('#user',"$users",$start);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'صـنع (فـردي)','callback_data'=>"lstauserf"],['text'=>'صـنع (لـستة)','callback_data'=>"lstauserl"]],
[['text'=>'صـنع (فردي) بوتات','callback_data'=>"lstabotf"],['text'=>'صـنع (لـستة) بوتات','callback_data'=>"lstabotl"]],
[['text'=>'فـحـص (معرف)','callback_data'=>"fuser"]],
]])
]);
$carlos['fuser'][$from_id] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "home"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- اهــلأ عـزيـزي تم الرجوع بنجاح*
*- الـيك بوت فحص معرفات و صنع لستة*
*- يمكنك صنع لستة معرفات و معرف فردي*
*- و يمكنك فحص معرفات من خلال البوت*
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'صـنع (فـردي)','callback_data'=>"lstauserf"],['text'=>'صـنع (لـستة)','callback_data'=>"lstauserl"]],
[['text'=>'صـنع (فردي) بوتات','callback_data'=>"lstabotf"],['text'=>'صـنع (لـستة) بوتات','callback_data'=>"lstabotl"]],
[['text'=>'فـحـص (معرف)','callback_data'=>"fuser"]],
]])
]);
$carlos['fuser'][$from_id] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "fuser"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- الـيك قسم فحص المعرف*
*- الان كل ما عليك ارسال المعرف* 
*- و سيتم فحص المعرف بسرعة*
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
$carlos['fuser'][$from_id] = "on";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstabotf"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- الـيك قسم صنع معرفات فردي لبوتات*
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'ثــلاثـي','callback_data'=>"boot3"],['text'=>'ربـاعـي','callback_data'=>"boot4"]],
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
}
if($data == "lstabotl"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- الـيك قسم صنع معرفات لستة لبوتات*
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لستة (ثــلاثـي)','callback_data'=>"lboot3"],['text'=>'لستة (ربـاعـي)','callback_data'=>"lboot4"]],
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
}
if($data == "lstauserl"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- الـيك قسم صنع لستة معرفات*
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لستة (خـماسـي)','callback_data'=>"luser5"],['text'=>'لستة (سـداسـي)','callback_data'=>"luser6"]],
[['text'=>'لستة (سـبـاعـي)','callback_data'=>"luser7"],['text'=>'لستة (ثــمـانــي)','callback_data'=>"luser8"]],
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
}
if($data == "lstauserf"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- الـيك قسم صنع معرفات فردي*
- معرف البوت : [$user_bots]
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'خـماسـي','callback_data'=>"user5"],['text'=>'سـداسـي','callback_data'=>"user6"]],
[['text'=>'سـبـاعـي','callback_data'=>"user7"],['text'=>'ثــمـانــي','callback_data'=>"user8"]],
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
}
if($data == "user5"){
if($data == "user5"){
$d ="5";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserf"]],
]])
]);
}
if($data == "user6"){
if($data == "user6"){
$d ="6";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserf"]],
]])
]);
}
if($data == "user7"){
if($data == "user7"){
$d ="7";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserf"]],
]])
]);
}
if($data == "user8"){
if($data == "user8"){
$d ="8";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserf"]],
]])
]);
}
if($data == "boot3"){
if($data == "boot3"){
$d ="3";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstabotf"]],
]])
]);
}
if($data == "boot4"){
if($data == "boot4"){
$d ="4";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstabotf"]],
]])
]);
}
if($data == "luser5"){
if($data == "luser5"){
$d ="5";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$s = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$r = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$q = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$p = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$o = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$j = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$m = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$k = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$u = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t
- @$k
- @$p
- @$u
- @$m
- @$o
- @$j
- @$b
- @$m
- @$c
- @$q
- @$r
- @$s",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserl"]],
]])
]);
}
if($data == "luser6"){
if($data == "luser6"){
$d ="6";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$s = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$r = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$q = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$p = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$o = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$j = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$m = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$k = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$u = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t
- @$k
- @$p
- @$u
- @$m
- @$o
- @$j
- @$b
- @$m
- @$c
- @$q
- @$r
- @$s",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserl"]],
]])
]);
}
if($data == "luser7"){
if($data == "luser7"){
$d ="7";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$s = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$r = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$q = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$p = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$o = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$j = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$m = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$k = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$u = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t
- @$k
- @$p
- @$u
- @$m
- @$o
- @$j
- @$b
- @$m
- @$c
- @$q
- @$r
- @$s",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserl"]],
]])
]);
}
if($data == "luser8"){
if($data == "luser8"){
$d ="8";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$s = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$r = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$q = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$p = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$o = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$j = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$m = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$k = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$u = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @$t
- @$k
- @$p
- @$u
- @$m
- @$o
- @$j
- @$b
- @$m
- @$c
- @$q
- @$r
- @$s",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstauserl"]],
]])
]);
}
if($data == "lboot3"){
if($data == "lboot3"){
$d ="3";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$s = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$r = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$q = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$p = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$o = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$j = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$m = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$k = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$u = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @".$t."bot
- @".$k."bot
- @".$p."bot
- @".$u."bot
- @".$m."bot
- @".$o."bot
- @".$j."bot
- @".$b."bot
- @".$m."bot
- @".$c."bot
- @".$q."bot
- @".$r."bot
- @".$s."bot",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstabotl"]],
]])
]);
}
if($data == "lboot4"){
if($data == "lboot4"){
$d ="4";
}
$t = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$s = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$r = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$q = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$p = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$o = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$j = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$m = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$k = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$u = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$d);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- @".$t."bot
- @".$k."bot
- @".$p."bot
- @".$u."bot
- @".$m."bot
- @".$o."bot
- @".$j."bot
- @".$b."bot
- @".$m."bot
- @".$c."bot
- @".$q."bot
- @".$r."bot
- @".$s."bot",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"lstabotl"]],
]])
]);
}
$fuseron = $carlos['fuser'][$from_id];
if($text !="/start" and $fuseron == "on" and preg_match("/@/",$text)){
$done = str_replace("@ ","",$text);
$Mica = file_get_contents('http://t.me/'.$done,null,null,0,1334);
preg_match('/property="og:description" content="(.*)">/',$Mica,$match);
if($match[1] == ""){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- @[$done] : متاح .",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
$carlos['fuser'][$from_id] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- @[$done] : غير متاح .",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجـوع','callback_data'=>"home"]],
]])
]);
$carlos['fuser'][$from_id] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
