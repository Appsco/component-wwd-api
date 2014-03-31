<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\CheckAvailability;
use BWC\Component\WWDAPI\WAPI;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class Step01Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('wwdapi:ote:step01')
            ->setDescription('Domain Name Availability Check')
            ->addArgument('domains', InputArgument::REQUIRED, 'Domain')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $arrDomains = array($input->getArgument('domains'));

        $api = Helper::getWwdApi();

        $result = $api->CheckAvailability(
                new CheckAvailability(
                        mt_rand(100,999),
                        Helper::getCredential(),
                        $arrDomains,
                        array(),
                        array()
                )
        );

        foreach ($result as $domain) {
            $output->writeln(sprintf("Domain '%s' %s", $domain->domain, $domain->available));
        }
    }


    /**
     * @return array
     */
    protected function getConfig()
    {
        $config = Yaml::parse(file_get_contents(__DIR__.'/config.yml'));
        return $config;
    }
} 