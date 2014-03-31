<?php

namespace BWC\Component\WWDAPI\Tests\OTE;

//use BWC\Component\WWDAPI\Tests\OTE\_config;
use BWC\Component\WWDAPI\WWDAPI;
use BWC\Component\WWDAPI\Credential;

class Step01Test extends \PHPUnit_Framework_TestCase
{

    public function testStepOne()
    {
        $wsdl = 'https://api.ote.wildwestdomains.com/wswwdapi/wapi.asmx?wsdl';

        $credential = new Credential(818137 , '$1$Fmr7aasK$1iHGpB');

        $wwd = new WWDAPI($credential , $wsdl);
        $response = $wwd->describe();

        $this->assertEquals(empty($response), true);
    }

} 