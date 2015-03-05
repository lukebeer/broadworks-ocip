<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify service code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceCode,
             $description=null
    ) {
        $this->serviceCode = new ServiceCode($serviceCode);
        $this->description = new ServiceCodeDescription($description);
        $this->args        = func_get_args();
    }

    public function setServiceCode($serviceCode)
    {
        $serviceCode and $this->serviceCode = new ServiceCode($serviceCode);
    }

    public function getServiceCode()
    {
        return (!$this->serviceCode) ?: $this->serviceCode->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new ServiceCodeDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
