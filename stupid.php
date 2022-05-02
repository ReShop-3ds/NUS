<?php
header("Content-Type: text/xml;charset=utf-8");
$xml = simplexml_load_string(file_get_contents("php://input"));
$thingy = $xml->children('SOAP-ENV', true)->Body->children('nus', true)->GetSystemTitleHash;
echo '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soapenv:Body><GetSystemTitleHashResponse xmlns="urn:nus.wsapi.broadon.com"><Version>1.0</Version><DeviceId>'.$thingy->DeviceId.'</DeviceId><MessageId>'.$thingy->MessageId.'</MessageId><TimeStamp>'.time().'</TimeStamp><ErrorCode>0</ErrorCode><TitleHash>D2F8020CA37AC652691BF17CDD610182</TitleHash></GetSystemTitleHashResponse></soapenv:Body></soapenv:Envelope>';