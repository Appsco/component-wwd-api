<?php

namespace BWC\Component\WWDAPI;

use BWC\Component\WWDAPI\Xml\DomainAvailability;
use BWC\Component\WWDAPI\Xml\DomainNameGenDb;

class WwdApi
{
    const DEFAULT_STATUS = 1000;

    static private $responseCodes = array(
        1000 => 'Success',
        1001 => 'Failure',
        1002 => 'Request too big',
        1500 => 'Login denied - account at connection limit',
        1501 => 'Login denied - invalid account IP address',
        1502 => 'Login Denied - account inactive',
        1003 => 'No messages waiting',
        1004 => 'Messages waiting',
        2000 => 'Empty',
        2001 => 'Required field(s) missing',
        2002 => 'Pattern matching error',
        2003 => 'Field too big',
        2004 => 'DB matching error',
    );

    /** @var \BWC\Component\WWDAPI\WAPI  */
    protected $wapi;


    /**
     * @param WAPI $wapi
     */
    public function __construct(WAPI $wapi)
    {
        $this->wapi = $wapi;
    }


    /**
     * @param string $xml
     * @return \SimpleXMLElement
     * @throws WwdApiException
     */
    protected function getXml($xml)
    {
        $root = simplexml_load_string($xml);

        $result = $root->result;
        if ($result) {
            $code = (string)$result["code"];
            if ($code != self::DEFAULT_STATUS) {
                $msg = (string)$result->msg;
                if (!$msg) {
                    $msg = (string)$root->resdata->error["msg"];
                }
                throw new WwdApiException($msg, $code);
            }
        }

        return $root;
    }


//    /**
//     * @param string $xml
//     * @throws WwdApiException
//     * @return \DOMXPath
//     */
//    protected function getXPath($xml)
//    {
//        $doc = new \DOMDocument();
//        $doc->loadXML($xml);
//
//        $xpath = new \DOMXPath($doc);
//
//
//        $list = $xpath->query('/response/result');
//        if ($list->length > 0) {
//            /** @var \DOMElement $node */
//            $node = $list->item(0);
//            if ($node->hasAttribute('code')) {
//                $code = $node->getAttribute('code');
//                if ($code != self::DEFAULT_STATUS) {
//                    throw new WwdApiException($node->firstChild->textContent, $code);
//                }
//            }
//        }
//
//        return $xpath;
//    }



    // ----------------------------------------



