<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an entry in an enterprise's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCommonPhoneListModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'EnterpriseCommonPhoneListModifyRequest';
    protected $serviceProviderId = null;
    protected $entryName         = null;
    protected $newEntryName      = null;
    protected $phoneNumber       = null;

    public function __construct(
         $serviceProviderId,
         $entryName,
         $newEntryName = null,
         $phoneNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEntryName($entryName);
        $this->setNewEntryName($newEntryName);
        $this->setPhoneNumber($phoneNumber);
    }

    /**
     * @return 
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setEntryName($entryName = null)
    {
        if (!$entryName) return $this;
        $this->entryName = ($entryName InstanceOf PhoneListEntryName)
             ? $entryName
             : new PhoneListEntryName($entryName);
        $this->entryName->setName('entryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName
     */
    public function getEntryName()
    {
        return $this->entryName->getValue();
    }

    /**
     * 
     */
    public function setNewEntryName($newEntryName = null)
    {
        if (!$newEntryName) return $this;
        $this->newEntryName = ($newEntryName InstanceOf PhoneListEntryName)
             ? $newEntryName
             : new PhoneListEntryName($newEntryName);
        $this->newEntryName->setName('newEntryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName
     */
    public function getNewEntryName()
    {
        return $this->newEntryName->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDN)
             ? $phoneNumber
             : new OutgoingDN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }
}
