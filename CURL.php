<?php 

$web = curl_init('https://www.ican-education.com/berita-event/news/mengenal_sistem_pendidikan_di_luar_negeri');
curl_setopt($web,CURLOPT_HTTPHEADER,header('CONTENT -Type:aplication/json'));
print
json_encode($response_data);
$data=curl_exec($web);curl_close($web);
?>