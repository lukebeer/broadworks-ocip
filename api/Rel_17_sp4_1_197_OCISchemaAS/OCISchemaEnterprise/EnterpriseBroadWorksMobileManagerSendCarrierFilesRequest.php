<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Sends an email with the carrier information and certificate files.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest';
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setEmailTo($emailTo = null)
    {
        $this->emailTo = ($emailTo InstanceOf EmailAddress)
             ? $emailTo
             : new EmailAddress($emailTo);
        $this->emailTo->setName('emailTo');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailTo
     */
    public function getEmailTo()
    {
        return ($this->emailTo) ? $this->emailTo->getValue() : null;
    }
}
