//CURL PROXY BAĞLANTI NOKTASI VE PORT BİLGİSİ
$curllinkport = "curllink:port";

//CURL PROXY KULLANICI ADI VE ŞİFRESİ
$curluserpass = "curlkullaniciadi:sifre";

curl_setopt($ch, CURLOPT_PROXY, $curllinkport);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $curluserpass);
