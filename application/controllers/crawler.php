<?php

// download www.baidu.com
//$curl = curl_init("http://www.baidu.com");
//curl_exec($curl);
//curl_close($curl);

// download www.baidu.com and do some modification
//$curlobj = curl_init();
//curl_setopt($curlobj, CURLOPT_URL, "http://www.baidu.com");  //set the target url
//curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);        //set returntransfer
//$output = curl_exec($curlobj);
//curl_close($curlobj);
//echo str_replace("百度","Google", $output); 

//get weather information from WeatherWS API

$data = 'theCityName=北京';

$curlobj = curl_init();
curl_setopt($curlobj, CURLOPT_URL, "http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");  //set the target url
curl_setopt($curlobj, CURLOPT_HEADER, false);
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);        //set returntransfer
curl_setopt($curlobj, CURLOPT_POST, true);
curl_setopt($curlobj, CURLOPT_POSTFIELDS, $data);
//curl_setopt($curlobj, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded; charset=utf-8", "Content-length:".strlen($data)));
$rtn = curl_exec($curlobj);
if ( ! curl_errno($curlobj))
{
	echo 'RESULT: '.$rtn;
}
else
{
	echo 'Curl error: '.curl_errno($curlobj);
}
//echo str_replace("百度","Google", $output); 