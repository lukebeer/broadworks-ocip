<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserIntelligentNetworkServiceControlGetRequest.
 */
class UserIntelligentNetworkServiceControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $preAnswerActionsEnabled
    ) {
        $this->preAnswerActionsEnabled = $preAnswerActionsEnabled;
        $this->args                    = func_get_args();
    }

    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled)
    {
        $preAnswerActionsEnabled and $this->preAnswerActionsEnabled = new xs:boolean($preAnswerActionsEnabled);
    }

    public function getPreAnswerActionsEnabled()
    {
        return (!$this->preAnswerActionsEnabled) ?: $this->preAnswerActionsEnabled->value();
    }
}
