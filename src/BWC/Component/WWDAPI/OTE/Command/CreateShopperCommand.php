<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\CreateNewShopper;
use BWC\Component\WWDAPI\NameGenDB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateShopperCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('wwdapi:create_shopper')
            ->setDescription('Create shopper ... ')
            ->addArgument('password', InputArgument::REQUIRED, 'Password')
            ->addArgument('email', InputArgument::REQUIRED, 'Email')
            ->addArgument('firstname', InputArgument::REQUIRED, 'Firstname')
            ->addArgument('lastname', InputArgument::REQUIRED, 'Lastname')
            ->addArgument('phone', InputArgument::REQUIRED, 'Lastname')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $password = $input->getArgument('password');
        $email = $input->getArgument('email');
        $firstname = $input->getArgument('firstname');
        $lastname = $input->getArgument('lastname');
        $phone = $input->getArgument('phone');
        $api = Helper::getWwdApi();


        $result = $api->CreateNewShopper(new CreateNewShopper(
                mt_rand(100,999),
                Helper::getCredential(),
                $password,
                $email,
                $firstname,
                $lastname,
                $phone
            ));

        return var_dump($result);
        // should connect shopper with appsco identity
    }

} 