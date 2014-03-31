<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\ContactInfo;
use BWC\Component\WWDAPI\DomainRegistration;
use BWC\Component\WWDAPI\NameGenDB;
use BWC\Component\WWDAPI\OrderDomains;
use BWC\Component\WWDAPI\OrderItem;
use BWC\Component\WWDAPI\Shopper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrderDomainsCommand extends Command
{
    protected function configure()
    {
        $this
                ->setName('wwdapi:order_domains')
                ->setDescription('Submits a domain purchases to the API')
                ->addArgument('domain', InputArgument::REQUIRED, 'Domain')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $domain = $input->getArgument('domain');

        $api = Helper::getWwdApi();


        $result = $api->OrderDomains(new OrderDomains(
                mt_rand(100,999),
                Helper::getCredential(),
                new Shopper('agree', '123', 'pwd'),
                array(
                    new DomainRegistration(
                        new OrderItem(350030),
                        'example',
                        'com',
                        1,
                        new ContactInfo('First', 'Last', 'pera@pera.com', 'glavna 12', 'Mladenovac', 'SR', '12123', 'Norway', '+1.4805058800')
                    )
                )
        ));

        var_dump($result);
    }

} 