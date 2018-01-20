<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;

class MenuManagerTest extends TestCase
{
    public function testMakeMenu()
    {
        $menu = new MenuManager('default');
        
        $call_to_action = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer',
                'parent_id' => 0,
                'value' => null
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Visiste o site do vue',
                'parent_id' => 0,
                'value' => "https://vue.org"
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Visiste o site do angular',
                'parent_id' => 1,
                'value' => "https://angular.io"
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opcoes iniciais',
                'parent_id' => 1,
                'value' => 'iniciar'
            ]
        ];
        
        foreach ($call_to_action as $action){
            $menu->callToAction($action['id'], $action['type'], $action['title'], $action['parent_id'], $action['value']);
        }
        
        $callSendApi = new CallSendApi('AQUI_VAI_O_TOKEN');
        $result = $callSendApi->make($menu->toArray(), CallSendApi::URL_PROFILE);
        $this->assertTrue(is_string($result));
    }
    
}

