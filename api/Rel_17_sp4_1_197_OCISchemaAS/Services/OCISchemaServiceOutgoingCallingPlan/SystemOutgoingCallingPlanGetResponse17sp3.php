<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOutgoingCallingPlanGetRequest17sp3.
 */
class SystemOutgoingCallingPlanGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name                         = 'SystemOutgoingCallingPlanGetResponse17sp3';
    protected $directTransferScreening      = null;
    protected $enableEnhancedTollCallTyping = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanGetResponse17sp3 $response
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
        if (!$directTransferScreening) return $this;
        $this->directTransferScreening = new PrimitiveType($directTransferScreening);
        $this->directTransferScreening->setName('directTransferScreening');
        return $this;
    }

    /**
     * 
     * @return boolean $directTransferScreening
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening->getValue();
    }

    /**
     * 
     */
    public function setEnableEnhancedTollCallTyping($enableEnhancedTollCallTyping = null)
    {
        if (!$enableEnhancedTollCallTyping) return $this;
        $this->enableEnhancedTollCallTyping = new PrimitiveType($enableEnhancedTollCallTyping);
        $this->enableEnhancedTollCallTyping->setName('enableEnhancedTollCallTyping');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEnhancedTollCallTyping
     */
    public function getEnableEnhancedTollCallTyping()
    {
        return $this->enableEnhancedTollCallTyping->getValue();
    }
}
