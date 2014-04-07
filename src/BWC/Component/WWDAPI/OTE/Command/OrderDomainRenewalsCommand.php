<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\OrderDomainRenewals;
use BWC\Component\WWDAPI\OrderItem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrderDomainRenewalsCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('wwdapi:order_domain_renewals')
            ->setDescription('Renew the domain names')
            ->addArgument('domain', InputArgument::REQUIRED, 'Domain')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $domain = $input->getArgument('domain');

        $api = Helper::getWwdApi();

        $result = $api->OrderDomainRenewals(new OrderDomainRenewals(
                mt_rand(100,999),
                Helper::getCredential(),
                new Shopper('agree', '123', 'pwd'),
                array(
                    new OrderItem(350030),
                    'sibljaaaa',
                    'biz',
                    1
                ),
                ''
            ));

        var_dump($result);
    }
} 