<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 or ErrorResponse.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $getDefaultMenuKeys
    ) {
        $this->getDefaultMenuKeys = $getDefaultMenuKeys;
        $this->args               = func_get_args();
    }

    public function setGetDefaultMenuKeys($getDefaultMenuKeys)
    {
        $getDefaultMenuKeys and $this->getDefaultMenuKeys = new xs:boolean($getDefaultMenuKeys);
    }

    public function getGetDefaultMenuKeys()
    {
        return (!$this->getDefaultMenuKeys) ?: $this->getDefaultMenuKeys->value();
    }
}
