<?php

namespace BWC\Component\WWDAPI;

/**
 *
 */
class WAPI extends \SoapClient
{

  /**
   *
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ProcessRequest' => '\BWC\Component\WWDAPI\ProcessRequest',
    'ProcessRequestResponse' => '\BWC\Component\WWDAPI\ProcessRequestResponse',
    'Describe' => '\BWC\Component\WWDAPI\Describe',
    'Credential' => '\BWC\Component\WWDAPI\Credential',
    'DescribeResponse' => '\BWC\Component\WWDAPI\DescribeResponse',
    'CheckAvailability' => '\BWC\Component\WWDAPI\CheckAvailability',
    'CheckAvailabilityResponse' => '\BWC\Component\WWDAPI\CheckAvailabilityResponse',
    'CheckDomains' => '\BWC\Component\WWDAPI\CheckDomains',
    'CheckDomain' => '\BWC\Component\WWDAPI\CheckDomain',
    'CheckDomainsResponse' => '\BWC\Component\WWDAPI\CheckDomainsResponse',
    'Info' => '\BWC\Component\WWDAPI\Info',
    'InfoResponse' => '\BWC\Component\WWDAPI\InfoResponse',
    'NameGen' => '\BWC\Component\WWDAPI\NameGen',
    'NameGenResponse' => '\BWC\Component\WWDAPI\NameGenResponse',
    'NameGenDB' => '\BWC\Component\WWDAPI\NameGenDB',
    'NameGenDBResponse' => '\BWC\Component\WWDAPI\NameGenDBResponse',
    'NameGenDBWithTimeLimit' => '\BWC\Component\WWDAPI\NameGenDBWithTimeLimit',
    'NameGenDBWithTimeLimitResponse' => '\BWC\Component\WWDAPI\NameGenDBWithTimeLimitResponse',
    'Poll' => '\BWC\Component\WWDAPI\Poll',
    'PollResponse' => '\BWC\Component\WWDAPI\PollResponse',
    'OrderCredits' => '\BWC\Component\WWDAPI\OrderCredits',
    'Shopper' => '\BWC\Component\WWDAPI\Shopper',
    'OrderItem' => '\BWC\Component\WWDAPI\OrderItem',
    'Order' => '\BWC\Component\WWDAPI\Order',
    'OrderCreditsResponse' => '\BWC\Component\WWDAPI\OrderCreditsResponse',
    'OrderDomains' => '\BWC\Component\WWDAPI\OrderDomains',
    'DomainRegistration' => '\BWC\Component\WWDAPI\DomainRegistration',
    'ContactInfo' => '\BWC\Component\WWDAPI\ContactInfo',
    'Nexus' => '\BWC\Component\WWDAPI\Nexus',
    'NS' => '\BWC\Component\WWDAPI\NS',
    'DomainByProxy' => '\BWC\Component\WWDAPI\DomainByProxy',
    'OrderDomainsResponse' => '\BWC\Component\WWDAPI\OrderDomainsResponse',
    'OrderDomainRenewals' => '\BWC\Component\WWDAPI\OrderDomainRenewals',
    'DomainRenewal' => '\BWC\Component\WWDAPI\DomainRenewal',
    'OrderDomainRenewalsResponse' => '\BWC\Component\WWDAPI\OrderDomainRenewalsResponse',
    'OrderPrivateDomainRenewals' => '\BWC\Component\WWDAPI\OrderPrivateDomainRenewals',
    'ResourceRenewal' => '\BWC\Component\WWDAPI\ResourceRenewal',
    'OrderPrivateDomainRenewalsResponse' => '\BWC\Component\WWDAPI\OrderPrivateDomainRenewalsResponse',
    'OrderDomainTransfers' => '\BWC\Component\WWDAPI\OrderDomainTransfers',
    'DomainTransfer' => '\BWC\Component\WWDAPI\DomainTransfer',
    'OrderDomainTransfersResponse' => '\BWC\Component\WWDAPI\OrderDomainTransfersResponse',
    'OrderDomainRedemptions' => '\BWC\Component\WWDAPI\OrderDomainRedemptions',
    'DomainRedemption' => '\BWC\Component\WWDAPI\DomainRedemption',
    'OrderDomainRedemptionsResponse' => '\BWC\Component\WWDAPI\OrderDomainRedemptionsResponse',
    'OrderDomainPrivacy' => '\BWC\Component\WWDAPI\OrderDomainPrivacy',
    'OrderDomainPrivacyResponse' => '\BWC\Component\WWDAPI\OrderDomainPrivacyResponse',
    'OrderResourceRenewals' => '\BWC\Component\WWDAPI\OrderResourceRenewals',
    'OrderResourceRenewalsResponse' => '\BWC\Component\WWDAPI\OrderResourceRenewalsResponse',
    'OrderServiceRenewals' => '\BWC\Component\WWDAPI\OrderServiceRenewals',
    'ServiceRenewal' => '\BWC\Component\WWDAPI\ServiceRenewal',
    'OrderServiceRenewalsResponse' => '\BWC\Component\WWDAPI\OrderServiceRenewalsResponse',
    'OrderServices' => '\BWC\Component\WWDAPI\OrderServices',
    'ProductGroup' => '\BWC\Component\WWDAPI\ProductGroup',
    'OrderServicesResponse' => '\BWC\Component\WWDAPI\OrderServicesResponse',
    'OrderDomainBackOrders' => '\BWC\Component\WWDAPI\OrderDomainBackOrders',
    'DomainBackOrder' => '\BWC\Component\WWDAPI\DomainBackOrder',
    'OrderDomainBackOrdersResponse' => '\BWC\Component\WWDAPI\OrderDomainBackOrdersResponse',
    'Cancel' => '\BWC\Component\WWDAPI\Cancel',
    'CancelResponse' => '\BWC\Component\WWDAPI\CancelResponse',
    'UpdateDomainOwnership' => '\BWC\Component\WWDAPI\UpdateDomainOwnership',
    'GainingOwner' => '\BWC\Component\WWDAPI\GainingOwner',
    'ShopperNoDBP' => '\BWC\Component\WWDAPI\ShopperNoDBP',
    'UpdateDomainOwnershipResponse' => '\BWC\Component\WWDAPI\UpdateDomainOwnershipResponse',
    'ResetPassword' => '\BWC\Component\WWDAPI\ResetPassword',
    'ResetPasswordResponse' => '\BWC\Component\WWDAPI\ResetPasswordResponse',
    'SetShopperInfo' => '\BWC\Component\WWDAPI\SetShopperInfo',
    'SetShopperInfoResponse' => '\BWC\Component\WWDAPI\SetShopperInfoResponse',
    'CreateNewShopper' => '\BWC\Component\WWDAPI\CreateNewShopper',
    'CreateNewShopperResponse' => '\BWC\Component\WWDAPI\CreateNewShopperResponse',
    'CheckUser' => '\BWC\Component\WWDAPI\CheckUser',
    'CheckUserResponse' => '\BWC\Component\WWDAPI\CheckUserResponse',
    'SetupDomainAlert' => '\BWC\Component\WWDAPI\SetupDomainAlert',
    'DomainAlert' => '\BWC\Component\WWDAPI\DomainAlert',
    'SetupDomainAlertResponse' => '\BWC\Component\WWDAPI\SetupDomainAlertResponse',
    'UpdateDomainAlert' => '\BWC\Component\WWDAPI\UpdateDomainAlert',
    'UpdateDomainAlertResponse' => '\BWC\Component\WWDAPI\UpdateDomainAlertResponse',
    'RemoveDomainAlert' => '\BWC\Component\WWDAPI\RemoveDomainAlert',
    'RemoveDomainAlertResponse' => '\BWC\Component\WWDAPI\RemoveDomainAlertResponse',
    'GetDomainAlertCredits' => '\BWC\Component\WWDAPI\GetDomainAlertCredits',
    'GetDomainAlertCreditsResponse' => '\BWC\Component\WWDAPI\GetDomainAlertCreditsResponse',
    'GetMonitoredDomainList' => '\BWC\Component\WWDAPI\GetMonitoredDomainList',
    'GetMonitoredDomainListResponse' => '\BWC\Component\WWDAPI\GetMonitoredDomainListResponse',
    'GetExpiringNameList' => '\BWC\Component\WWDAPI\GetExpiringNameList',
    'GetExpiringNameListResponse' => '\BWC\Component\WWDAPI\GetExpiringNameListResponse',
    'DomainForwarding' => '\BWC\Component\WWDAPI\DomainForwarding',
    'DomainForwardingResponse' => '\BWC\Component\WWDAPI\DomainForwardingResponse',
    'UpdateNameServer' => '\BWC\Component\WWDAPI\UpdateNameServer',
    'Domain' => '\BWC\Component\WWDAPI\Domain',
    'UpdateNameServerResponse' => '\BWC\Component\WWDAPI\UpdateNameServerResponse',
    'UpdateDomainContact' => '\BWC\Component\WWDAPI\UpdateDomainContact',
    'UpdateDomainContactResponse' => '\BWC\Component\WWDAPI\UpdateDomainContactResponse',
    'SetDomainLocking' => '\BWC\Component\WWDAPI\SetDomainLocking',
    'SetDomainLockingResponse' => '\BWC\Component\WWDAPI\SetDomainLockingResponse',
    'ManageTransfer' => '\BWC\Component\WWDAPI\ManageTransfer',
    'ManageTransferResponse' => '\BWC\Component\WWDAPI\ManageTransferResponse',
    'UpdateDomainForwarding' => '\BWC\Component\WWDAPI\UpdateDomainForwarding',
    'UpdateDomainForwardingResponse' => '\BWC\Component\WWDAPI\UpdateDomainForwardingResponse',
    'UpdateDomainMasking' => '\BWC\Component\WWDAPI\UpdateDomainMasking',
    'UpdateDomainMaskingResponse' => '\BWC\Component\WWDAPI\UpdateDomainMaskingResponse',
    'ModifyDNS' => '\BWC\Component\WWDAPI\ModifyDNS',
    'DNSRequest' => '\BWC\Component\WWDAPI\DNSRequest',
    'ModifyDNSResponse' => '\BWC\Component\WWDAPI\ModifyDNSResponse',
    'GetIDNLanguageList' => '\BWC\Component\WWDAPI\GetIDNLanguageList',
    'GetIDNLanguageListResponse' => '\BWC\Component\WWDAPI\GetIDNLanguageListResponse',
    'GetPunycodeIDN' => '\BWC\Component\WWDAPI\GetPunycodeIDN',
    'GetPunycodeIDNResponse' => '\BWC\Component\WWDAPI\GetPunycodeIDNResponse',
    'GetUnicodeIDN' => '\BWC\Component\WWDAPI\GetUnicodeIDN',
    'GetUnicodeIDNResponse' => '\BWC\Component\WWDAPI\GetUnicodeIDNResponse',
    'ValidateRegistration' => '\BWC\Component\WWDAPI\ValidateRegistration',
    'DomainContacts' => '\BWC\Component\WWDAPI\DomainContacts',
    'DomainData' => '\BWC\Component\WWDAPI\DomainData',
    'ValidateRegistrationResponse' => '\BWC\Component\WWDAPI\ValidateRegistrationResponse',
    'SetServiceAddOnQty' => '\BWC\Component\WWDAPI\SetServiceAddOnQty',
    'SetServiceAddOnQtyResponse' => '\BWC\Component\WWDAPI\SetServiceAddOnQtyResponse',
    'GetAutoResponderForEmail' => '\BWC\Component\WWDAPI\GetAutoResponderForEmail',
    'ReturnConfig' => '\BWC\Component\WWDAPI\ReturnConfig',
    'GetAutoResponderForEmailResponse' => '\BWC\Component\WWDAPI\GetAutoResponderForEmailResponse',
    'GetCatchallStatusForEmail' => '\BWC\Component\WWDAPI\GetCatchallStatusForEmail',
    'GetCatchallStatusForEmailResponse' => '\BWC\Component\WWDAPI\GetCatchallStatusForEmailResponse',
    'GetDiskUsageForEmail' => '\BWC\Component\WWDAPI\GetDiskUsageForEmail',
    'GetDiskUsageForEmailResponse' => '\BWC\Component\WWDAPI\GetDiskUsageForEmailResponse',
    'GetEmailAddressInfoForShopper' => '\BWC\Component\WWDAPI\GetEmailAddressInfoForShopper',
    'GetEmailAddressInfoForShopperResponse' => '\BWC\Component\WWDAPI\GetEmailAddressInfoForShopperResponse',
    'GetEmailAddressesForDomain' => '\BWC\Component\WWDAPI\GetEmailAddressesForDomain',
    'GetEmailAddressesForDomainResponse' => '\BWC\Component\WWDAPI\GetEmailAddressesForDomainResponse',
    'GetEmailAddressesForPlan' => '\BWC\Component\WWDAPI\GetEmailAddressesForPlan',
    'GetEmailAddressesForPlanResponse' => '\BWC\Component\WWDAPI\GetEmailAddressesForPlanResponse',
    'GetEmailAddressesForShopper' => '\BWC\Component\WWDAPI\GetEmailAddressesForShopper',
    'GetEmailAddressesForShopperResponse' => '\BWC\Component\WWDAPI\GetEmailAddressesForShopperResponse',
    'GetEmailPlanInfoForShopper' => '\BWC\Component\WWDAPI\GetEmailPlanInfoForShopper',
    'GetEmailPlanInfoForShopperResponse' => '\BWC\Component\WWDAPI\GetEmailPlanInfoForShopperResponse',
    'GetEmailPlansForDomain' => '\BWC\Component\WWDAPI\GetEmailPlansForDomain',
    'GetEmailPlansForDomainResponse' => '\BWC\Component\WWDAPI\GetEmailPlansForDomainResponse',
    'GetEmailPlansForShopper' => '\BWC\Component\WWDAPI\GetEmailPlansForShopper',
    'GetEmailPlansForShopperResponse' => '\BWC\Component\WWDAPI\GetEmailPlansForShopperResponse',
    'GetIMAPForEmail' => '\BWC\Component\WWDAPI\GetIMAPForEmail',
    'GetIMAPForEmailResponse' => '\BWC\Component\WWDAPI\GetIMAPForEmailResponse',
    'GetRIMForEmail' => '\BWC\Component\WWDAPI\GetRIMForEmail',
    'GetRIMForEmailResponse' => '\BWC\Component\WWDAPI\GetRIMForEmailResponse',
    'GetSMTPRelayInfoForShopper' => '\BWC\Component\WWDAPI\GetSMTPRelayInfoForShopper',
    'GetSMTPRelayInfoForShopperResponse' => '\BWC\Component\WWDAPI\GetSMTPRelayInfoForShopperResponse',
    'GetSMTPRelayPlansForDomain' => '\BWC\Component\WWDAPI\GetSMTPRelayPlansForDomain',
    'GetSMTPRelayPlansForDomainResponse' => '\BWC\Component\WWDAPI\GetSMTPRelayPlansForDomainResponse',
    'GetSMTPRelayPlansForEmail' => '\BWC\Component\WWDAPI\GetSMTPRelayPlansForEmail',
    'GetSMTPRelayPlansForEmailResponse' => '\BWC\Component\WWDAPI\GetSMTPRelayPlansForEmailResponse',
    'GetSMTPRelaysForEmail' => '\BWC\Component\WWDAPI\GetSMTPRelaysForEmail',
    'GetSMTPRelaysForEmailResponse' => '\BWC\Component\WWDAPI\GetSMTPRelaysForEmailResponse',
    'GetSMTPRelaysForShopper' => '\BWC\Component\WWDAPI\GetSMTPRelaysForShopper',
    'GetSMTPRelaysForShopperResponse' => '\BWC\Component\WWDAPI\GetSMTPRelaysForShopperResponse',
    'GetStatusForEmail' => '\BWC\Component\WWDAPI\GetStatusForEmail',
    'GetStatusForEmailResponse' => '\BWC\Component\WWDAPI\GetStatusForEmailResponse',
    'MoveEmailAccount' => '\BWC\Component\WWDAPI\MoveEmailAccount',
    'MoveEmailAccountResponse' => '\BWC\Component\WWDAPI\MoveEmailAccountResponse',
    'RemoveEmailAddress' => '\BWC\Component\WWDAPI\RemoveEmailAddress',
    'RemoveEmailAddressResponse' => '\BWC\Component\WWDAPI\RemoveEmailAddressResponse',
    'RemoveRIMAccount' => '\BWC\Component\WWDAPI\RemoveRIMAccount',
    'RemoveRIMAccountResponse' => '\BWC\Component\WWDAPI\RemoveRIMAccountResponse',
    'RemoveSmtpRelay' => '\BWC\Component\WWDAPI\RemoveSmtpRelay',
    'RemoveSmtpRelayResponse' => '\BWC\Component\WWDAPI\RemoveSmtpRelayResponse',
    'RenameEmailPlan' => '\BWC\Component\WWDAPI\RenameEmailPlan',
    'RenameEmailPlanResponse' => '\BWC\Component\WWDAPI\RenameEmailPlanResponse',
    'SetAutoResponder' => '\BWC\Component\WWDAPI\SetAutoResponder',
    'SetAutoResponderResponse' => '\BWC\Component\WWDAPI\SetAutoResponderResponse',
    'SetEmailAccount' => '\BWC\Component\WWDAPI\SetEmailAccount',
    'SetEmailAccountResponse' => '\BWC\Component\WWDAPI\SetEmailAccountResponse',
    'SetRIMAccount' => '\BWC\Component\WWDAPI\SetRIMAccount',
    'SetRIMAccountResponse' => '\BWC\Component\WWDAPI\SetRIMAccountResponse',
    'SetSmtpRelays' => '\BWC\Component\WWDAPI\SetSmtpRelays',
    'SetSmtpRelaysResponse' => '\BWC\Component\WWDAPI\SetSmtpRelaysResponse',
    'TestEmailPassword' => '\BWC\Component\WWDAPI\TestEmailPassword',
    'TestEmailPasswordResponse' => '\BWC\Component\WWDAPI\TestEmailPasswordResponse',
    'GetAvailableBalance' => '\BWC\Component\WWDAPI\GetAvailableBalance',
    'GetAvailableBalanceResponse' => '\BWC\Component\WWDAPI\GetAvailableBalanceResponse',
    'GetLegalAgreementUrl' => '\BWC\Component\WWDAPI\GetLegalAgreementUrl',
    'GetLegalAgreementUrlResponse' => '\BWC\Component\WWDAPI\GetLegalAgreementUrlResponse',
    'GetLegalAgreementContent' => '\BWC\Component\WWDAPI\GetLegalAgreementContent',
    'GetLegalAgreementContentResponse' => '\BWC\Component\WWDAPI\GetLegalAgreementContentResponse',
    'ResendContactValidation' => '\BWC\Component\WWDAPI\ResendContactValidation',
    'ResendContactValidationResponse' => '\BWC\Component\WWDAPI\ResendContactValidationResponse');


    /**
     *
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'api.wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options['trace'] = 1;

        parent::__construct($wsdl, $options);
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
        return $this->__soapCall('ProcessRequest', array($parameters));
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
        return $this->__soapCall('Describe', array($parameters));
    }

    /**
     * Checks the availability of domains, hosts and name servers.
     *
     * @param CheckAvailability $parameters
     * @access public
     * @return CheckAvailabilityResponse
     */
    public function CheckAvailability(CheckAvailability $parameters){
       return $this->__soapCall('CheckAvailability', array($parameters));
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
        return $this->__soapCall('CheckDomains', array($parameters));
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
        return $this->__soapCall('Info', array($parameters));
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
        return $this->__soapCall('NameGen', array($parameters));
    }

