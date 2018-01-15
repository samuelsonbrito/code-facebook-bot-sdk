<?php
namespace CodeBot;

use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{

    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('iniciar');
        $callSendApi = new CallSendApi('aqui vai seu page access token');
        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE);
        
        $this->assertTrue(is_string($result));
    }
    
}

