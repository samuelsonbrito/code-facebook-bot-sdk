<?php
namespace CodeBot\TemplatesMessage;

use CodeBot\Element\Button;
use CodeBot\Element\Product;
use PHPUnit\Framework\TestCase;

class ListTemplateTest extends TestCase
{

    public function testListaComTresProdutos() {
        
        $product = new Product('Produto','https://vuejs.org/images/logo.png','Curso de VueJS', new Button('web_url',null,'https://vuejs.org'));
        
        $template = new ListTemplate(1234);
        $template->add($product);
        
        $actual = $template->message('qwe');
        
        $expected = [
            
            'recipient' => [
                
                'id' => 1234
                
            ],
            
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'elements' => [
                            [
                                'title' => 'Produto',
                                'subtitle' => 'Curso de VueJS',
                                'image_url' => 'https://vuejs.org/images/logo.png',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://vuejs.org'
                                ],
                            ]
                        ]
                    ]
                ]
            ]
            
        ];
        
        $this->assertEquals($expected, $actual);
        
    }
}

