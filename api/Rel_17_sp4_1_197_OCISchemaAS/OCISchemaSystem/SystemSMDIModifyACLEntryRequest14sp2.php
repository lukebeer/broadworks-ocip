<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkACLEntryDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify an entry from the SMDI access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSMDIModifyACLEntryRequest14sp2 extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $netAddress  = null;
    protected $description = null;

    public function __construct(
         $netAddress,
         $description = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
    }

    /**
     * Numeric IP Address.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
    }

    /**
     * Numeric IP Address.
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
}
