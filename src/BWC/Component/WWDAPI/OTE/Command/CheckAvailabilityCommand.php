<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use Symfony\Component\Console\Input\InputArgument;

class CheckAvailabilityCommand extends Step01Command
{
    protected function configure()
    {
        parent::configure();

        $this->setName('wwdapi:check_availability');
    }

} 