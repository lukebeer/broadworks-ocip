<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:token;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemSoftwareVersionGetRequest.
 */
class SystemSoftwareVersionGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $version
    ) {
        $this->version = $version;
        $this->args    = func_get_args();
    }

    public function setVersion($version)
    {
        $version and $this->version = new xs:token($version);
    }

    public function getVersion()
    {
        return (!$this->version) ?: $this->version->value();
    }
}
