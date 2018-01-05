<?php 

namespace CodeBot\TemplatesMessage;

use CodeBot\Message\Message;

class ButtonsTemplate implements Message
{
	protected $buttons = [];
	protected $recipientId;

    public function __construct(string $recipientId){
    	$this->recipientId = $recipientId;
    }

    public function add($element){
    	$this->buttons[] = $element->get();
    }

	public function message(string $messageText){

		return [

			'recipient' => [

				'id' => $this->recipientId

			],

    		'message' => [
    			'attachment' => [
    				'type' => 'template',
    				'payload' => [
    					'template_type' => 'button',
    					'text' => $messageText,
    					'buttons' => $this->buttons
    				]
    			]
    		]

		];
	}
}