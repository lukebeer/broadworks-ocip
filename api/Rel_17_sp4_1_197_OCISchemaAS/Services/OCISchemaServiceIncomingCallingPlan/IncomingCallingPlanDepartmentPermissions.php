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
 * Allows or disallows various types of incoming calls for a specified department.
 */
class IncomingCallingPlanDepartmentPermissions extends ComplexType implements ComplexInterface
{
    public    $elementName = 'IncomingCallingPlanDepartmentPermissions';
    protected $departmentKey;
    protected $departmentFullPathName;
    protected $allowFromWithinGroup;
    protected $allowFromOutsideGroup;
    protected $allowCollectCalls;
    protected $digitPatternPermission;

    public function __construct(
         $departmentKey = '',
         $departmentFullPathName = '',
         $allowFromWithinGroup = '',
         $allowFromOutsideGroup = '',
         $allowCollectCalls = '',
         $digitPatternPermission = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setDepartmentFullPathName($departmentFullPathName);
        $this->setAllowFromWithinGroup($allowFromWithinGroup);
        $this->setAllowFromOutsideGroup($allowFromOutsideGroup);
        $this->setAllowCollectCalls($allowCollectCalls);
        $this->setDigitPatternPermission($digitPatternPermission);
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
    public function setDepartmentFullPathName($departmentFullPathName = null)
    {
        $this->departmentFullPathName = new SimpleContent($departmentFullPathName);
        $this->departmentFullPathName->setElementName('departmentFullPathName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentFullPathName
     */
    public function getDepartmentFullPathName()
    {
        return ($this->departmentFullPathName)
            ? $this->departmentFullPathName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowFromWithinGroup($allowFromWithinGroup = null)
    {
        $this->allowFromWithinGroup = new SimpleContent($allowFromWithinGroup);
        $this->allowFromWithinGroup->setElementName('allowFromWithinGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowFromWithinGroup
     */
    public function getAllowFromWithinGroup()
    {
        return ($this->allowFromWithinGroup)
            ? $this->allowFromWithinGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowFromOutsideGroup($allowFromOutsideGroup = null)
    {
        $this->allowFromOutsideGroup = new SimpleContent($allowFromOutsideGroup);
        $this->allowFromOutsideGroup->setElementName('allowFromOutsideGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowFromOutsideGroup
     */
    public function getAllowFromOutsideGroup()
    {
        return ($this->allowFromOutsideGroup)
            ? $this->allowFromOutsideGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCollectCalls($allowCollectCalls = null)
    {
        $this->allowCollectCalls = new SimpleContent($allowCollectCalls);
        $this->allowCollectCalls->setElementName('allowCollectCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowCollectCalls
     */
    public function getAllowCollectCalls()
    {
        return ($this->allowCollectCalls)
            ? $this->allowCollectCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigitPatternPermission($digitPatternPermission = null)
    {
        $this->digitPatternPermission = new SimpleContent($digitPatternPermission);
        $this->digitPatternPermission->setElementName('digitPatternPermission');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $digitPatternPermission
     */
    public function getDigitPatternPermission()
    {
        return ($this->digitPatternPermission)
            ? $this->digitPatternPermission->getElementValue()
            : null;
    }
}
