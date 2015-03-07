<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get an existing Network Class of Service.
 *         The response is either a SystemNetworkClassOfServiceGetResponse
 *         or an ErrorResponse.
 *         Replaced by: SystemNetworkClassOfServiceGetRequest17
 */
class SystemNetworkClassOfServiceGetRequest extends ComplexType implements ComplexInterface
{
    public    $name  = __CLASS__;
    protected $name  = null;

    public function __construct(
         $name
    ) {
        $this->setName($name);
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf NetworkClassOfServiceName)
             ? $name
             : new NetworkClassOfServiceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}
