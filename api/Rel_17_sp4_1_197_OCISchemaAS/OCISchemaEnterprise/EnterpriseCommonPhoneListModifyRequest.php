<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an entry in an enterprise's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCommonPhoneListModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $entryName,
             $newEntryName=null,
             $phoneNumber=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->entryName         = new PhoneListEntryName($entryName);
        $this->newEntryName      = new PhoneListEntryName($newEntryName);
        $this->phoneNumber       = new OutgoingDN($phoneNumber);
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setEntryName($entryName)
    {
        $entryName and $this->entryName = new PhoneListEntryName($entryName);
    }

    public function getEntryName()
    {
        return (!$this->entryName) ?: $this->entryName->value();
    }

    public function setNewEntryName($newEntryName)
    {
        $newEntryName and $this->newEntryName = new PhoneListEntryName($newEntryName);
    }

    public function getNewEntryName()
    {
        return (!$this->newEntryName) ?: $this->newEntryName->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new OutgoingDN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }
}
