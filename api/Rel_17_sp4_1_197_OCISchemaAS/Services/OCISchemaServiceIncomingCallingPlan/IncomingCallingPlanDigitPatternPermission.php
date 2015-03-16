<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Indicates whether calls from specified digit patterns are permitted.
 */
class IncomingCallingPlanDigitPatternPermission extends ComplexType implements ComplexInterface
{
    public    $elementName = 'IncomingCallingPlanDigitPatternPermission';
    protected $digitPatternName;
    protected $allow;

    public function __construct(
         $digitPatternName = '',
         $allow = ''
    ) {
        $this->setDigitPatternName($digitPatternName);
        $this->setAllow($allow);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDigitPatternName($digitPatternName = null)
    {
        $this->digitPatternName = new SimpleContent($digitPatternName);
        $this->digitPatternName->setElementName('digitPatternName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $digitPatternName
     */
    public function getDigitPatternName()
    {
        return ($this->digitPatternName)
            ? $this->digitPatternName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllow($allow = null)
    {
        $this->allow = new SimpleContent($allow);
        $this->allow->setElementName('allow');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allow
     */
    public function getAllow()
    {
        return ($this->allow)
            ? $this->allow->getElementValue()
            : null;
    }
}
