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
    public    $elementName = 'SystemOutgoingCallingPlanGetResponse17sp3';
    protected $directTransferScreening;
    protected $enableEnhancedTollCallTyping;

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
        $this->directTransferScreening = new PrimitiveType($directTransferScreening);
        $this->directTransferScreening->setElementName('directTransferScreening');
        return $this;
    }

    /**
     * 
     * @return boolean $directTransferScreening
     */
    public function getDirectTransferScreening()
    {
        return ($this->directTransferScreening)
            ? $this->directTransferScreening->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableEnhancedTollCallTyping($enableEnhancedTollCallTyping = null)
    {
        $this->enableEnhancedTollCallTyping = new PrimitiveType($enableEnhancedTollCallTyping);
        $this->enableEnhancedTollCallTyping->setElementName('enableEnhancedTollCallTyping');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEnhancedTollCallTyping
     */
    public function getEnableEnhancedTollCallTyping()
    {
        return ($this->enableEnhancedTollCallTyping)
            ? $this->enableEnhancedTollCallTyping->getElementValue()
            : null;
    }
}
