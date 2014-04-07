<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\ContactInfo;
use BWC\Component\WWDAPI\DomainRegistration;
use BWC\Component\WWDAPI\NS;
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
        $registrant1 = new ContactInfo('Artemus', 'Gordon', 'agordon@wildwestdomains.com', '2 N. Main St.', 'Valdosta', 'Georgia', '17123', 'United States', '(888)555-1212');

        $orderItem = new OrderItem(350077);

        $ns1 = new NS("ns1.example.com");
        $ns2 = new NS("ns2.example.com");
        $nsArray = array((array)$ns1, (array)$ns2);


        $domainParts = explode('.',$domain);
        $domainRegistration =  new DomainRegistration(
            $orderItem,
            $domainParts[0],
            $domainParts[1],
            2,
            $registrant1,
            $nsArray
        );

        $result = $api->OrderDomains(new OrderDomains(
                mt_rand(100,999),
                Helper::getCredential(),
                new Shopper('agree', '851283', 'pass'),
                array($domainRegistration)
            )
        );



        var_dump($result);
    }

} 