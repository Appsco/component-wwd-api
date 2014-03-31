<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\NameGenDB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NameGenDbCommand extends Command
{
    protected function configure()
    {
        $this
                ->setName('wwdapi:name_gen_db')
                ->setDescription('Gets the lists of alternative domain names based on a given name')
                ->addArgument('domain', InputArgument::REQUIRED, 'Domain')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $domain = $input->getArgument('domain');

        $api = Helper::getWwdApi();


        $result = $api->NameGenDB(new NameGenDB(
                mt_rand(100,999),
                Helper::getCredential(),
                $domain
        ));

        var_dump($result);
    }

} 