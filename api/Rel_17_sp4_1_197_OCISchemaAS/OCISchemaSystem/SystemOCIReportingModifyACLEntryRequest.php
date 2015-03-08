<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkACLEntryDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the description on an entry in the OCI Reporting Access Control List.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOCIReportingModifyACLEntryRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $netAddress       = null;
    protected $description      = null;
    protected $restrictMessages = null;

    public function __construct(
         $netAddress,
         $description = null,
         $restrictMessages = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
        $this->setRestrictMessages($restrictMessages);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * The description for the entry in the network access control list.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkACLEntryDescription)
             ? $description
             : new NetworkACLEntryDescription($description);
    }

    /**
     * The description for the entry in the network access control list.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * 
     */
    public function setRestrictMessages($restrictMessages = null)
    {
        $this->restrictMessages = (boolean) $restrictMessages;
    }

    /**
     * 
     */
    public function getRestrictMessages()
    {
        return (!$this->restrictMessages) ?: $this->restrictMessages->getValue();
    }
}
