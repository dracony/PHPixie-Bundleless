<?php

namespace Project;

class HTTPProcessor extends \PHPixie\HTTPProcessors\Processor\Dispatcher\Builder\Attribute
{
    protected $builder;
    protected $attribute = 'processor';
    
    public function __construct($builder)
    {
        $this->builder = $builder;
    }
    
    protected function buildGreetProcessor()
    {
        $components = $this->builder->components();
        
        return new HTTPProcessors\Greet(
            $components->template()    
        );
    }
}