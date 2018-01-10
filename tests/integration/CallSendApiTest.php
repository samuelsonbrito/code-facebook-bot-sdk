<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;
use CodeBot\Message\Text;

class CallSendApiTest extends TestCase{

	/**
	* @expectedException \GuzzleHttp\Exception\ClientException
	*/
	public function testMakeRequest(){

		$message = (new Text(1))->message('oi');
		(new CallSendApi('123123213123'))->make($message);
	}

}