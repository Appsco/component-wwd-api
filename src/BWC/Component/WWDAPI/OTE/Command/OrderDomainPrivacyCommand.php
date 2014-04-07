<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\DomainByProxy;
use BWC\Component\WWDAPI\OrderDomainPrivacy;
use BWC\Component\WWDAPI\Shopper;
use BWC\Component\WWDAPI\OrderItem;
use Symfony\Bridge\Propel1\Tests\Fixtures\Item;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrderDomainPrivacyCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('wwdapi:order_domain_privacy')
            ->setDescription('method is used to add privacy to an existing domain name registration')
            ->addArgument('resource', InputArgument::OPTIONAL, 'Resource')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resource = $input->getArgument('resource');

        $api = Helper::getWwdApi();

        $konj = new OrderItem(377001, 1, 1);
        $dbp = new DomainByProxy($konj, 'example', 'biz', 'domain:31578');

        $odp = new OrderDomainPrivacy(
            mt_rand(100,999),
            Helper::getCredential(),
            new Shopper('agree','834066', 'abcde', '', 'agordon@wildwestdomains.com', 'Artemus', 'Gordon', '+1.8885551212', '12341', 'createNew', 'defgh', '', 'info@example.biz', ''),
            array($dbp),
            ''
        );

        $result = $api->OrderDomainPrivacy($odp);

        var_dump($result);
    }
}



















