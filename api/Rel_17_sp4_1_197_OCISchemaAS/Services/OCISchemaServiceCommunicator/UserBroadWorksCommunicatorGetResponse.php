<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicator; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserBroadWorksCommunicatorGetRequest.
 */
class UserBroadWorksCommunicatorGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $configurationServerURL=null
    ) {
        $this->configurationServerURL = new URL($configurationServerURL);
        $this->args                   = func_get_args();
    }

    public function setConfigurationServerURL($configurationServerURL)
    {
        $configurationServerURL and $this->configurationServerURL = new URL($configurationServerURL);
    }

    public function getConfigurationServerURL()
    {
        return (!$this->configurationServerURL) ?: $this->configurationServerURL->value();
    }
}
