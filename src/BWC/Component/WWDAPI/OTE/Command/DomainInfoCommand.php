<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\Info;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DomainInfoCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('wwdapi:domain_info')
            ->setDescription('Get information about items that have been previously ordered.')
            ->addArgument('resource', InputArgument::OPTIONAL, 'Resource')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resource = $input->getArgument('resource');

        $api = Helper::getWwdApi();

        $info = new Info(
            mt_rand(100,999),
            Helper::getCredential(),
            null,
            null,
            'sibljasiblja.biz',
            '171877'
        );

        $result = $api->Info($info);

        var_dump($result);
    }

} 