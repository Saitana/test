<?php

	function deb($arr){
		echo"<pre>";print_r($arr);echo"</pre>";
	}
 
      $params = array(
                'queryType' => 9,
                'query' => 'BN=9781107696013',
                'startRecord' => '1',
                'endRecord' => '25',
                'sortField' => '' ,
                'liveUpdate' => '',
                'dataRequest' => 'stk'

        );
//$OrderRec = str_replace(' ','&nbsp;',$OrderRec);
$soapUrl = "https://cws.ingrambook.com/cws/contentws.aspx?UserName=KJV_7408&queryType=9&query=BN%3D9781107602656+&startRecord=1&endRecord=25&sortField=DE&liveUpdate=&isbn=9780812998603&dataRequest=stk";


	
	$headers = array(
				"POST /cws/companion.asmx/SearchRequestTypes12349Enhanced HTTP/1.1", 
				"Host: idswebtest.ingramcontent.com", 
				"Content-Type: application/x-www-form-urlencoded",
	"Content-Length: " . strlen($xml_post_string));

	$url = $soapUrl;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($ch);

	/*print_R( curl_getinfo($ch)); echo '<br/>1';
	print_R( curl_errno($ch)); echo '<br/>2';
	print_R( curl_error($ch)); echo '<br/>3';*/

	curl_close($ch);

	$response1 = str_replace("<soap:Body>", "", $response);
	$response2 = str_replace("</soap:Body>", "", $response1);
	//var_dump($response);
	$xml = new SimpleXMLElement($response);
	deb($xml);/*
	echo "res = ".$xml->DataSupplier;
	echo "<br>//--------------------------------------------------------------------------<br>";*/
	$res = array();
	foreach ($xml->Product->Ingram->Stock as $value) {
		foreach ($value as $key => $val) {
			echo "<b>".$key."</b><br>"."  OnHand: ".$val->OnHand."<br>";
		}	
	}

	
	//echo "<xmp>" . $response2 . "</xmp>";
	Mage::log('RESPONSE:',null,'ingram.log');
	Mage::log($response2,null,'ingram.log');
	$parser = simplexml_load_string($response2);
exit;