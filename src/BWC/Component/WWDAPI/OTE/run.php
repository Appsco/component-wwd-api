<?php

require_once __DIR__ . '/../../../../../autoload.php';

$application = new Symfony\Component\Console\Application();

$application->add(new \BWC\Component\WWDAPI\OTE\Command\Step01Command());
$application->add(new \BWC\Component\WWDAPI\OTE\Command\CheckAvailabilityCommand());
$application->add(new \BWC\Component\WWDAPI\OTE\Command\NameGenDbCommand());
$application->add(new \BWC\Component\WWDAPI\OTE\Command\OrderDomainsCommand());
$application->add(new \BWC\Component\WWDAPI\OTE\Command\CreateShopperCommand());
$application->add(new \BWC\Component\WWDAPI\OTE\Command\DomainInfoCommand());
$application->add(new \BWC\Component\WWDAPI\OTE\Command\DomainInfoCommand());

$application->run();
