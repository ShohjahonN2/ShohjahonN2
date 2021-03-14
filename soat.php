<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new\danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("2 hour"));
$kuns=date("d-m-Y",strtotime("2 hour"));
$yil=date("Y");
$oy=date("m");
$kun=date("d");
date_default_timezone_set("Asia/Tashkent");
$soat= date("H");
$minut=date("i");
$sekund=date("s");

$input = ["Jɪɢᴀʀ Mᴇɴ O'ᴢɢᴀʀᴍᴀᴅɪᴍ Pʀᴏꜱᴛᴀ Sᴇɴʟᴀʀ Yᴏqᴍᴀʏ Qᴏʟᴅɪɴɢ 😏 $time","Oʟʟᴏxɢᴀ Sʜᴜᴋᴜʀ. Hᴀᴍᴍᴀsɪ Yᴀxsʜɪ $time","Любᴏвь? Нᴇт Спᴀсибᴏ и тᴀк Прᴏблᴇм Мнᴏгᴏ😈✌️ - Kᴇнжᴀᴇʙ ...🌪 $time ","Жизнь - Игᴘᴀ , Игᴘᴀй Кᴘᴀᴄиʙᴏ🖤 ⏰$time","Mᴇɴ O'ᴢ Yᴏ'ʟɪᴍɴɪ Dᴀᴠᴠᴏᴍ Eᴛᴀᴍᴀɴ Xᴀᴛᴛᴏ Yᴏɴɪᴍᴅᴀ Hᴇᴄʜ Kɪᴍ Qᴏʟᴍᴀɢᴀɴ Bᴏ'sᴀ Xᴀᴍ","Yᴏɴɪᴍᴅᴀ Mɪsᴀɴ Yᴏᴋɪ Yᴏ'ϙᴍɪ Uɴᴜᴛᴍᴀ Sᴇɴ Mᴇɴɪᴋɪsᴀɴ $time","Yᴜʟᴅᴜᴢ Uᴄʜɢᴀɴᴅᴀ Eᴍᴀs Aᴢᴏɴ O'ϙɪʟɢᴀɴᴅᴀ Dᴜᴏ Qɪʟɪɴɢ..🤲⏰$time","Bᴀxᴛɪɴɢɴɪ Tᴏᴘᴅɪɴɢᴍɪ Xᴜʀꜱᴀɴᴅᴍᴀɴ Eɴᴅɪ Qᴀᴅʀɪɢᴀ Yᴇᴛ 👑⏰$time","Dᴀ Tᴏɢ'ʀɪ Mᴇɴɪ Sᴇᴠɪв Nɪᴍᴀ Xᴀᴍ Qɪʟᴀᴅᴅɪɴɢ Oᴅɪʏ Bᴏʟᴀ Bᴏ'ʟꜱᴀᴍ 👑⏰$time","Bᴜɢᴜɴ Cʜᴇᴛʟᴀꜱʜᴀᴍᴀɴ Sᴏxᴛʟᴀʀɴɪ Cʜᴇᴛɢᴀ Sᴜʀɪʙ 👑⏰$time","Mᴇɴɪ Kᴜᴄʜʟɪ Qɪɢᴀɴ Nᴀʀꜱᴀ Bu Mᴇɴɢᴀ Bᴇʀɪʟɢᴀɴ Zᴀʀʙᴀʟᴀʀᴅɪʀ🗽","Eɴᴅɪ Bɪᴢ Dᴇᴍᴀ Cʜᴜɴᴋɪ Eɴᴅɪ Sᴇɴɢᴀ Dᴀxʟɪᴍ Yᴏ'Q 🥀⏰$time","Iꜱʜᴏɴɢᴀɴ Oᴅᴀᴍʟᴀʀɪɴɢ Sᴇɴɪ Tᴀꜱʜʟᴀʙ Kᴇᴛꜱᴀ Bᴜ Sᴇɴɢᴀ Dᴀʀᴅ Eᴍᴀꜱ Dᴀʀ'ꜱ Bᴏ'ꜱɪɴ","Maqsad aniq bolsa javob yozaman bolmasa 🔴spam🔴 ⏰$time ","Sabr qiling siz albatta savollaringizga javob olasiz ✔⏰$time","Meni lichkamdi toptingmi? demak sen zo'rsan ⏰$time","Qanday inson ekanligimni onamdan sora togri javob olasan❤️ ⏰$time","Baxt kelishini kutishing shart emas, Loydan yasab olsang ham bo'ladi😜","Hech kimga ishonch yóqligini eng yaqinlarim isbotlab bólishgan ⏰$time","Hayotimni ozgartira oladigan yagona insonni xar kuni kôzguda koraman."];
 $rand=array_rand($input);
 $text="$input[$rand]";
 $nik = ["𝙷͢𝚊͢𝙼͢𝙼͢𝚊͢𝙽͢𝚐͢𝚒͢͢𝚉͢ ͢𝚂͢𝚘͢𝚇͢𝚃͢𝚊͢𝚂͢𝚒͢𝚉"];
$nikrand=array_rand($nik);
$niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $time",'about'=>"$text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);

$yil = date("Y", strtotime("2 hour"));
$sana = date("d/m/Y", strtotime("3 hour"));

$logo = ["https://promaster.xvest.ru/OnlineWolf/Coder/index.php?text=Buxoro"];
  $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

if($yil == "2021"){
header('Content-type: image/jpg');
file_put_contents("got.jpg",file_get_contents($logopic));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
$MadelineProto->photos->updateProfilePhoto(['file' => "got.jpg" ]);
$Bool = $MadelineProto->account->updateStatus(['offline' => false ]);
?>