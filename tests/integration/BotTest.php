<?php
namespace CodeBot;

use CodeBot\Build\Solid;
use PHPUnit\Framework\TestCase;

class BotTest extends TestCase
{
    private $token = "TOKEN_AQUI";
    
    public function testAddMenu()
    {
        
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
        
        $bot = Solid::factory();
        Solid::pageAccessToken($this->token);
        $bot->addMenu("default", false, $call_to_action);
        
        $this->assertTrue(true);
    }
    
    public function testRemoveMenu()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->token);
        $bot->removeMenu();
        
        $this->assertTrue(true);
    }
    
    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->token);
        $bot->addGetStartedButton('iniciar');
        
        $this->assertTrue(true);
    }
    
    public function testRemoveGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->token);
        $bot->removeGetStartedButton();
        
        $this->assertTrue(true);
    }
}

