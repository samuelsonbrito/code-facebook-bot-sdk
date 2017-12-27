<?php 

namespace CodeBot\Message;

interface Message{
	public function __construct(string $recipientId);
}