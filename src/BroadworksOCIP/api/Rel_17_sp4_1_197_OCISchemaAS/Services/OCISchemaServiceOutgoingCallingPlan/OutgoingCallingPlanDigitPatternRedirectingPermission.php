<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Indicates whether redirecting calls using specified digit patterns are permitted.
 */
class OutgoingCallingPlanDigitPatternRedirectingPermission extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanDigitPatternRedirectingPermission';
    protected $digitPatternName;
    protected $permission;

    public function __construct(
         $digitPatternName = '',
         $permission = ''
    ) {
        $this->setDigitPatternName($digitPatternName);
        $this->setPermission($permission);
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
    public function setPermission($permission = null)
    {
        $this->permission = new SimpleContent($permission);
        $this->permission->setElementName('permission');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $permission
     */
    public function getPermission()
    {
        return ($this->permission)
            ? $this->permission->getElementValue()
            : null;
    }
}
