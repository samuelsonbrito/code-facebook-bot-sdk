<?php 

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\ElementInterface;
use CodeBot\Message\Message;

interface TemplateInterface extends Message
{

    public function add(ElementInterface $element);

}