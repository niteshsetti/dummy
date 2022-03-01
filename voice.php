<?php
$txt="Hello Welcome to my World";
$txt=htmlspecialchars($txt);
$txt=rawurlencode($txt);
$audio=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
$speech="<audio controls='controls' autoplay></audio>";
echo $speech;
?>