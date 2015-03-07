<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserIntelligentNetworkServiceControlGetRequest.
 */
class UserIntelligentNetworkServiceControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $preAnswerActionsEnabled  = null;


    public function setPreAnswerActionsEnabled(xs:boolean $preAnswerActionsEnabled = null)
    {
    }

    public function getPreAnswerActionsEnabled()
    {
        return (!$this->preAnswerActionsEnabled) ?: $this->preAnswerActionsEnabled->value();
    }
}
