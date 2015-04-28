<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Sends an email with the carrier information and certificate files.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest';
    protected $serviceProviderId;
    protected $emailTo;

    public function __construct(
         $serviceProviderId = '',
         $emailTo = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEmailTo($emailTo);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmailTo($emailTo = null)
    {
        $this->emailTo = ($emailTo InstanceOf EmailAddress)
             ? $emailTo
             : new EmailAddress($emailTo);
        $this->emailTo->setElementName('emailTo');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailTo
     */
    public function getEmailTo()
    {
        return ($this->emailTo)
            ? $this->emailTo->getElementValue()
            : null;
    }
}
