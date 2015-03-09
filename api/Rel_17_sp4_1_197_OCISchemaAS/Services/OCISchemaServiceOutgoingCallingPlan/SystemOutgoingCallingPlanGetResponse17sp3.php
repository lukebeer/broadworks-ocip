<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanGetResponse17sp3;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOutgoingCallingPlanGetRequest17sp3.
 */
class SystemOutgoingCallingPlanGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $directTransferScreening      = null;
    protected $enableEnhancedTollCallTyping = null;

    /**
     * @return SystemOutgoingCallingPlanGetResponse17sp3
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
        return (!$this->directTransferScreening) ?: $this->directTransferScreening;
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
        return (!$this->enableEnhancedTollCallTyping) ?: $this->enableEnhancedTollCallTyping;
    }
}
