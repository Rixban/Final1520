<?php 
function summoner_name($summoner, $server) {
$summoner_encoded = rawurlencode($summoner);
$summoner_lower = strtolower($summoner_enc);
$curl = curl_init('https://' . $server . '.api.pvp.net/api/lol/' . $server . '/v1.4/summoner/by-name/' . $summoner . '?api_key=f997e34a-6afc-4245-b202-6ee678aa6c6f');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
return $result;
}
function summoner_info_array_name($summoner) {
$summoner_lower = mb_strtolower($summoner, 'UTF-8');
$summoner_nospaces = str_replace(' ', '', $summoner_lower);
return $summoner_nospaces;
}
$summoner_info = summoner_name($summoner, $server);
$summoner_info_array = json_decode($summoner_info, true);
$summoner_info_array_name = summoner_info_array_name($summoner);
$summoner_id = $summoner_info_array[$summoner_info_array_name]['id'];
?>