<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to add a service code for the purpose of providing free format routable strings for dialing
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $serviceCode = null;
    protected $description = null;

    public function __construct(
         $serviceCode,
         $description
    ) {
        $this->setServiceCode($serviceCode);
        $this->setDescription($description);
    }

    /**
     * Service Codes that are used for dialing in lieu of phone numbers.
     *         The digit pattern may contain digits 0-9, ?, *, and #.
     */
    public function setServiceCode($serviceCode = null)
    {
        $this->serviceCode = ($serviceCode InstanceOf ServiceCode)
             ? $serviceCode
             : new ServiceCode($serviceCode);
    }

    /**
     * Service Codes that are used for dialing in lieu of phone numbers.
     *         The digit pattern may contain digits 0-9, ?, *, and #.
     */
    public function getServiceCode()
    {
        return (!$this->serviceCode) ?: $this->serviceCode->getValue();
    }

    /**
     * Service Code description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceCodeDescription)
             ? $description
             : new ServiceCodeDescription($description);
    }

    /**
     * Service Code description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
