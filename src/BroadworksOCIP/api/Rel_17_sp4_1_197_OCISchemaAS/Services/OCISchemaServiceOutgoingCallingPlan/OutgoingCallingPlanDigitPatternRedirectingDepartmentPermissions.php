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
 * Outgoing Calling Plan redirecting call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions';
    protected $departmentKey;
    protected $departmentName;
    protected $digitPatternPermissions;

    public function __construct(
         $departmentKey = '',
         $departmentName = '',
         $digitPatternPermissions = ''
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setDepartmentName($departmentName);
        $this->setDigitPatternPermissions($digitPatternPermissions);
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
    public function setDepartmentKey($departmentKey = null)
    {
        $this->departmentKey = new SimpleContent($departmentKey);
        $this->departmentKey->setElementName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return ($this->departmentKey)
            ? $this->departmentKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = new SimpleContent($departmentName);
        $this->departmentName->setElementName('departmentName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentName
     */
    public function getDepartmentName()
    {
        return ($this->departmentName)
            ? $this->departmentName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigitPatternPermissions($digitPatternPermissions = null)
    {
        $this->digitPatternPermissions = new SimpleContent($digitPatternPermissions);
        $this->digitPatternPermissions->setElementName('digitPatternPermissions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $digitPatternPermissions
     */
    public function getDigitPatternPermissions()
    {
        return ($this->digitPatternPermissions)
            ? $this->digitPatternPermissions->getElementValue()
            : null;
    }
}
