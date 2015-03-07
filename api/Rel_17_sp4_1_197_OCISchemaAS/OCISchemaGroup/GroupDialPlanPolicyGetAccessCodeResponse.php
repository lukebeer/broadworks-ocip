<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupDialPlanPolicyGetAccessCodeRequest
 */
class GroupDialPlanPolicyGetAccessCodeResponse extends ComplexType implements ComplexInterface
{
    public    $name                                         = __CLASS__;
    protected $includeCodeForNetworkTranslationsAndRouting  = null;
    protected $includeCodeForScreeningServices              = null;
    protected $enableSecondaryDialTone                      = null;
    protected $description                                  = null;


    public function setIncludeCodeForNetworkTranslationsAndRouting(xs:boolean $includeCodeForNetworkTranslationsAndRouting = null)
    {
    }

    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return (!$this->includeCodeForNetworkTranslationsAndRouting) ?: $this->includeCodeForNetworkTranslationsAndRouting->value();
    }

    public function setIncludeCodeForScreeningServices(xs:boolean $includeCodeForScreeningServices = null)
    {
    }

    public function getIncludeCodeForScreeningServices()
    {
        return (!$this->includeCodeForScreeningServices) ?: $this->includeCodeForScreeningServices->value();
    }

    public function setEnableSecondaryDialTone(xs:boolean $enableSecondaryDialTone = null)
    {
    }

    public function getEnableSecondaryDialTone()
    {
        return (!$this->enableSecondaryDialTone) ?: $this->enableSecondaryDialTone->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
