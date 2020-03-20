<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bitly\BitlyClient;

class ShortUrlController extends Controller
{

	public function short()
	{
		$bitlyClient = new BitlyClient('Enter your token');

		$options = [
		    'longUrl' => 'http://www.example.com/a-log-url-slug/',
		];

		$response = $bitlyClient->shorten($options);

		print_r($response);

		return view('short');

	}
    
}