    /**
     * Used to get the list of alternative domain names based on a given name (Domains Bot Service).
     *
     * @param NameGenDB $parameters
     * @access public
     * @return NameGenDBResponse
     */
    public function NameGenDB(NameGenDB $parameters)
    {
        return $this->__soapCall('NameGenDB', array($parameters));
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
        return $this->__soapCall('NameGenDBWithTimeLimit', array($parameters));
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
        return $this->__soapCall('Poll', array($parameters));
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
        return $this->__soapCall('OrderCredits', array($parameters));
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
        return $this->__soapCall('OrderDomains', array($parameters));
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
        return $this->__soapCall('OrderDomainRenewals', array($parameters));
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
        return $this->__soapCall('OrderPrivateDomainRenewals', array($parameters));
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
        return $this->__soapCall('OrderDomainTransfers', array($parameters));
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
        return $this->__soapCall('OrderDomainRedemptions', array($parameters));
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
        return $this->__soapCall('OrderDomainPrivacy', array($parameters));
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
        return $this->__soapCall('OrderResourceRenewals', array($parameters));
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
        return $this->__soapCall('OrderServiceRenewals', array($parameters));
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
        return $this->__soapCall('OrderServices', array($parameters));
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
        return $this->__soapCall('OrderDomainBackOrders', array($parameters));
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
        return $this->__soapCall('Cancel', array($parameters));
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
        return $this->__soapCall('UpdateDomainOwnership', array($parameters));
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
        return $this->__soapCall('ResetPassword', array($parameters));
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
        return $this->__soapCall('SetShopperInfo', array($parameters));
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
        return $this->__soapCall('CreateNewShopper', array($parameters));
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
        return $this->__soapCall('CheckUser', array($parameters));
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
        return $this->__soapCall('SetupDomainAlert', array($parameters));
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
        return $this->__soapCall('UpdateDomainAlert', array($parameters));
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
        return $this->__soapCall('RemoveDomainAlert', array($parameters));
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
        return $this->__soapCall('GetDomainAlertCredits', array($parameters));
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
        return $this->__soapCall('GetMonitoredDomainList', array($parameters));
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
        return $this->__soapCall('GetExpiringNameList', array($parameters));
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
        return $this->__soapCall('DomainForwarding', array($parameters));
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
        return $this->__soapCall('UpdateNameServer', array($parameters));
    }

