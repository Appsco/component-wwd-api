<?php

namespace BWC\Component\WWDAPI\Xml;

class DomainAvailability 
{
    const AVAILABLE_UNKNOWN = -1;
    const AVAILABLE_NO = 0;
    const AVAILABLE_YES = 1;


    /** @var  string */
    public $domain;

    /** @var int */
    public $available;


    /**
     * @param string $domain
     * @param int $available
     */
    public function __construct($domain = null, $available = -1)
    {
        $this->domain = $domain;
        $this->available = $available;
    }

} 