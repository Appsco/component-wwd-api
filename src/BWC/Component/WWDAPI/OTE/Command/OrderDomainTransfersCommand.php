<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\DomainTransfer;
use BWC\Component\WWDAPI\OrderDomainTransfers;
use BWC\Component\WWDAPI\Shopper;
use BWC\Component\WWDAPI\OrderItem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrderDomainTransfersCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('wwdapi:order_domain_transfers')
            ->setDescription('Order domain transfers call to API')
            ->addArgument('domain', InputArgument::REQUIRED, 'Domain')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output){
        $api = Helper::getWwdApi();
        // $productid, $parent_resource_id = null, $quantity = 1, $riid = "1", $duration = 1.0

        $oi = new OrderItem('350011');
        $sld = 'example';
        $tld = 'com';
        $authInfo = '851774';
        $idnScript = '';

        $dt = new DomainTransfer($oi, $sld, $tld, $authInfo, $idnScript);
        $items[] = $dt;

        $result = $api->OrderDomainTransfers(new OrderDomainTransfers(
                mt_rand(100,999),
                Helper::getCredential(),
                new Shopper('agree', '851773', '12345'),
                $items
            )
        );
        var_dump($result);
    }
}