    /**
     * This method is used for modifying associated contact information for the given domains.
     *
     * @param UpdateDomainContact $parameters
     * @access public
     * @return UpdateDomainContactResponse
     */
    public function UpdateDomainContact(UpdateDomainContact $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to get the list of alternative domain names based on a given name (Domains Bot Service).
     *
     * @param NameGenDB $parameters
     * @access public
     * @return DomainNameGenDb[]
     */
    public function NameGenDB(NameGenDB $parameters)
    {
        $response = $this->wapi->NameGenDB($parameters);

        $elem = @simplexml_load_string($response->NameGenDBResult);
        $list = $elem->resdata->Domains->Domain;

        $result = array();
        foreach ($list as $xml) {
            /** @var \SimpleXMLElement $xml */
            $result[] = new DomainNameGenDb(
                (string)$xml->Name,
                (string)$xml->Rate,
                strcasecmp((string)$xml->IsTypedName, 'true') == 0 ? true : false
            );
        }
        return $result;
    }

    /**
     * Used for renewing service items.
     *
     * @param OrderServiceRenewals $parameters
     * @access public
     * @return OrderServiceRenewalsResponse
     */
    public function OrderServiceRenewals(OrderServiceRenewals $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Remove a specific SMTP relay fom an email address by the given resource id.
     *
     * @param RemoveSmtpRelay $parameters
     * @access public
     * @return RemoveSmtpRelayResponse
     */
    public function RemoveSmtpRelay(RemoveSmtpRelay $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to get the legal agreement content that resellers need to display and get approval from their customers.
     *
     * @param GetLegalAgreementContent $parameters
     * @access public
     * @return GetLegalAgreementContentResponse
     */
    public function GetLegalAgreementContent(GetLegalAgreementContent $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for redeeming expired domains.
     *
     * @param OrderDomainRedemptions $parameters
     * @access public
     * @return OrderDomainRedemptionsResponse
     */
    public function OrderDomainRedemptions(OrderDomainRedemptions $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of email and email forwarding resource ids associated with the given shopper.
     *
     * @param GetEmailPlansForShopper $parameters
     * @access public
     * @return GetEmailPlansForShopperResponse
     */
    public function GetEmailPlansForShopper(GetEmailPlansForShopper $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for validating a domain's period and contacts.
     *
     * @param ValidateRegistration $parameters
     * @access public
     * @return ValidateRegistrationResponse
     */
    public function ValidateRegistration(ValidateRegistration $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Email products management method.
     *
     * @param SetSmtpRelays $parameters
     * @access public
     * @return SetSmtpRelaysResponse
     */
    public function SetSmtpRelays(SetSmtpRelays $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for transfering ownership of a domain from one user to another.
     *
     * @param OrderDomainTransfers $parameters
     * @access public
     * @return OrderDomainTransfersResponse
     */
    public function OrderDomainTransfers(OrderDomainTransfers $parameters)
    {
        $response = $this->wapi->OrderDomainTransfers($parameters);
        $xml = $this->getXml($response->OrderDomainTransfersResponse);
        return $xml;
    }

    /**
     * Used for updating an existing domain alert record.
     *
     * @param UpdateDomainAlert $parameters
     * @access public
     * @return UpdateDomainAlertResponse
     */
    public function UpdateDomainAlert(UpdateDomainAlert $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method decodes a Punycode domain to Unicode (UTF-8) format.
     *
     * @param GetUnicodeIDN $parameters
     * @access public
     * @return GetUnicodeIDNResponse
     */
    public function GetUnicodeIDN(GetUnicodeIDN $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Checks the availability of domains, hosts and name servers.
     *
     * @param CheckAvailability $parameters
     * @access public
     * @return DomainAvailability[]
     */
    public function CheckAvailability(CheckAvailability $parameters)
    {
        $response = $this->wapi->CheckAvailability($parameters);

        $xml = $this->getXml($response->CheckAvailabilityResult);

        $result = array();
        foreach ($xml->domain as $node) {
            /** @var \SimpleXMLElement $node */
            $result[] = new DomainAvailability($node['name'], $node['avail']);
        }

        return $result;
    }

    /**
     * Used for resetting the user's password in the WWD system.
     *
     * @param ResetPassword $parameters
     * @access public
     * @return ResetPasswordResponse
     */
    public function ResetPassword(ResetPassword $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for registering new domain names.
     *
     * @param OrderDomains $parameters
     * @access public
     * @return OrderDomainsResponse
     */
    public function OrderDomains(OrderDomains $parameters)
    {
        $response = $this->wapi->OrderDomains($parameters);

        $xml = $this->getXml($response->OrderDomainsResult);

        return $response;
    }

    /**
     * Get a list of email and email forwarding resource ids associated with the given shopper.
     *
     * @param GetIMAPForEmail $parameters
     * @access public
     * @return GetIMAPForEmailResponse
     */
    public function GetIMAPForEmail(GetIMAPForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Retrieve the SMTP relays allotted and used for the given email address.
     *
     * @param GetSMTPRelaysForEmail $parameters
     * @access public
     * @return GetSMTPRelaysForEmailResponse
     */
    public function GetSMTPRelaysForEmail(GetSMTPRelaysForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for back ordering an existing (public or private) domain name.
     *
     * @param OrderDomainBackOrders $parameters
     * @access public
     * @return OrderDomainBackOrdersResponse
     */
    public function OrderDomainBackOrders(OrderDomainBackOrders $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of SMTP relay resource ids associated with the given email address.
     *
     * @param GetSMTPRelayPlansForEmail $parameters
     * @access public
     * @return GetSMTPRelayPlansForEmailResponse
     */
    public function GetSMTPRelayPlansForEmail(GetSMTPRelayPlansForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for changing the ownership of a resource from one end user to another (both must be end-users of the currently logged in reseller).
     *
     * @param UpdateDomainOwnership $parameters
     * @access public
     * @return UpdateDomainOwnershipResponse
     */
    public function UpdateDomainOwnership(UpdateDomainOwnership $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of email and email forwarding resource ids associated with the given domain name.
     *
     * @param GetEmailPlansForDomain $parameters
     * @access public
     * @return GetEmailPlansForDomainResponse
     */
    public function GetEmailPlansForDomain(GetEmailPlansForDomain $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to get the list of alternative domain names based on a given name.
     *
     * @param NameGen $parameters
     * @access public
     * @return NameGenResponse
     */
    public function NameGen(NameGen $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Change the customer facing description of an email or email forwarding plan.
     *
     * @param RenameEmailPlan $parameters
     * @access public
     * @return RenameEmailPlanResponse
     */
    public function RenameEmailPlan(RenameEmailPlan $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for forwarding a domain to a specified URL.
     *
     * @param DomainForwarding $parameters
     * @access public
     * @return DomainForwardingResponse
     */
    public function DomainForwarding(DomainForwarding $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to place an order on items that do not require customization (non-domain).
     *
     * @param OrderCredits $parameters
     * @access public
     * @return OrderCreditsResponse
     */
    public function OrderCredits(OrderCredits $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for creating a new reseller sub-account.
     *
     * @param CreateNewShopper $parameters
     * @access public
     * @return CreateNewShopperResponse
     */
    public function CreateNewShopper(CreateNewShopper $parameters)
    {
        $response = $this->wapi->CreateNewShopper($parameters);
        $xml = $this->getXml($response->CreateNewShopperResult);
        $result = $xml->resdata->shopper['user'];
        return $result;
    }

    /**
     * This method is used for performing multiple domain forwarding.
     *
     * @param UpdateDomainForwarding $parameters
     * @access public
     * @return UpdateDomainForwardingResponse
     */
    public function UpdateDomainForwarding(UpdateDomainForwarding $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Email products management method.
     *
     * @param TestEmailPassword $parameters
     * @access public
     * @return TestEmailPasswordResponse
     */
    public function TestEmailPassword(TestEmailPassword $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Provide support for calling WWD services using legacy WAPI request XMLs.
     *
     * @param ProcessRequest $parameters
     * @access public
     * @return ProcessRequestResponse
     */
    public function ProcessRequest(ProcessRequest $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for renewing registration for existing private domain names.
     *
     * @param OrderPrivateDomainRenewals $parameters
     * @access public
     * @return OrderPrivateDomainRenewalsResponse
     */
    public function OrderPrivateDomainRenewals(OrderPrivateDomainRenewals $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to get the available balance for a given Private Label ID.
     *
     * @param GetAvailableBalance $parameters
     * @access public
     * @return GetAvailableBalanceResponse
     */
    public function GetAvailableBalance(GetAvailableBalance $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for querying a list of monitored domains.
     *
     * @param GetMonitoredDomainList $parameters
     * @access public
     * @return GetMonitoredDomainListResponse
     */
    public function GetMonitoredDomainList(GetMonitoredDomainList $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of SMTP relay resource ids associated with the given domain.
     *
     * @param GetSMTPRelayPlansForDomain $parameters
     * @access public
     * @return GetSMTPRelayPlansForDomainResponse
     */
    public function GetSMTPRelayPlansForDomain(GetSMTPRelayPlansForDomain $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for modifying DNS settings for a given domain.
     *
     * @param ModifyDNS $parameters
     * @access public
     * @return ModifyDNSResponse
     */
    public function ModifyDNS(ModifyDNS $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get email addresses associated with the given shopper.
     *
     * @param GetEmailAddressesForShopper $parameters
     * @access public
     * @return GetEmailAddressesForShopperResponse
     */
    public function GetEmailAddressesForShopper(GetEmailAddressesForShopper $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Reassign an email address to a different email plan.
     *
     * @param MoveEmailAccount $parameters
     * @access public
     * @return MoveEmailAccountResponse
     */
    public function MoveEmailAccount(MoveEmailAccount $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for checking whether the account information for the specified user is valid or not.
     *
     * @param CheckUser $parameters
     * @access public
     * @return CheckUserResponse
     */
    public function CheckUser(CheckUser $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Create/Update and email/forwarding account’s Auto Responder.
     *
     * @param SetAutoResponder $parameters
     * @access public
     * @return SetAutoResponderResponse
     */
    public function SetAutoResponder(SetAutoResponder $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to place an order for services (e.g. email) and/or service add-ons.
     *
     * @param OrderServices $parameters
     * @access public
     * @return OrderServicesResponse
     */
    public function OrderServices(OrderServices $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for managing the transfer of domains.
     *
     * @param ManageTransfer $parameters
     * @access public
     * @return ManageTransferResponse
     */
    public function ManageTransfer(ManageTransfer $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get detailed information about a single, or all email/forwarding plans associated with the given shopper.
     *
     * @param GetEmailPlanInfoForShopper $parameters
     * @access public
     * @return GetEmailPlanInfoForShopperResponse
     */
    public function GetEmailPlanInfoForShopper(GetEmailPlanInfoForShopper $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for querying the number of domain alert, private backorder, and backorder credits.
     *
     * @param GetDomainAlertCredits $parameters
     * @access public
     * @return GetDomainAlertCreditsResponse
     */
    public function GetDomainAlertCredits(GetDomainAlertCredits $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method encodes a Unicode (UTF-8) domain to Punycode format.
     *
     * @param GetPunycodeIDN $parameters
     * @access public
     * @return GetPunycodeIDNResponse
     */
    public function GetPunycodeIDN(GetPunycodeIDN $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of SMTP relays associated with the given shopper.
     *
     * @param GetSMTPRelaysForShopper $parameters
     * @access public
     * @return GetSMTPRelaysForShopperResponse
     */
    public function GetSMTPRelaysForShopper(GetSMTPRelaysForShopper $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of email addresses associated with a resource id.
     *
     * @param GetEmailAddressesForPlan $parameters
     * @access public
     * @return GetEmailAddressesForPlanResponse
     */
    public function GetEmailAddressesForPlan(GetEmailAddressesForPlan $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Sets a service add-on's quantity, which either downgrades or submit new add-on orders.
     *
     * @param SetServiceAddOnQty $parameters
     * @access public
     * @return SetServiceAddOnQtyResponse
     */
    public function SetServiceAddOnQty(SetServiceAddOnQty $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get a list of email addresses associated with a domain ordered by username.
     *
     * @param GetEmailAddressesForDomain $parameters
     * @access public
     * @return GetEmailAddressesForDomainResponse
     */
    public function GetEmailAddressesForDomain(GetEmailAddressesForDomain $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for retrieving languages for IDN TLDs.
     *
     * @param GetIDNLanguageList $parameters
     * @access public
     * @return GetIDNLanguageListResponse
     */
    public function GetIDNLanguageList(GetIDNLanguageList $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for modifying associated name servers for the given domains.
     *
     * @param UpdateNameServer $parameters
     * @access public
     * @return UpdateNameServerResponse
     */
    public function UpdateNameServer(UpdateNameServer $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for renewing registration for existing public domain names.
     *
     * @param OrderDomainRenewals $parameters
     * @access public
     * @return OrderDomainRenewalsResponse
     */
    public function OrderDomainRenewals(OrderDomainRenewals $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Determine if an email address is a catchall for its domain.
     *
     * @param GetCatchallStatusForEmail $parameters
     * @access public
     * @return GetCatchallStatusForEmailResponse
     */
    public function GetCatchallStatusForEmail(GetCatchallStatusForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to get the legal agreement url that resellers need to display and get approval from their customers.
     *
     * @param GetLegalAgreementUrl $parameters
     * @access public
     * @return GetLegalAgreementUrlResponse
     */
    public function GetLegalAgreementUrl(GetLegalAgreementUrl $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for setting domain alert credit or backorder a domain.
     *
     * @param SetupDomainAlert $parameters
     * @access public
     * @return SetupDomainAlertResponse
     */
    public function SetupDomainAlert(SetupDomainAlert $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Retrieve the current status of an email.
     *
     * @param GetStatusForEmail $parameters
     * @access public
     * @return GetStatusForEmailResponse
     */
    public function GetStatusForEmail(GetStatusForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for renewing non-domain items.
     *
     * @param OrderResourceRenewals $parameters
     * @access public
     * @return OrderResourceRenewalsResponse
     */
    public function OrderResourceRenewals(OrderResourceRenewals $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Retrieve the Disk Space Used and Quota for an email address.
     *
     * @param GetDiskUsageForEmail $parameters
     * @access public
     * @return GetDiskUsageForEmailResponse
     */
    public function GetDiskUsageForEmail(GetDiskUsageForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to get the list of alternative domain names based on a given name (Domains Bot Service).
     *
     * @param NameGenDBWithTimeLimit $parameters
     * @access public
     * @return NameGenDBWithTimeLimitResponse
     */
    public function NameGenDBWithTimeLimit(NameGenDBWithTimeLimit $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Deletes an email address.
     *
     * @param RemoveEmailAddress $parameters
     * @access public
     * @return RemoveEmailAddressResponse
     */
    public function RemoveEmailAddress(RemoveEmailAddress $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Retrieve the RIM status for an email address.
     *
     * @param GetRIMForEmail $parameters
     * @access public
     * @return GetRIMForEmailResponse
     */
    public function GetRIMForEmail(GetRIMForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Unsubscribe an email address from RIM.
     *
     * @param RemoveRIMAccount $parameters
     * @access public
     * @return RemoveRIMAccountResponse
     */
    public function RemoveRIMAccount(RemoveRIMAccount $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for removing an existing domain alert record.
     *
     * @param RemoveDomainAlert $parameters
     * @access public
     * @return RemoveDomainAlertResponse
     */
    public function RemoveDomainAlert(RemoveDomainAlert $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Returns activity timeout and version information from the server.
     *
     * @param Describe $parameters
     * @access public
     * @return DescribeResponse
     */
    public function Describe(Describe $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Email products management method.
     *
     * @param SetRIMAccount $parameters
     * @access public
     * @return SetRIMAccountResponse
     */
    public function SetRIMAccount(SetRIMAccount $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to retrieve status notifications about pending orders.
     *
     * @param Poll $parameters
     * @access public
     * @return PollResponse
     */
    public function Poll(Poll $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Gets information about items that have been previously ordered.
     *
     * @param Info $parameters
     * @access public
     * @return InfoResponse
     */
    public function Info(Info $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used to resend RAA verification to the resellers customer or the domain registrant.
     *
     * @param ResendContactValidation $parameters
     * @access public
     * @return ResendContactValidationResponse
     */
    public function ResendContactValidation(ResendContactValidation $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for setting or clearing the lock on a list of domains.
     *
     * @param SetDomainLocking $parameters
     * @access public
     * @return SetDomainLockingResponse
     */
    public function SetDomainLocking(SetDomainLocking $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get detailed information about a single, or all email addresses associated with the given shopper.
     *
     * @param GetEmailAddressInfoForShopper $parameters
     * @access public
     * @return GetEmailAddressInfoForShopperResponse
     */
    public function GetEmailAddressInfoForShopper(GetEmailAddressInfoForShopper $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for cancelling existing resources.
     *
     * @param Cancel $parameters
     * @access public
     * @return CancelResponse
     */
    public function Cancel(Cancel $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used to get the list of expiring domain names for users that have an Investors Edge subscription.
     *
     * @param GetExpiringNameList $parameters
     * @access public
     * @return GetExpiringNameListResponse
     */
    public function GetExpiringNameList(GetExpiringNameList $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Checks the availability of domains, supports IDN domain checks.
     *
     * @param CheckDomains $parameters
     * @access public
     * @return CheckDomainsResponse
     */
    public function CheckDomains(CheckDomains $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for allowing the reseller to modify the user information for either their top-level account or any of its sub-accounts.
     *
     * @param SetShopperInfo $parameters
     * @access public
     * @return SetShopperInfoResponse
     */
    public function SetShopperInfo(SetShopperInfo $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Retrieve the Auto Response/Vacation settings for an email address.
     *
     * @param GetAutoResponderForEmail $parameters
     * @access public
     * @return GetAutoResponderForEmailResponse
     */
    public function GetAutoResponderForEmail(GetAutoResponderForEmail $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * This method is used for performing multiple domain masking.
     *
     * @param UpdateDomainMasking $parameters
     * @access public
     * @return UpdateDomainMaskingResponse
     */
    public function UpdateDomainMasking(UpdateDomainMasking $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Get detailed info about a single SMTP relay product, or for every SMTP relay products associated with the given shopper.
     *
     * @param GetSMTPRelayInfoForShopper $parameters
     * @access public
     * @return GetSMTPRelayInfoForShopperResponse
     */
    public function GetSMTPRelayInfoForShopper(GetSMTPRelayInfoForShopper $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Create/Update and email/forwarding account.
     *
     * @param SetEmailAccount $parameters
     * @access public
     * @return SetEmailAccountResponse
     */
    public function SetEmailAccount(SetEmailAccount $parameters)
    {
        throw new \LogicException("Not implemented");
    }

    /**
     * Used for adding privacy to a domain registration.
     *
     * @param OrderDomainPrivacy $parameters
     * @access public
     * @return OrderDomainPrivacyResponse
     */
    public function OrderDomainPrivacy(OrderDomainPrivacy $parameters)
    {
        throw new \LogicException("Not implemented");
    }

} 