<?php

namespace Project\HTTPProcessors;

class Greet extends \PHPixie\HTTPProcessors\Processor\Actions\Attribute
{
    protected $template;
    
    public function __construct($template)
    {
        $this->template = $template;
    }
    
    public function defaultAction($request)
    {
        $container = $this->template->get('greet');
        $container->message = "Have fun coding!";
        return $container;
    }
}