<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenterMonitoring; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallCenterMonitoringGetRequest.
 */
class UserCallCenterMonitoringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $playToneToAgentForSilentMonitoring
    ) {
        $this->playToneToAgentForSilentMonitoring = $playToneToAgentForSilentMonitoring;
        $this->args                               = func_get_args();
    }

    public function setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring)
    {
        $playToneToAgentForSilentMonitoring and $this->playToneToAgentForSilentMonitoring = new xs:boolean($playToneToAgentForSilentMonitoring);
    }

    public function getPlayToneToAgentForSilentMonitoring()
    {
        return (!$this->playToneToAgentForSilentMonitoring) ?: $this->playToneToAgentForSilentMonitoring->value();
    }
}
