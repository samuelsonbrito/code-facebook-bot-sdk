<?php

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testRetornaUmArray()
    {
    	
    	$actual = (new Text(1))->message('oi');

    	$expected = [
    		'recipient' =>[
    			'id'=> 1
    		],
    		'message' => [
    			'text' => 'oi',
    			'metadata' => 'DEVELOPER_DEFINED_METADATA'
    		]
    	];

    	$this->assertEquals($actual, $expected);
    }
}