<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemOutgoingCallingPlanGetRequest17sp3.
 */
class SystemOutgoingCallingPlanGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanGetResponse17sp3';
    public    $name                         = __CLASS__;
    protected $directTransferScreening      = null;
    protected $enableEnhancedTollCallTyping = null;


    /**
     * 
     */
    public function setDirectTransferScreening($directTransferScreening = null)
    {
        $this->directTransferScreening = (boolean) $directTransferScreening;
    }

    /**
     * 
     */
    public function getDirectTransferScreening()
    {
        return (!$this->directTransferScreening) ?: $this->directTransferScreening->getValue();
    }

    /**
     * 
     */
    public function setEnableEnhancedTollCallTyping($enableEnhancedTollCallTyping = null)
    {
        $this->enableEnhancedTollCallTyping = (boolean) $enableEnhancedTollCallTyping;
    }

    /**
     * 
     */
    public function getEnableEnhancedTollCallTyping()
    {
        return (!$this->enableEnhancedTollCallTyping) ?: $this->enableEnhancedTollCallTyping->getValue();
    }
}
