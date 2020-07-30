<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function services()
    {

    	$long_url = 'http://webdisk.cursos.egpp.gob.bo/sisacademico/oferta/web/gestion-notarial-v6';
		$apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
		$genericAccessToken = '2a4d5d31d4a1e8fadba022d9325c1ceeafdc31eb';

		$data = array(
		    'long_url' => $long_url
		);
		$payload = json_encode($data);

		$header = array(
		    'Authorization: Bearer ' . $genericAccessToken,
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($payload)
		);

		$ch = curl_init($apiv4);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = curl_exec($ch);
		$resultToJson = json_decode($result);

		if (isset($resultToJson->link)) {
		    dd($resultToJson->link);
		}
		else {
		    dd('Not found');
		}


    }
}