    /**
     * This method is used for modifying associated contact information for the given domains.
     *
     * @param UpdateDomainContact $parameters
     * @access public
     * @return UpdateDomainContactResponse
     */
    public function UpdateDomainContact(UpdateDomainContact $parameters)
    {
        return $this->__soapCall('UpdateDomainContact', array($parameters));
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
        return $this->__soapCall('SetDomainLocking', array($parameters));
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
        return $this->__soapCall('ManageTransfer', array($parameters));
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
        return $this->__soapCall('UpdateDomainForwarding', array($parameters));
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
        return $this->__soapCall('UpdateDomainMasking', array($parameters));
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
        return $this->__soapCall('ModifyDNS', array($parameters));
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
        return $this->__soapCall('GetIDNLanguageList', array($parameters));
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
        return $this->__soapCall('GetPunycodeIDN', array($parameters));
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
        return $this->__soapCall('GetUnicodeIDN', array($parameters));
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
        return $this->__soapCall('ValidateRegistration', array($parameters));
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
        return $this->__soapCall('SetServiceAddOnQty', array($parameters));
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
        return $this->__soapCall('GetAutoResponderForEmail', array($parameters));
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
        return $this->__soapCall('GetCatchallStatusForEmail', array($parameters));
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
        return $this->__soapCall('GetDiskUsageForEmail', array($parameters));
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
        return $this->__soapCall('GetEmailAddressInfoForShopper', array($parameters));
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
        return $this->__soapCall('GetEmailAddressesForDomain', array($parameters));
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
        return $this->__soapCall('GetEmailAddressesForPlan', array($parameters));
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
        return $this->__soapCall('GetEmailAddressesForShopper', array($parameters));
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
        return $this->__soapCall('GetEmailPlanInfoForShopper', array($parameters));
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
        return $this->__soapCall('GetEmailPlansForDomain', array($parameters));
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
        return $this->__soapCall('GetEmailPlansForShopper', array($parameters));
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
        return $this->__soapCall('GetIMAPForEmail', array($parameters));
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
        return $this->__soapCall('GetRIMForEmail', array($parameters));
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
        return $this->__soapCall('GetSMTPRelayInfoForShopper', array($parameters));
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
        return $this->__soapCall('GetSMTPRelayPlansForDomain', array($parameters));
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
        return $this->__soapCall('GetSMTPRelayPlansForEmail', array($parameters));
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
        return $this->__soapCall('GetSMTPRelaysForEmail', array($parameters));
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
        return $this->__soapCall('GetSMTPRelaysForShopper', array($parameters));
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
        return $this->__soapCall('GetStatusForEmail', array($parameters));
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
        return $this->__soapCall('MoveEmailAccount', array($parameters));
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
        return $this->__soapCall('RemoveEmailAddress', array($parameters));
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
        return $this->__soapCall('RemoveRIMAccount', array($parameters));
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
        return $this->__soapCall('RemoveSmtpRelay', array($parameters));
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
        return $this->__soapCall('RenameEmailPlan', array($parameters));
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
        return $this->__soapCall('SetAutoResponder', array($parameters));
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
        return $this->__soapCall('SetEmailAccount', array($parameters));
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
        return $this->__soapCall('SetRIMAccount', array($parameters));
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
        return $this->__soapCall('SetSmtpRelays', array($parameters));
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
        return $this->__soapCall('TestEmailPassword', array($parameters));
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
        return $this->__soapCall('GetAvailableBalance', array($parameters));
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
        return $this->__soapCall('GetLegalAgreementUrl', array($parameters));
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
        return $this->__soapCall('GetLegalAgreementContent', array($parameters));
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
        return $this->__soapCall('ResendContactValidation', array($parameters));
    }

}
