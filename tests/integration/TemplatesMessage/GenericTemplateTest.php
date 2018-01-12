<?php
namespace CodeBot\TemplatesMessage;

use PHPUnit\Framework\TestCase;
use CodeBot\Element\Product;
use CodeBot\Element\Button;

class GenericTemplateTest extends TestCase
{

    public function testListaComTresProdutos() {
        
        $product = new Product('Produto','https://vuejs.org/images/logo.png','Curso de VueJS', new Button('web_url',null,'https://vuejs.org'));
        
        $template = new GenericTemplate(1234);
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
                        'template_type' => 'generic',
                        'buttons' => [
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

