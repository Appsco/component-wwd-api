<?php

namespace BWC\Component\WWDAPI\Xml;

class DomainNameGenDb 
{
    /** @var  string */
    public $name;

    /** @var  int */
    public $rate;

    /** @var  bool */
    public $isTypedName;


    function __construct($name, $rate, $isTypedName)
    {
        $this->name = $name;
        $this->rate = $rate;
        $this->isTypedName = $isTypedName;
    }


} 