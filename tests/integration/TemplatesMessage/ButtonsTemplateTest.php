<?php 

namespace CodeBot\TemplatesMessage;

use PHPUnit\Framework\TestCase;
use CodeBot\Element\Button;

class ButtonsTemplateTest extends TestCase{

	public function testRetornoComBotaoNoFormatoArray(){

		$buttonsTemplate = new ButtonsTemplate('1234');
		$buttonsTemplate->add(new Button('postback','Que tal uma resposta do bot','resposta'));
		$actual = $buttonsTemplate->message('olha um exemplo de template com botoes');

		$expected = [

			'recipient' => [

				'id' => 1234

			],

    		'message' => [
    			'attachment' => [
    				'type' => 'template',
    				'payload' => [
    					'template_type' => 'button',
    					'text' => 'olha um exemplo de template com botoes',
    					'buttons' => [

							[

								'type' => 'postback',
								'title' => 'Que tal uma resposta do bot',
								'payload' => 'resposta'

							]

    					]
    				]
    			]
    		]

		];

		$this->assertEquals($expected,$actual);

	}
}